<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class AttendanceStudent extends Model
{
    use HasFactory;

    protected  $fillable = ['attendance_id',
    'day_number',
    'attend',
    'student_id','entry','leave','date'];

    protected $appends = ['isAfter'];

    public function  student(){
        return $this->belongsTo(Student::class,'student_id');
    }


    public function getIsAfterAttribute()
    {
        return Carbon::parse($this->date)->greaterThan(now()->startOfDay());
        
    }
}
