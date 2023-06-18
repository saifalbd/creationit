<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function index(){
        return view('frontend.index');
    }


// team page 
public function instructor(){
    return view('frontend.instructor');
}

// course
public function course(){
    return view('frontend.course.course');
}
// syllabus
public function syllabus(){
    return view('frontend.course.syllabus');
}


// notice
public function notice(){
    return view('frontend.notice');
}

// contact page
public function contact(){
    return view('frontend.contact');
}

// verification form create
public function verificationCreate(){
    return view('frontend.verification.create');
}


// verificatioon result show
public function verificationResult(){
    return view('frontend.verification.verify_show');
}




}
