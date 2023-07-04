<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class StudentCourse extends Model
{
    use HasFactory;
    protected $fillable = ['student_id','type','course_id','batch_id','roll','registration_no','academic_year','session',
    'fee','discount','first_ins','first_ins_date','second_ins','second_ins_date','third_ins','third_ins_date'];


    public function batch(){
        return $this->belongsTo(Batch::class,'batch_id');
    }

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }


    
}
