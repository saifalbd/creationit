<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherLedger extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    public function transactions(){
        return $this->hasMany(VoucherDetail::class,'ledger_id');
    }

    public function getTotalReceiptAttribute()
    {
        return $this->transactions->where('type','receipt')->sum('amount');
    }
    public function getTotalPaymentAttribute()
    {
        return $this->transactions->where('type','payment')->sum('amount');
    }
    public function getCountTransactionAttribute()
    {
        return $this->transactions->count();
    }

    public function getTotalBalanceAttribute()
    {
        
        return $this->totalReceipt-$this->totalPayment;
    }



}
