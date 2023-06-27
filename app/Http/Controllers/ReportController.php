<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\FeeReceiptVoucher;
use App\Models\Student;
use App\Models\Voucher;
use App\Models\VoucherLedger;
use Illuminate\Http\Request;
use Nette\Schema\Elements\Structure;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::query()->select(['name','id'])->get();
        $batches = Batch::query()->select(['id','title'])->get();
        $ledgers = VoucherLedger::select(['id','name'])->get();

        return view('Admin.pages.report.index',compact('courses','batches','ledgers'));
    }


    public  function  admissionDateWise(Request $request){
        $request->validate([
            'from'=>['required','date'],
            'to'=>['required','date']
        ]);
        $from = $request->from;
        $to = $request->to;

        $students = Student::query()->whereBetween('created_at',[$from,$to])->with(['courses.course','reference'])->get();

        return view('Admin.pages.report.preview_admission_date_wise',compact('students','from','to'));


    }

    public  function  admissionDateCourseWise(Request $request){

        $request->validate([
            'from'=>['required','date'],
            'to'=>['required','date'],
            'course'=>['required','numeric'],
        ]);


        $from = $request->from;
        $to = $request->to;
        $course = $request->course;

        $students = Student::query()->whereBetween('created_at',[$from,$to])
        ->with(['courses.course','reference'])
        ->whereHas('courses',fn($q)=>$q->where('course_id',$course))
        ->get();

        return view('Admin.pages.report.preview_admission_course_date_wise',compact('students','from','to'));


    }


    public function dateWiseFeeCollection(Request $request){
        $request->validate([
            'from'=>['required','date'],
            'to'=>['required','date']
        ]);
        $from = $request->from;
        $to = $request->to;

        $vouchers = FeeReceiptVoucher::query()
            ->whereBetween('date',[$from,$to])
            ->with('details.course','student')->get();





        return view('Admin.pages.report.preview_fees_collection_report',compact('from','to','vouchers'));
    }

    public function feeDueReport(Request $request){

        $students = Student::query()->with(['vouchers','courses.batch'])->get();

        $list = $students->map(function ($student){
            $name = $student->name;
            $id = $student->id;
            $mobile = $student->mobile;
            $courseNames = $student->courseNames;
            $batchNames = $student->courses->pluck('batch')->pluck('title')->join(',');
            $fee = $student->courses->sum('fee');
            $discount = $student->courses->sum('discount');
            $payable  = $fee - $discount;
            $paid = $student->vouchers->sum('amount');
            $due = $payable - $paid;

            return compact('name','id','mobile','courseNames','batchNames','fee',
                'discount','payable','paid','due');



        });
       // return  $list;

        return view('Admin.pages.report.report_fees_dues',compact('list'));
    }

    public function transactionReport(Request $request){
        
        $request->validate([
            'from'=>['required','date'],
            'to'=>['required','date']
        ]);
        $from = $request->from;
        $to = $request->to;

        $vouchers = Voucher::query()
            ->whereBetween('date',[$from,$to])
            ->with('details.ledger')->get();

            // return $vouchers;

        return view('Admin.pages.report.preview_transaction_report',compact('from','to','vouchers'));
    }

    public function transactionCategoryReport(Request $request){
        $request->validate([
            'from'=>['required','date'],
            'to'=>['required','date'],
            'ledger'=>['required','numeric']
        ]);
        $from = $request->from;
        $to = $request->to;
        $ledger = VoucherLedger::find($request->ledger);

        $vouchers = Voucher::query()
            ->whereBetween('date',[$from,$to])
            ->with('details.ledger')
            ->whereHas('details',fn($q)=>$q->where('ledger_id',$ledger->id))
            ->get();

        return view('Admin.pages.report.preview_transaction_category_report',compact('from','to','vouchers','ledger'));

    }

    public function transactionSummaryReport(Request $request){

        $request->validate([
            'from'=>['required','date'],
            'to'=>['required','date']
        ]);
        $from = $request->from;
        $to = $request->to;

        $ledgers = VoucherLedger::query()->with('transactions')->get();
       // return $ledgers;

        return view('Admin.pages.report.preview_transaction_summary_report',compact('from','to','ledgers'));
    }



    public function earnExpenseReport(Request $request){

        return view('Admin.pages.report.preview_earn_expense_report');
    }






}
