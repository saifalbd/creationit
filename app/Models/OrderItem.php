<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','order_id','quantity','rate','total'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
