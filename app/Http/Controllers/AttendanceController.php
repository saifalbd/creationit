<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\AttendanceStudent;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

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
            ->with('batch:id,title')->withCount('students')->paginate();

         

         
       

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
        $currentMonthNumber = now()->format('m');
        $currentYearNumber = now()->format('Y');
        $months = Collection::times(12)->map(function($n){
            $d = now()->startOfYear()->addMonths($n-1);
            $value = $d->clone()->format('m');
            $text = $d->clone()->format('F');
            return compact('value','text');
        });
        return view('Admin.pages.attendance.create',compact('batches','currentMonthNumber','currentYearNumber','months'));
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
            'month'=>['required','numeric'],
            'year'=>['required','numeric']
        ]);



        $batch_id = $request->batch_id;
        $month = $request->month;
        $year = $request->year;

       $attendance = Attendance::firstOrCreate(compact('batch_id','month','year'));

       $att = $this->attendanceList($attendance);
        $att['students']->map(function($item)use($attendance){

        $student_id = $item['student_id'];
        $attendance_id = $attendance->id;
        $item['attends']->map(function ($item)use($student_id,$attendance_id){
            $day_number = $item['dayNumber'];
            $date = $item['date'];
            $remark = $item['remark'];
            $entry = $item['entry'];
            $leave = $item['leave'];
            $attend = $item['attend'];

            AttendanceStudent::firstOrCreate(
                compact('student_id','attendance_id','day_number'),
                compact('remark','entry','leave','attend','date')
            );
        });

       });

       return  redirect()->route('attendance.show',['attendance'=>$attendance->id]);



    }


    public function attendanceList(Attendance $attendance){
        $list = $attendance->list;
        $students = Student::query()->select(['id','name'])
        ->whereHas('courses',fn($q)=>$q->where('batch_id',$attendance->batch_id))->get();
        //dayNumber
        $monthNumber = $attendance->month;
        $yearNumber = $attendance->year;
        $date = Carbon::parse("$yearNumber-$monthNumber")->startOf('month');
        $daysInMonth = $date->daysInMonth;
        $days = Collection::times($daysInMonth)->map(function($n)use($date){
            $d = $n==1? $date:$date->addDay();
            $text = $d->format('D');
            $value = $d->format('d');
            $date = $d->format('Y-m-d');
            $isAfter = $d->greaterThan(now()->startOfDay());
            return compact('text','value','date','isAfter');
        });

        $students = $students->map(function ($student)use($list,$days){

            $student_id = $student->id;
            $name = $student->name;

            $attends = $days->map(function($d)use($list,$student_id){
                $dayNumber = $d['value'];
                $attend = null;
                $remark  = null;
                $entry = null;
                $leave = null;
                $date = $d['date'];
                $id = null;
                $isAfter = null;
                $has = $list->where('student_id',$student_id)->where('day_number',$d['value'])->first();
                if($has){
                    $remark = $has->remark;
                    $entry = $has->entry;
                    $leave = $has->leave;
                    $attend = $has->attend;
                    $date = $has->date;
                    $id = $has->id;
                    $isAfter = $has->isAfter;
                    

                }

                return compact('student_id','id','remark','entry','leave','attend','dayNumber','date','isAfter');



            });


           
       

            return compact('student_id','name','attends');

        });

        return compact('students','days');


    }



    public  function  attendenceUpdate(Request $request,AttendanceStudent $attendanceStudent){


        $request->validate([
          
            'remark'=>['nullable','string'],
            'entry'=>['nullable','string'],
            'leave'=>['nullable','string'],
            'attend'=>['required','in:0,1']
           
        ]);

       


        $attend = $request->attend;
        $entry = $request->entry;
        $leave = $request->leave;
        $remark= $request->remark;
     

        $attendanceStudent->update(compact('attend','remark','entry','leave'));
        
       






        return response()->json($attendanceStudent);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {



       
        $att = $this->attendanceList($attendance);

 


        return view('Admin.pages.attendance.attendance_form',array_merge($att,compact('attendance')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        $list = $attendance->list()->get()->groupBy('student_id')->map(function($items,$student_id){
            $list = $items->where('isAfter',false);
            return compact('student_id','list');
        })->values();

        $students = Student::query()->select(['id','name','mobile'])->whereIn('id',$list->pluck('student_id')->unique()->toArray())->get()
        ->map(function($student)use($list){
            $student->list = $list->where('student_id',$student->id)->first()['list'];
            return $student;
        });


      

        


        $attendance->load('batch:id,title');
        return view('Admin.pages.attendance.edit',compact('students','attendance'));
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
