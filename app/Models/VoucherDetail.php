<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherDetail extends Model
{
    use HasFactory;

    protected $fillable = ['voucher_id','ledger_id','type','amount'];

    public  function  voucher(){
        return $this->belongsTo(Voucher::class,'voucher_id');
    }

    public function ledger(){
        return $this->belongsTo(VoucherLedger::class,'ledger_id');
    }
}
