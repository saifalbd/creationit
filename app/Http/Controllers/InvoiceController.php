<?php

namespace App\Http\Controllers;

use App\Models\CompanyInfo;
use App\Models\SaleInvoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = SaleInvoice::query()->with('details')->latest()->paginate();
        return view('Admin.pages.invoice.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.pages.invoice.create');
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
            "date"=>['required','date'],
            "customer"=>['required','string'],
            "address"=>['nullable','string'],
            "mobile"=>['required','numeric'],
            'total'=>['required','numeric'],
            'due'=>['required','numeric'],
            'paid'=>['required','numeric'],
            'items'=>['required','array'],
            'items.*.description'=>['required','string'],
            'items.*.rate'=>['required','numeric'],
            'items.*.qty'=>['required','numeric'],
        ]);

        $date = $request->date;
        $customer_name = $request->customer;
        $address = $request->address;
        $mobile = $request->mobile;
        $total = $request->total;
        $paid = $request->paid;
        $due = $request->due;
        $remark = $request->remark;

        $sale = SaleInvoice::create(compact('date','customer_name','address','mobile','total','paid','due','remark'));

        collect($request->items)->each(function ($item)use ($sale){
            $qty = $item['qty'];
            $rate = $item['rate'];
            $description = $item['description'];
            $amount = $qty*$rate;
            $sale->details()->create(compact('rate','qty','amount','description'));

        });


        return  redirect()->route('invoice.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SaleInvoice $inv)
    {


        return view('Admin.pages.invoice.show',compact('inv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleInvoice $saleInvoice)
    {
        return view('Admin.pages.invoice.edit',compact('saleInvoice'));
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
