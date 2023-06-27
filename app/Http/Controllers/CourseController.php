<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Course::query()->with('instructor')->latest()->paginate(20);
        return view('Admin.pages.course.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $instructors = Instructor::query()->select(['id','name'])->get();
        return view('Admin.pages.course.create',compact('instructors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string'],
            'duration'=>['required','numeric'],
            'fee'=>['required','numeric'],
            'instructor_id'=>['required','numeric'],
            'details'=>['nullable','string'],
            'photo'=>['nullable','image']
        ]);

        $name = $request->name;
        $duration = $request->duration;
        $fee = $request->fee;
        $instructor_id = $request->instructor_id;
        $details = $request->details;
        $avatar_id = 1;

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->photo,Course::class);
            $avatar_id = $avatar->id;
        }
        


        Course::create(compact('name','duration','fee','instructor_id','details','avatar_id'));

        return redirect()->route('course.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $instructors = Instructor::query()->select(['id','name'])->get();
        return view('Admin.pages.course.edit',compact('instructors','course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name'=>['required','string'],
            'duration'=>['required','numeric'],
            'fee'=>['required','numeric'],
            'instructor_id'=>['required','numeric'],
            'details'=>['nullable','string'],
            'photo'=>['nullable','image']
        ]);

        $name = $request->name;
        $duration = $request->duration;
        $fee = $request->fee;
        $instructor_id = $request->instructor_id;
        $details = $request->details;
        $avatar_id = $course->avatar_id;

        if($request->hasFile('photo')){
            $avatar = Attachment::add($request->photo,Course::class);
            $avatar_id = $avatar->id;
         Attachment::remove($course->avatar);

            
        }


        


        $course->update(compact('name','duration','fee','instructor_id','details','avatar_id'));

        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $this->authorize('delete',$course);
       $course->delete();
       return redirect()->route('course.index',['success'=>'Succfully remove Course']);

    }
}
