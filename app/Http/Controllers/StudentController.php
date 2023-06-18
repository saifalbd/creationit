<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::query()->paginate();

        return view('Admin.pages.student.index', compact('students'));
    }

    public  function  currentStudents()
    {
        $students = Student::query()->with('courses', function ($q) {
            return $q->with(['batch:id,title', 'course']);
        })->get();
        // return $students;
        return view('Admin.pages.student.currentStudents', compact('students'));
    }

    public  function  courseCompleted()
    {
        return view('Admin.pages.student.courseCompleted');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batches = Batch::query()->select(['id', 'title'])->get();

        $courses = Course::query()->select('name', 'id')->get();
        return view('Admin.pages.student.create', compact('batches', 'courses'));
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
            "mobile" => ['required', 'numeric'],
            "guardian_mobile" => ['required', 'string'],
            "email" => ['required', 'email'],
            "present_address" => ['required', 'string'],
            "permanent_address" => ['required', 'string'],
            "type" => ['required', 'string'],
            "course_id" => ['required', 'numeric'],
            "batch_id" => ['required', 'numeric'],
            "roll" => ['required', 'numeric'],
            "registration_no" => ['required', 'string'],
            "academic_year" => ['required', 'string'],
            "session" => ['required', 'numeric'],
            "fee" => ['required', 'numeric'],
            "discount" => ['nullable', 'numeric'],
            "payable" => ['required', 'numeric'],
            "first" => ['required', 'numeric'],
            "first_date" => ['required', 'date'],
            "second" => ['required', 'numeric'],
            "second_date" => ['required', 'date'],
            "third" => ['required', 'numeric'],
            "third_date" => ['required', 'date'],
            "ref" => ['nullable', 'string'],
            "ref_address" => ['nullable', 'string'],
            "ref_mobile" => ['required', 'numeric'],
            'photo' => ['nullable', 'image']

        ]);


        $avatar_id = 1;
        if ($request->hasFile('photo')) {
            $avatar = Attachment::add($request->file('photo'), Student::class);
            $avatar_id = $avatar->id;
        }

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
            'permanent_address'
        );

        $studentData = array_merge($data, compact('avatar_id'));



        $studentCourseData = $request->only(['type', 'course_id', 'batch_id', 'roll', 'registration_no', 'academic_year', 'session']);

        $feeInfo = [
            'fee'=>$request->fee,
            'discount'=>$request->discount,
            'first_ins'=>$request->first,
            'first_ins_date'=>$request->first_date,
            'second_ins'=>$request->second,
            'second_ins_date'=>$request->second_date,
            'third_ins'=>$request->third,
            'third_ins_date'=>$request->third_date
        ];

        $courseInfo = array_merge($studentCourseData,$feeInfo);
        $referenceData = $request->only(['ref', 'ref_address', 'ref_mobile']);




     return  DB::transaction(function()use($studentData,$courseInfo,$referenceData){
        $student = Student::create($studentData);
        $student->courses()->create($courseInfo);
        $student->reference()->create($referenceData);
        return  redirect()->route('student.index');
       });
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $student->load(['courses.course','reference']);
        // return $student;
        return view('Admin.pages.student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

        $student->load(['courses','reference']);


        $batches = Batch::query()->select(['id', 'title'])->get();

        $courses = Course::query()->select('name', 'id')->get();
        return view('Admin.pages.student.edit', compact('batches', 'courses','student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            "name" => ['required', 'string'],
            "father_name" => ['required', 'string'],
            "mother_name" => ['required', 'string'],
            "gender" => ['required', 'string'],
            "date_of_birth" => ['required', 'date'],
            "education" => ['required', 'string'],
            "occupation" => ['required', 'string'],
            "mobile" => ['required', 'numeric'],
            "guardian_mobile" => ['required', 'string'],
            "email" => ['required', 'email'],
            "present_address" => ['required', 'string'],
            "permanent_address" => ['required', 'string'],
            "type" => ['required', 'string'],
            "course_id" => ['required', 'numeric'],
            "batch_id" => ['required', 'numeric'],
            "roll" => ['required', 'numeric'],
            "registration_no" => ['required', 'string'],
            "academic_year" => ['required', 'string'],
            "session" => ['required', 'numeric'],
            "fee" => ['required', 'numeric'],
            "discount" => ['nullable', 'numeric'],
            "payable" => ['required', 'numeric'],
            "first" => ['required', 'numeric'],
            "first_date" => ['required', 'date'],
            "second" => ['required', 'numeric'],
            "second_date" => ['required', 'date'],
            "third" => ['required', 'numeric'],
            "third_date" => ['required', 'date'],
            "ref" => ['nullable', 'string'],
            "ref_address" => ['nullable', 'string'],
            "ref_mobile" => ['required', 'numeric'],
            'photo' => ['nullable', 'image']

        ]);


        $avatar_id = $student->avatar_id;
        if ($request->hasFile('photo')) {
            $avatar = Attachment::add($request->file('photo'), Student::class);
            $avatar_id = $avatar->id;
        }

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
            'permanent_address'
        );

        $studentData = array_merge($data, compact('avatar_id'));



        $studentCourseData = $request->only(['type', 'course_id', 'batch_id', 'roll', 'registration_no', 'academic_year', 'session']);

        $feeInfo = [
            'fee'=>$request->fee,
            'discount'=>$request->discount,
            'first_ins'=>$request->first,
            'first_ins_date'=>$request->first_date,
            'second_ins'=>$request->second,
            'second_ins_date'=>$request->second_date,
            'third_ins'=>$request->third,
            'third_ins_date'=>$request->third_date
        ];

        $courseInfo = array_merge($studentCourseData,$feeInfo);
        $referenceData = $request->only(['ref', 'ref_address', 'ref_mobile']);




        return  DB::transaction(function()use($student, $studentData,$courseInfo,$referenceData){
            $student->update($studentData);
            $student->courses()->first()->update($courseInfo);
            $student->reference()->update($referenceData);
            return  redirect()->route('student.index');
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
