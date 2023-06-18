<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\FeeReceipt;
use App\Models\FeeReceiptVoucher;
use App\Models\Student;
use Illuminate\Http\Request;

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
        $items = FeeReceiptVoucher::query()->with(['student','details'=>fn($q)=>$q->with(['course','batches'])])->get();

        // return  $items->map(function($student){
        //     return $student->details->pluck('course')->pluck('name')->join(',');
        // })->first();

        return view('Admin.pages.fees.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $students = Student::query()->select(['mobile','name','id'])->get();
        $courses = Course::query()->select(['id','name'])->get();

        return view('Admin.pages.fees.create',compact('students','courses'));
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

        return redirect()->route('fee.index');
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
     
        $students = Student::query()->select(['id','name'])->get();
        return view('Admin.pages.fees.edit',compact('fee','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeReceipt $fee)
    {
        $request->validate([
            'student_id'=>['required','numeric'],
            'date'=>['required','date'],
            'amount'=>['required','numeric'],
            'trx_mode'=>['required','string'],
            'trx_no'=>['nullable','string'],
            'remark'=>['nullable','string'],

        ]);

        $student = Student::findOrFail($request->student_id);
        $batches = $student->courses->pluck('batch_id')->toArray();
        $fee->update($request->toArray());
        $fee->batches()->sync($batches);
        return redirect()->route('fee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeReceipt $feeReceipt)
    {
        $feeReceipt->delete();
        return redirect()->route('fee.index');
        
    }
}
