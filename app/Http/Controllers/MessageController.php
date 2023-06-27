<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Student;
use App\Services\MessageSender;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

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
        $batches = Batch::query()->select(['id','title'])->get();
        return view('Admin.pages.message.attedance',compact('batches'));
    }

    public function attendanceForm(Request $request){
        $request->validate([
            'date'=>['required','date',
            'batch'=>['required','numeric',Rule::exists('batches','id')]
            ]]);
            $date = $request->date;
            $batch = Batch::find($request->batch);
            $attendance = $batch->attendances()->whereHas('list',fn($q)=>$q->where('date',$date)->where('attend','!=',1))
            ->with('list',fn($q)=>$q->where('date',$date)->where('attend','!=',1)->with('student:id,name,mobile'))
            ->first();
           

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
}
