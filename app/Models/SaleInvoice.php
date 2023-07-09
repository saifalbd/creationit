<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleInvoice extends Model
{
    protected  $table = 'sales';

    protected  $fillable = [
        'date','customer_name','student_id','address','mobile','total','paid','due','remark'
    ];

    public  function  details(){
        return $this->hasMany(SaleDetails::class,'sale_id');
    }
}
