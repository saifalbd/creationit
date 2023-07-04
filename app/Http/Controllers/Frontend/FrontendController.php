<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Achivement;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Course;
use App\Models\Page;
use App\Models\SuccessStudent;
use App\Models\Instructor;
use App\Models\contact;
use App\Models\Video;

class FrontendController extends Controller
{


    public function index(){
        $data = Slider::orderBy('serial','asc')->get();
        $courses = Course::orderBy('id','desc')->paginate(9);
        $testimonials = Page::where('menu',3)->get();
        // dd($testimonials);
        return view('frontend.index', compact(['data','courses','testimonials']));

    }


// contact store
public function store(Request $request){

    $request->validate([
        'name' => 'required|string|max:250',
        'phone' => 'required|numeric',
        'email' => 'required|email|max:250',
        'subject' => 'required|string|max:250',
    ]);

    $data = $request->all();

    contact::create($data);

    return redirect()->route('frontend.contact')->with('success','Your Information Successfully Submited !');




}

// team page 
public function instructor(){

    $data = Instructor::query()->latest('id')->with('avatar')->get();
    
    return view('frontend.instructor', compact('data'));
}

// course
public function course(){
    $courses = Instructor::query()->latest('id')->with('avatar')->get();
    return view('frontend.course.course', compact('courses'));
}
// syllabus
public function syllabus(){
    return view('frontend.course.syllabus');
}


// notice
public function news(){
    $data = Page::where('menu',2)->latest()->get();
    return view('frontend.news', compact('data'));
}

public function newsDetail($id){
    $data = Page::find($id);
    return view("frontend.news_detail", compact('data'));
}

// contact page
public function contact(){
    return view('frontend.contact');
}

// verification form create


// verificatioon result show
public function verificationResult(){
    return view('frontend.verification.verify_show');
}

// success student
public function StudentSuccess(){

    $data = SuccessStudent::all();
    $sliders = Slider::orderBy('serial','asc')->get();
    return view('frontend.success-student',compact(['data','sliders']));
}

public function aboutUs($id){
    
    $data = Page::where(['menu'=>$id])->get();
    
    if( count($data) > 0){
        return view('frontend.about.about', compact('data'));
    }{
        return redirect()->route('frontend');
    }
    
    // dd($data);
}

//create founder
public function founder(){
    // dd($id);
    $courses = Course::orderBy('id','desc')->paginate(9);
    $achives = Achivement::where('condition','achive')->get();
    $data = Page::where('menu', 4)->get();
    // dd($achives);
    if(count($data) > 0){

        return view("frontend.about.founder",compact(['data','courses','achives']));
    }
}

public function otherInstitute(){
    $institutes = Achivement::where('condition','institute')->get();
    // dd($institutes);
   
}


public function freelancing(){
    $data = Video::latest()->get();
    return view('frontend.course.freelancing', compact('data'));
}



}
