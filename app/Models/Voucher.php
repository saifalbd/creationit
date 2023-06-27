<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'voucher_no',
        'amount',
        'date',
        'remark'
    ];

    public function  details(){
        return $this->hasOne(VoucherDetail::class,'voucher_id');

    }

    public function getReceiptAmountAttribute($key)
    {
        return $this->type=='receipt'?$this->amount:0;
    }
    public function getPaymentAmountAttribute($key)
    {
        return $this->type=='payment'?$this->amount:0;
    }
    
}
