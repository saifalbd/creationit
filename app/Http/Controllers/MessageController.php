<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Student;
use App\Services\MessageSender;
use Illuminate\Http\Request;

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
        })->toArray();

        $rep = new MessageSender();
        $rep->sendBulk($list);
    }
    public function attendance(){

    }
}
