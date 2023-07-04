<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Batch;
use App\Models\Course;
use App\Models\PendingStudent;
use App\Rules\BdPhone;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PendingStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = PendingStudent::query()
        ->with([
            'course',
          
        ])->latest()->get();

 
    return view('Admin.pages.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "name" => ['required', 'string'],
            "father_name" => ['required', 'string'],
            "mother_name" => ['required', 'string'],
            "gender" => ['required', 'string'],
            "date_of_birth" => ['required', 'date'],
            "education" => ['required', 'string'],
            "occupation" => ['required', 'string'],
            "mobile" => ['required', 'numeric',new BdPhone,Rule::unique('students')],
            "guardian_mobile" => ['required', 'string',Rule::unique('students')],
            "email" => ['required', 'email'],
            "present_address" => ['required', 'string'],
            "permanent_address" => ['required', 'string'],
            "course_id" => ['required', 'numeric'],
            'photo' => ['required', 'image','mimes:jpg,bmp,png'],
            
        ]);

        $avatar = Attachment::add($request->file('photo'), Student::class);
        $avatar_id = $avatar->id;

        $data = $request->only(
            'name',
            'father_name',
            'mother_name',
            'gender',
            'date_of_birth',
            'education',
            'occupation',
            'mobile',
            'guardian_mobile',
            'email',
            'avatar_id',
            'present_address',
            'permanent_address',
            'course_id'
        );

  
        $studentData = array_merge($data, compact('avatar_id'));

        PendingStudent::create($studentData);

        return redirect()->route('frontend.admission',['success'=>'SuccessFully Submited']);

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
    public function edit(PendingStudent $student)
    {
        
        $batches = Batch::query()
        ->select(['id', 'title'])->whereActive(1)->get();
        $courses = Course::query()->select('name', 'id')->get();

        return view('Admin.pages.student.pendingCreate',compact('student','courses','batches'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendingStudent $student)
    {
        $avatar =  $student->avatar;
        $student->delete();
        Attachment::remove($avatar);
        return redirect()->back();
    }
}
