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
        return view('frontend.admission');
    }



    public function verificationCreate(){
        return view('frontend.verification.create');
    }


public function checkVerification(Request $request){
    $data = Student::with(['courses'])
    ->where('mobile',$request->mobile)
    ->where('status',1)
    ->orWhere('status',2)
    ->get();

    if(count($data) > 0){
        $courseInfo = StudentCourse::with('course')->get();
        $avatarInfo = Student::with('avatar')->get();
        // dd($courseInfo[0]->course->name);
        return view("frontend.verification.verify_show",compact(['data','courseInfo','avatarInfo']));
    }else{
        return redirect()->route("frontend.verification.create")->with('danger'," Your Admission is not verify ! ");
    }
    

}

    
}
