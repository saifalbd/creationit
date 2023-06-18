<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceStudent extends Model
{
    use HasFactory;

    protected  $fillable = ['attendance_id','attend','student_id','entry','leave'];

    public function  student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
