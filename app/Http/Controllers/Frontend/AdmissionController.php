<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentCourse;

class AdmissionController extends Controller
{
    public function create(){
             $courses = Course::query()->select(['id','name'])->get();
        return view('frontend.admission',compact('courses'));
    }



    public function verificationCreate(){
        return view('frontend.verification.create');
    }


public function checkVerification(Request $request){

        if(preg_match('/(^([+]{1}[8]{2}|0088)?(01){1}[3-9]{1}\d{8})$/', $request->mobile)){
            $col = 'mobile';
        }else if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $request->mobile)){
            $col = 'email';
        }else{
            $col = 'name';  
        }


    $data = Student::with(['courses.course','avatar'])
    ->where($col,$request->mobile)
    ->where('status',1)
    ->orWhere('status',2)
    ->first();


    if(!empty($data)){
        $course = $data->courses->first();

       
      
        return view("frontend.verification.verify_show",compact(['data','course']));
    }else{
        return redirect()->route("frontend.verification.create")->with('danger'," Your Admission is not verify ! ");
    }
    

}

    
}
