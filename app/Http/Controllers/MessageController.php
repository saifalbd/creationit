<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Student;
use App\Services\MessageSender;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use PDO;

class MessageController extends Controller
{

    public function is_english($str)
    {
        if (strlen($str) != strlen(utf8_decode($str))) {
            return false;
        } else {
            return true;
        }
    }

    public function due(){

      $batches = Batch::query()->select(['id','title','active'])->whereActive(true)->get();
   
        return view('Admin.pages.message.due',compact('batches'));
    }

    public function dueForm(Request $request){
        $request->validate(['batch'=>['required','numeric']]);
        $batch_id = $request->batch;

        $batch = Batch::find($batch_id);

        $students = Student::query()->select(['id','name','mobile'])
        ->with(['courses'=>fn($q)=>$q->where('batch_id',$batch_id),'vouchers.details'])->get();

        
        $students =  $students->map(function($student){
            $student->courseIdist = $student->courses->pluck('course_id')->unique();
         
            return $student;

        })->filter(fn($student)=>$student->courseIdist->count())->map(function($student){
            $courseIdist =  $student->courseIdist->toArray();
            $fee = $student->courses->sum('fee');
            $paid = $student->vouchers->pluck('details')->collapse()->whereIn('course_id',$courseIdist)->sum('amount');
            $due = $fee - $paid;
            $id = $student->id;
            $name = $student->name;
            $mobile = $student->mobile;
            return compact('fee','paid','due','id','name','mobile');
        })->filter(fn($q)=>$q['due']>0)->values();
        
        
        return view('Admin.pages.message.dueForm',compact('students','batch'));
    }

    public function dueFormSend(Request $request){

    

        $request->validate([
            'items'=>['required','array'],
            'items.*'=>['required','array'],
            'items.*.to'=>['required','numeric'],
          
            'items.*.message'=>['required','string','max:360'],
           

        ]);
       
        $items = collect($request->items)->filter(fn($item)=>is_bd_phone($item['to']))->values()->map(function($item){
            $to = $item['to'];
            $message = $item['message'];
            return compact('to','message');
        })->toArray();
      
       (new MessageSender)->sendBulk($items);

        return redirect()->route('message.due',['success'=>'SuccessFully Send Messages']);
    }



    public function  bulk(){
        $batches = Batch::query()->select(['title','id'])->get();
        return view('Admin.pages.message.bulk',compact('batches'));
    }
    public function bulkStore(Request $request){
        $request->validate([
            'batch'=>['required','numeric'],
            'message'=>['required','string','max:160']
        ]);
        
        $batch_id = $request->batch;
        $message = $request->message;
        $students = Student::query()->whereHas('courses',fn($q)=>$q->where('batch_id',$batch_id))->get();
        $list =  $students->map(function($student)use($message){
            $to = $student->mobile;
            return compact('to','message');
        })->filter(fn($item)=>is_bd_phone($item['to']))->values()->unique('to')->toArray();

        $rep = new MessageSender();
        $rep->sendBulk($list);
    }
    public function attendance(){
        $batches = Batch::query()->select(['id','title','active'])->whereActive(true)->get();
        return view('Admin.pages.message.attedance',compact('batches'));
    }

    public function attendanceForm(Request $request){
        $request->validate([
            'date'=>['required','date','before_or_equal:today'],
            'batch'=>['required','numeric',Rule::exists('attendances','batch_id')]
            ]);
            $date = $request->date;
            $batch = Batch::find($request->batch);
            $attendance = $batch->attendances()->whereHas('list',fn($q)=>$q->where('date',$date)->where('attend','!=',1))
            ->with('list',fn($q)=>$q->where('date',$date)->where('attend','!=',1)->with('student:id,name,mobile'))
            ->first();

            if(!$attendance){
                return redirect()->route('attendance.create');
            }
           

        return view('Admin.pages.message.attedanceForm',compact('batch','date','attendance'));
    }

    public function attendanceFormStore(Request $request){
        
        $request->validate([
            'items'=>['required','array'],
            'items.*'=>['required','array'],
            'items.*.to'=>['required','numeric'],
            'items.*.message'=>['required','string','max:160'],
        ]);

        $items = collect($request->items)->filter(fn($item)=>is_bd_phone($item['to']))->values()->toArray();

        (new MessageSender)->sendBulk($items);

        return redirect()->route('batch.index',['success'=>'SuccessFully Send Messages']);
        

    }


    public function smsInfo(){

        $token = config('sms.token');
        $url = config('sms.info_url');

        $slug = "token=$token&rate&totalsms&balance&expiry&json";
        $res = Http::get($url,$slug);

    

        $arr = collect(json_decode($res->body()));

        $balance = $arr->where('action','balance')->first()->response;
        $totalsms = $arr->where('action','totalsms')->first()->response;
        $rate = $arr->where('action','rate')->first()->response;
        $expiry = $arr->where('action','expiry')->first()->response;
        

       $data = compact('balance','rate','totalsms','expiry');

        return view('Admin.pages.message.smsInfo',$data);
    }
}
