<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Attachment;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->with(['avatar','category'])->paginate(100);

     
        return view('Admin.pages.shop.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::query()->whereActive(true)->get();
        return view('Admin.pages.shop.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $request->validate(['title'=>['required',Rule::unique('products')]]);

        $title = $request->title;
        $category_id = $request->category_id;
        $rate = $request->rate;
        $op_pur_rate = $request->pur_rate;
        $avg_pur_rate = $op_pur_rate;
        $quantity = $request->quantity;
        $op_qty = $quantity;

        $avatar_id = 1;

        if($request->hasFile('avatar')){
            $avatar = Attachment::add($request->file('avatar'),Product::class);
            $avatar_id = $avatar->id;
        }

        Product::create(compact('title','category_id','rate','op_pur_rate','avg_pur_rate','quantity','op_qty','avatar_id'));
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

      
        $categories = Category::query()->whereActive(true)->get();
        return view('Admin.pages.shop.product.edit',compact('categories','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate(['title'=>['required',Rule::unique('products')->whereNot('id',$product->id)]]);

        $title = $request->title;
        $category_id = $request->category_id;
        $rate = $request->rate;
        $op_pur_rate = $request->pur_rate;
        $avg_pur_rate = $op_pur_rate;
        $quantity = $request->quantity;
        $op_qty = ($product->op_qt - $product->quantity) + $quantity;

        $avatar_id = $product->avatar_id;

        if($request->hasFile('avatar')){
            Attachment::remove($product->avatar);
            $avatar = Attachment::add($request->file('avatar'),Product::class);
            $avatar_id = $avatar->id;
        }

        $product->update(compact('title','category_id','rate','op_pur_rate','avg_pur_rate','quantity','op_qty','avatar_id'));
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->authorize('delete',$product);
        Attachment::remove($product->avatar);
        
        $product->delete();
        
      

        return redirect()->back();
    }
}
