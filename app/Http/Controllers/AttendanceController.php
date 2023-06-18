<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\AttendanceStudent;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendance::query()
            ->with('batch:id,title')->withCount('list')->get();

        return view('Admin.pages.attendance.index',compact('attendances'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batches = Batch::query()->select(['title','id'])->get();
        return view('Admin.pages.attendance.create',compact('batches'));
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
            'batch_id'=>['required','numeric'],
            'date'=>['required','date']
        ]);


        $batch_id = $request->batch_id;
        $date = $request->date;

       $attendance = Attendance::firstOrCreate(compact('batch_id','date'));

       return  redirect()->route('attendance.show',['attendance'=>$attendance->id]);



    }



    public  function  attendenceListStore(Request $request,Attendance $attendance){


        $request->validate([
            'items'=>['required','array'],
            'items.*'=>['required','array'],
            'items.*.id'=>['required','numeric'],
            'items.*.remark'=>['nullable','string'],
            'items.*.entry'=>['nullable','string'],
            'items.*.leave'=>['nullable','string'],
            'item.*.attend'=>['required','in:0,1']
        ]);

        $attendance_id  = $attendance->id;
        foreach ($request->items as $item){
            $student_id = $item['id'];
            $attend = $item['attend'];
            $remark = $item['remark'];
            $entry = $item['entry'];
            $leave = $item['leave'];

            $model = AttendanceStudent::updateOrCreate(compact('attendance_id','student_id'),
                compact('attend','remark','entry','leave'));


        }

        return redirect()->route('attendance.create');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        $list = $attendance->list;
        $students = Student::query()->select(['id','name'])->whereHas('courses',fn($q)=>$q->where('batch_id',$attendance->batch_id))->get();
        $students = $students->map(function ($student)use($list){
            $id = $student->id;
            $name = $student->name;
            $attend = null;
            $remark  = null;
            $entry = null;
            $leave = null;
            $has = $list->where('student_id',$id)->first();
            if($has){
                $remark = $has->remark;
                $entry = $has->entry;
                $leave = $has->leave;
                $attend = $has->attend;

            }

            $student->remark = $remark;
            $student->entry = $entry;
            $student->leave = $leave;
            $student->attend = $attend;

            return $student;

        });

//        return  $students;

        return view('Admin.pages.attendance.attendance_form',compact('attendance','students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        $list = $attendance->list()->with('student')->get();
        $attendance->load('batch:id,title');



        return view('Admin.pages.attendance.edit',compact('list','attendance'));
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
    public function destroy($id)
    {
        //
    }


    public function attendanceCreate($id){
        return view('Admin.pages.attendance.attendance_form');
    }
}
