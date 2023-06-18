<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;



    protected $fillable = ['name','father_name','mother_name','gender',
    'date_of_birth','qualification','occupation','mobile','guardian_mobile','email','avatar_id','present_address','permanent_address'];


    public function avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }



    public function courses(){
        return $this->hasMany(StudentCourse::class,'student_id');
    }

    public  function  reference(){
        return $this->hasOne(StudentReference::class,'student_id');
    }


}
