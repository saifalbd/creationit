<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeReceiptVoucher extends Model
{
    use HasFactory;

    protected $fillable = ['student_id','amount','date','remark'];


    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }

    public function details(){
        return $this->hasMany(FeeReceipt::class,'voucher_id');
    }

    public  function  getCourseNamesAttribute()
    {
        return $this->details->pluck('course')->pluck('name')->join(',');
    }

    public  function  getDetailModesAttribute()
    {
        return $this->details->pluck('trx_mode')->join(',');
    }

    public  function  getDetailTrxNosAttribute()
    {
        return $this->details->pluck('trx_no')->join(',');
    }


}
