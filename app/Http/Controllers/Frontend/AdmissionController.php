<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class AdmissionController extends Controller
{
    public function create(){
        return view('frontend.admission');
    }



    public function verificationCreate(){
        return view('frontend.verification.create');
    }


public function checkVerification(Request $request){

    $check = Student::where('mobile',$request->mobile)->get();

    if($check[0]->status == 1){
        $data = Student::where('status',1)->get();
        return view("frontend.verification.verify_show",compact('data'));
    }else{
        return redirect()->route("frontend.verification.create")->with('danger'," Your Admission is not verify ! ");
    }

}

    
}
