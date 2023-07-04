<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name','duration','fee','instructor_id','details','avatar_id'];


    public function instructor(){
        return $this->belongsTo(Instructor::class,'instructor_id');
    }

    public function inrolls(){
        return $this->hasMany(StudentCourse::class,'course_id');
    }

    public function avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }

}
