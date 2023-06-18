<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected  $fillable = ['batch_id','date'];

    public  function  batch(){
        return $this->belongsTo(Batch::class,'batch_id');
    }
    public  function  list(){
        return $this->hasMany(AttendanceStudent::class,'attendance_id');
    }

}
