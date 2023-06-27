<?php

namespace App\Http\Controllers;

use App\Models\Voucher;
use App\Models\VoucherDetail;
use App\Models\VoucherLedger;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ledgers  = VoucherLedger::query()->with('transactions')->latest()->paginate();
      return view('Admin.pages.voucher.index',compact('ledgers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ledgers = VoucherLedger::query()->select(['name','id'])->get();
        return view('Admin.pages.voucher.create',compact('ledgers'));
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
            'ledger'=>['required','numeric',Rule::exists('voucher_ledgers','id')],
            'description'=>['nullable','string'],
            'date'=>['required','date'],
            'voucherNo'=>['nullable','string'],
            'type'=>['required','in:receipt,payment'],
            'amount'=>['required','numeric']
        ]);

        $ledger_id = $request->ledger;
        $date  = $request->date;
        $voucher_no = $request->voucherNo;
        $type = $request->type;
        $amount = $request->amount;
        $remark = $request->description;
       $voucher = Voucher::create(compact('voucher_no','amount','date','remark','type'));
       $voucher_id = $voucher->id;

       VoucherDetail::create(compact('ledger_id','amount','type','voucher_id'));
       return  redirect()->route('voucher.index');

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
    public function edit(Voucher $voucher)
    {
        $ledgers = VoucherLedger::query()->select(['name','id'])->get();
        $voucher->load('details');

        return view('Admin.pages.voucher.edit',compact('ledgers','voucher'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher)
    {
        $request->validate([
            'ledger'=>['required','numeric',Rule::exists('voucher_ledgers','id')],
            'description'=>['nullable','string'],
            'date'=>['required','date'],
            'voucherNo'=>['nullable','string'],
            'type'=>['required','in:receipt,payment'],
            'amount'=>['required','numeric']
        ]);

        $ledger_id = $request->ledger;
        $date  = $request->date;
        $voucher_no = $request->voucherNo;
        $type = $request->type;
        $amount = $request->amount;
        $remark = $request->description;
        $voucher->details()->delete();
        $voucher->update(compact('voucher_no','amount','date','remark','type'));
        $voucher_id = $voucher->id;
        VoucherDetail::create(compact('ledger_id','amount','type','voucher_id'));
        return  redirect()->route('voucher.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voucher $voucher)
    {
        $voucher->details()->delete();
        $voucher->delete();

        return redirect()->route('voucher.index',$this->removeAlert('Voucher'));
    }
}
