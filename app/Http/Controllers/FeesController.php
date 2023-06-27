<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\FeeReceipt;
use App\Models\FeeReceiptVoucher;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Http\Request;
use stdClass;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //['student','batches','course']
        $items = FeeReceiptVoucher::query()
        ->with(['student','details'=>fn($q)=>$q->with(['course','batches'])])->latest()->paginate();

    

        return view('Admin.pages.fees.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $students = Student::query()->select(['mobile','name','id'])->get();
        $courses = Course::query()->select(['id','name'])->get();

        $byStudent_id = $request->get('student',false);
        if($byStudent_id){
        $courses = StudentCourse::query()->where('student_id',$byStudent_id)->with('course')->get()->map(function($item){
            $ob = new stdClass;
            $ob->id = $item->course_id;
            $ob->name = $item->course->name;
            return $ob;
        });
        }

        

        return view('Admin.pages.fees.create',compact('students','courses','byStudent_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        after oew day impliment those in vue then request items are array collection on voucers details
        */

        $request->validate([
            'student_id'=>['required','numeric'],
            'course_id'=>['required','numeric'],
            'date'=>['required','date'],
            'amount'=>['required','numeric'],
            'trx_mode'=>['required','string'],
            'trx_no'=>['nullable','string'],
            'remark'=>['nullable','string'],
        ]);

        $student_id = $request->student_id;
        $course_id = $request->course_id;
        $date = $request->date;
        $amount = $request->amount;
        $trx_mode = $request->trx_mode;
        $trx_no  = $request->trx_no;
        $remark = $request->remark;


        $voucher = FeeReceiptVoucher::create(compact('student_id','amount','date','remark'));
        $fee = $voucher->details()->create(compact('amount','amount','date','remark','course_id','trx_mode','trx_no'));

        $student = Student::findOrFail($request->student_id);
        $batches = $student->courses->pluck('batch_id')->toArray();
      
        $fee->batches()->sync($batches);

        return redirect()->route('fee.index',$this->insertAlert('Fee Voucher'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(FeeReceiptVoucher $v)
    {

        $v->load('details.course','student');


     

        return view('Admin.pages.fees.show',compact('v'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(FeeReceiptVoucher $fee)
    {

        $fee->load('details');

        $detail = $fee->details->first();

    
     
        $courses = Course::query()->select(['id','name'])->get();
        $students = Student::query()->select(['id','name'])->get();
        return view('Admin.pages.fees.edit',compact('fee','students','courses','detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeReceiptVoucher $voucher)
    {
        
        $request->validate([
            'student_id'=>['required','numeric'],
            'date'=>['required','date'],
            'amount'=>['required','numeric'],
            'trx_mode'=>['required','string'],
            'trx_no'=>['nullable','string'],
            'remark'=>['nullable','string'],
            'course_id'=>['required','numeric'],

        ]);

        $student_id = $request->student_id;
        $course_id = $request->course_id;
        $date = $request->date;
        $amount = $request->amount;
        $trx_mode = $request->trx_mode;
        $trx_no  = $request->trx_no;
        $remark = $request->remark;

        
        $voucher->details->each(function($fee){
            $fee->batches()->detach();
        });
        $voucher->details()->delete();
        $voucher->update(compact('student_id','amount','date','remark'));
        $fee = $voucher->details()->create(compact('amount','amount','date','remark','course_id','trx_mode','trx_no'));
        $student = Student::findOrFail($request->student_id);
        $batches = $student->courses->pluck('batch_id')->toArray();
      
        $fee->batches()->sync($batches);

        return redirect()->route('fee.index',$this->updateAlert('Fee Voucher'));
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeReceiptVoucher $voucher)
    {

        $voucher->details->each(function($fee){
            $fee->batches()->detach();
        });
        
        $voucher->details()->delete();
        $voucher->delete();
        return redirect()->route('fee.index',$this->removeAlert('Fee Voucher'));
        
    }
}
