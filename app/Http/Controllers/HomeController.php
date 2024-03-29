<?php

namespace App\Http\Controllers;

use App\Models\FeeReceipt;
use App\Models\PendingStudent;
use App\Models\Student;
use App\Services\ChartInfoService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{



    private function duePaymentStudent(){

        return Student::query()->select(['id'])->get()->map(function($student){
        
            $id = $student->id;
            $fee = $student->courses->sum('fee');
            $discount = $student->courses->sum('discount');
            $payable  = $fee - $discount;
            $paid = $student->vouchers->sum('amount');
            $due = $payable - $paid;
            return compact('id','fee',
                'discount','payable','paid','due');
        })->sum('due');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $today = Carbon::today()->toDateString();
     
       

        $fees = FeeReceipt::query()->with(['course:id,name','voucher'=>fn($q)=>$q->with('student:id,name')])->where('date',$today)->get();

     

    
       

        $due = $this->duePaymentStudent();
        $currentStudent = Student::query()->where('status',1)->count();
        $expireStudent = Student::query()->where('status',2)->count();
        $pendingStudent = PendingStudent::query()->count();

        $rep = new ChartInfoService();
        $courseWiseChats = $rep->courseWiseAdmission();
        $data = compact('due','currentStudent','expireStudent','courseWiseChats','pendingStudent','fees');
        return view('Admin.pages.home',$data);
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
        //
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
    public function edit($id)
    {
        //
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
}
