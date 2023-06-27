<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeReceipt extends Model
{
    use HasFactory;


    protected $fillable = ['voucher_id','course_id','amount','date','trx_mode','trx_no','remark'];

    public function voucher(){
        return $this->belongsTo(FeeReceiptVoucher::class,'voucher_id');
    }

  

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }

    public function batches(){
        return $this->belongsToMany(Batch::class,'fee-batch','fee_id','batch_id');
    }
}
