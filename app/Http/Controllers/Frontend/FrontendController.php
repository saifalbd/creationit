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
use App\Models\Student;
use App\Models\Video;
use App\Models\HeroSection;

class FrontendController extends Controller
{


    public function index(){
        $data = Slider::orderBy('serial','asc')->get();
        $courses = Course::query()->latest('id')->with('avatar')->get();
        $instructor = Instructor::latest()->get();
        $students = Student::latest()->get();
        $completeStudents = Student::where('status',2)->get();
        $testimonials = Page::where('menu',3)->get();
        $hero = HeroSection::where('id',1)->first();
        // dd($testimonials);
        return view('frontend.index', compact(
            ['data','courses','testimonials','instructor','students','completeStudents','hero']
        ));

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

    $data = Instructor::query()->with('avatar')->get();
    
    return view('frontend.instructor', compact('data'));
}

// course
public function course(){
    $courses = Course::query()->latest('id')->with('avatar')->get();
    return view('frontend.course.course', compact('courses'));
}

// single course
public function courseDetail($id){
    $data = Course::where('id',$id)->with('avatar')->first();
    // dd($data);
    return view("frontend.course.single-course",compact('data'));

} 



// syllabus
public function syllabus(){
    return view('frontend.course.syllabus');
}


// notice
public function news(){
    $data = Page::where('menu',2)->latest()->paginate(9);
    // dd($data);
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

public function searchStudent(Request $request){
    $data = SuccessStudent::when($request->search, function ($query, $search) {
        $query->where('name' , 'LIKE' , "%{$search}%");
    })->latest()->get();
    return view("frontend.student-search", compact('data'));

}

public function aboutUs(){
    
    $data = Page::where(['menu'=> 1])->get();
    
    if( count($data) > 0){
        return view('frontend.about.about-us', compact('data'));
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

    $courses = Course::query()->latest('id')->with('avatar')->get();
    $instructor = Instructor::latest()->get();
    $students = Student::latest()->get();
    $completeStudents = Student::where('status',2)->get();

    // dd($achives);
    if(count($data) > 0){

        return view("frontend.about.founder",compact(
            ['data','courses','achives','instructor','students','completeStudents']
        ));
    }
}

public function otherInstitute(){
    $institutes = Achivement::where('condition','institute')->get();
    return view('frontend.other_institute', compact('institutes'));
    // dd($institutes);
   
}



public function freelancing(){
    $data = Video::latest()->get();
    $courses = Course::query()->latest('id')->with('avatar')->get();
    $freelanings = Page::where('menu',5)->get();
    $instructor = Instructor::latest()->get();
    $students = Student::latest()->get();
    $completeStudents = Student::where('status',2)->get();
    return view('frontend.course.freelancing', compact(
        ['data','freelanings','courses',
        'instructor','students','completeStudents'
        ]));
}

public function singleFreelancing($id){
    $data = Page::where('id',$id)->first();

    return view("frontend.course.single-freelaning-post",compact('data'));
}


}
