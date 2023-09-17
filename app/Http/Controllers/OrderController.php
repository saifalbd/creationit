<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Resources\OrderEditResource;
use App\Models\Instructor;
use App\Models\Order;
use App\Models\Product;
use App\Models\Student;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::query()->with(['items','student','teacher'])->get();


        return view('Admin.pages.shop.sales.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::query()->select(['id','title','active'])->get();
        $students = Student::query()->select(['name','id','present_address','mobile'])->get();
        $teachers = Instructor::query()->select(['name','id','address','mobile'])->get();

        return view('Admin.pages.shop.sales.create',compact('products','students','teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $name = $request->name;
        $date = $request->date;
        $discount = $request->discount;
        $paid = $request->paid;
        $mobile = $request->mobile;
        $due = $request->due;
        $items = $request->items;
        $is = $request->saleType;
        $address = $request->address;
        $student_id = null;
        $teacher_id = null;
        $staff_id = null;
        $status = 1;
        if($is=='teacher'){
            $teacher_id = $request->saleId;
            $name = Instructor::find($teacher_id)->name;
        }else if($is=='student'){
            $student_id = $request->saleId;
            $name = Student::find($student_id)->name;
        }
        $total = collect($items)->map(fn($item)=>$item['quantity']*$item['rate'])->sum();
        $data = compact('name','date','mobile','address','is','student_id','teacher_id','staff_id','discount','total','due','paid','status');
        $order = Order::create($data);
        foreach ($items as $item) {
            $product_id = $item['product'];
            $quantity = $item['quantity'];
            $rate = $item['rate'];
            $total = $quantity*$rate;
            $order->items()->create(compact('product_id','quantity','rate','total'));
        }
    return response()->json($order);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $order->load(['items'=>fn($q)=>$q->with('product.avatar'),'student','teacher','billTo']);

     
        return view('Admin.pages.shop.sales.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Order $order)
    {

        $products = Product::query()->select(['id','title','active'])->get();
        $students = Student::query()->select(['name','id','present_address','mobile'])->get();
        $teachers = Instructor::query()->select(['name','id','address','mobile'])->get();

        $order->load(['items']);
    
        $order_id = $order->id;
        
        $rep = new OrderEditResource($order);
       $order =  $rep->toArray($request);
       

        return view('Admin.pages.shop.sales.edit',compact('order','products','students','teachers','order','order_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Order $order)
    {
        $name = $request->name;
        $date = $request->date;
        $discount = $request->discount;
        $paid = $request->paid;
        $mobile = $request->mobile;
        $due = $request->due;
        $items = $request->items;
        $is = $request->saleType;
        $address = $request->address;
        $student_id = null;
        $teacher_id = null;
        $staff_id = null;
        $status = 1;
        $saleId = $request->saleId;
        if($is=='teacher'){
            $teacher_id = $saleId;
            $name = Instructor::find($teacher_id)->name;
        }else if($is=='student'){
            $student_id = $saleId;
            $name = Student::find($student_id)->name;
        }
        $total = collect($items)->map(fn($item)=>$item['quantity']*$item['rate'])->sum();
        $data = compact('name','date','mobile','address','is','student_id','teacher_id','staff_id','discount','total','due','paid','status');
        $order->items()->delete();
        $order->update($data);
        foreach ($items as $item) {
            $product_id = $item['product'];
            $quantity = $item['quantity'];
            $rate = $item['rate'];
            $total = $quantity*$rate;
            $order->items()->create(compact('product_id','quantity','rate','total'));
        }
    return response()->json($order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        // $this->authorize('delete',$order);
        $order->items()->delete();
        $order->delete();
        return redirect()->back();
    }
}
