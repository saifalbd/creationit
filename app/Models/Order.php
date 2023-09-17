<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['name','mobile','date','address','is','student_id','teacher_id','staff_id','discount','paid','due','total','status'];

    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function teacher(){
        return $this->belongsTo(Instructor::class,'teacher_id');
    }

    public function staff(){
        return $this->belongsTo(User::class,'staff_id');
    }

    public function orderBy(){
        return $this->belongsTo(User::class,'by_id');
    }

    public function items(){
        return $this->hasMany(OrderItem::class,'order_id');
    }

    public function billTo(){
        return $this->belongsTo(User::class,'by_id');
    }

}
