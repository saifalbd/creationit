<?php

namespace App\Http\Controllers;

use App\Models\VoucherLedger;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VoucherLedgerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ledgers = VoucherLedger::query()->latest()->get();
        return  view('Admin.pages.voucher.ledgerIndex',compact('ledgers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return  view('Admin.pages.voucher.createLedger');

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
            'name'=>['required','string']
        ]);

        $name = $request->name;
        VoucherLedger::create(compact('name'));
        return  redirect()->route('ledger.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(VoucherLedger $ledger)
    {
        $ledger->load('transactions.voucher:id,voucher_no,date,remark');

        return  view('Admin.pages.voucher.listByLedger',compact('ledger'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(VoucherLedger $ledger)
    {
        return  view('Admin.pages.voucher.editLedger',compact('ledger'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VoucherLedger $ledger)
    {
        $request->validate([
            'name'=>['required','string',Rule::unique('voucher_ledgers')->whereNot('id',$ledger->id)]
        ]);

        $name = $request->name;
        $ledger->update(compact('name'));
        return  redirect()->route('ledger.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(VoucherLedger $ledger)
    {
        $ledger->delete();
        return  redirect()->route('ledger.index');
    }
}
