<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Attendance extends Model
{
    use HasFactory;
    protected  $fillable = ['batch_id','month','year'];

    protected $appends = ['monthYear'];

    public  function  batch(){
        return $this->belongsTo(Batch::class,'batch_id');
    }
    public  function  list(){
        return $this->hasMany(AttendanceStudent::class,'attendance_id');
    }

    public function students(){
        return $this->hasManyThrough(Student::class,
        StudentCourse::class,
        'batch_id',
        'id',
        'batch_id',
        'student_id',
     );
    }
    
    

    public function getMonthYearAttribute()
    {
        $year = $this->year;
        $month = $this->month;
        return Carbon::parse("$year-$month")->format('F Y');
    }

}
