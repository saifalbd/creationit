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
    'remark',
    'student_id','entry','leave','date','off_day'];

    protected $appends = ['isAfter'];

    protected $casts = ['off_day'=>'bool'];

    public function  student(){
        return $this->belongsTo(Student::class,'student_id');
    }

    public function attendLedger(){
        return $this->belongsTo(Attendance::class,'attendance_id');
    }

    public function getIsAfterAttribute()
    {
        return Carbon::parse($this->date)->greaterThan(now()->startOfDay());
        
    }
}
