<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Attachment;
use App\Models\Batch;
use App\Models\Course;
use App\Models\PendingStudent;
use App\Models\Student;
use App\Rules\BdPhone;
use App\Services\MessageSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
   

    public  function  index()
    {
        $students = Student::query()->with('courses', function ($q) {
            return $q->with(['batch:id,title', 'course']);
        })->runing()->latest()->paginate();
       
     //   return $students;

        return view('Admin.pages.student.currentStudents', compact('students'));
    }

    public  function  courseCompleted()
    {
        $students = Student::query()->with('courses', function ($q) {
            return $q->with(['batch:id,title', 'course']);
        })->completed()->latest()->paginate();
       
        return view('Admin.pages.student.courseCompleted',compact('students'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batches = Batch::query()
        ->select(['id', 'title'])->whereActive(1)->get();
        $courses = Course::query()->select('name', 'id')->get();
        return view('Admin.pages.student.create', compact('batches', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentCreateRequest $request)
    {
       
        $request->validate(['mobile'=>['required',Rule::unique('students')], "email" => ['required', 'email',Rule::unique('students')]]);

        $avatar_id = $request->get('avatar_id',1);
        if ($request->hasFile('photo')) {
            $avatar = Attachment::add($request->file('photo'), Student::class);
            $avatar_id = $avatar->id;
        }

        $pass = rand(100011,999999);
        $password = Hash::make($pass);
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

        $status  = 1;
        $studentData = array_merge($data, compact('avatar_id','status','password'));



        $studentCourseData = $request->only(['type', 'course_id', 'batch_id', 'roll', 'registration_no', 'academic_year', 'session']);

        $feeInfo = [
            'fee' => $request->fee,
            'discount' => $request->discount,
            'first_ins' => $request->first,
            'first_ins_date' => $request->first_date,
            'second_ins' => $request->second,
            'second_ins_date' => $request->second_date,
            'third_ins' => $request->third,
            'third_ins_date' => $request->third_date
        ];

        $courseInfo = array_merge($studentCourseData, $feeInfo);
        $referenceData = $request->only(['ref', 'ref_address', 'ref_mobile']);


        $remove_pending = $request->remove_pending;



        return  DB::transaction(function () use ($studentData, $courseInfo, $referenceData,$pass,$remove_pending) {
            $student = Student::create($studentData);
            $student->courses()->create($courseInfo);
            $student->reference()->create($referenceData);

            if($remove_pending){
                PendingStudent::query()->where('id',$remove_pending)->delete();
            }

            
            $name =   $student->name;
            $mobile = $student->mobile;
            $comName = comInfo('institute');
            $message = "Dear $name,\n Welcome to $comName, Your admission has been confirm.\n Your Login Password \n $pass";
            (new MessageSender)->sendSingle($mobile,$message);
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
        $student->load(['courses.course', 'reference','vouchers','attendances.attendLedger','avatar']);
        

   
       

         $atns =  $student->attendances->where('isAfter',false)->groupBy('attendance_id')->map(function($items){
            $batch = Batch::findOrFail($items->first()->attendLedger->batch_id);
            return compact('batch','items');
         })->values();
        $courses = $student->courses->map(function($c)use($student){
          
            $c->paid =  $student->vouchers->pluck('details')->collapse()->whereIn('course_id',$c->course_id)->sum('amount');
            $c->due = $c->fee -$c->paid;

          return $c;

        });

       

        return view('Admin.pages.student.show', compact('student','courses','atns'));
    }

    public function showStudentByForm(Request $request){
        $request->validate([
            'id'=>['required']
        ]);




        $col = 'id';
        if(is_bd_phone($request->id)){
            $col = 'mobile';
        }else if(is_numeric($request->id)){
            $col = 'id';
        }else{
            $col = 'name';  
        }

        $student = Student::query()->where($col,$request->id)->first();
        if(!$student){
            return redirect()->back()->withErrors(['id'=>'Student Not Found On Server']);
        }
        $student->load(['courses.course', 'reference']);

        return redirect()->route('student.show',['student'=>$student->id]);

    }

  
    public function idCard(Student $student){

        return view('Admin.pages.student.id_card',compact('student'));

    }

    public function attendance(Student $student){

        return view('Admin.pages.student.attendance',compact('student'));
    }

    public function addPayment(Student $student){
        return view('Admin.pages.student.addPayment',compact('student'));
    }
    public function certification(Student $student){

        $student->load(['courses'=>fn($q)=>$q->with('course')]);

        if($student->courses->count()<2){
            $stCourseId = $student->courses->first()->course_id;
            $studentCourse = $student->courses()->where('course_id',$stCourseId)->with(['course','batch'])->first();
            return redirect()->route('student.certification.view',['student'=>$student,'course'=>$stCourseId]);
        }
      
        return view('Admin.pages.student.certificationInput',compact('student'));
    }


    public function certificationView(Request $request,Student $student){

        $request->validate(['course'=>['required','numeric',Rule::exists('student_courses','course_id')->where('student_id',$student->id)]]);
        $studentCourse = $student->courses()->where('course_id',$request->course)->with(['course','batch'])->first();
      
        return view('Admin.pages.student.certification',compact('student','studentCourse'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

        $student->load(['courses', 'reference','avatar']);


        $batches = Batch::query()
        ->select(['id', 'title'])->whereActive(1)->get();

      //  return $student;

        $courses = Course::query()->select('name', 'id')->get();
        return view('Admin.pages.student.edit', compact('batches', 'courses', 'student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentCreateRequest $request, Student $student)
    {


        $request->validate(['mobile'=>['required',Rule::unique('students')->whereNot('id',$student->id)],
         "email" => ['required', 'email',Rule::unique('students')->whereNot('id',$student->id)]]);
       


        $avatar_id = $student->avatar_id;
        if ($request->hasFile('photo')) {
            $avatar = Attachment::add($request->file('photo'), Student::class);
            $avatar_id = $avatar->id;
            Attachment::remove($student->avatar);
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
            'permanent_address',
            'status'
        );

        $studentData = array_merge($data, compact('avatar_id'));



        $studentCourseData = $request->only(['type', 'course_id', 'batch_id', 'roll', 'registration_no', 'academic_year', 'session']);

        $feeInfo = [
            'fee' => $request->fee,
            'discount' => $request->discount,
            'first_ins' => $request->first,
            'first_ins_date' => $request->first_date,
            'second_ins' => $request->second,
            'second_ins_date' => $request->second_date,
            'third_ins' => $request->third,
            'third_ins_date' => $request->third_date
        ];

        $courseInfo = array_merge($studentCourseData, $feeInfo);
        $referenceData = $request->only(['ref', 'ref_address', 'ref_mobile']);




        return  DB::transaction(function () use ($student, $studentData, $courseInfo, $referenceData) {
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
    public function destroy(Student $student)
    {
        $this->authorize('delete',$student);
        $student->courses()->delete();
        $student->reference()->delete();
        $avatar = $student->avatar;
        $student->delete();
        Attachment::remove($avatar);
        return redirect()->back();
    }
}
