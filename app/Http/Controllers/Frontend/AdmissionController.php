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
    $data = Student::with(['courses','avatar'])
    ->where('mobile',$request->mobile)
    ->where('status',1)
    ->orWhere('status',2)
    ->first();

    
    

// dd($course);
    if(!empty($data)){
        $courseId = $data->courses[0]->course_id;
        $course = Course::where('id',$courseId)->first();
        return view("frontend.verification.verify_show",compact(['data','course']));
    }else{
        return redirect()->route("frontend.verification.create")->with('danger'," Your Admission is not verify ! ");
    }
    

}

    
}
