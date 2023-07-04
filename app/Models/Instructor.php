<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;


    protected $fillable = ['name','specialty','nid','designation',
    'father_name','mother_name','mobile','email','address','join_date',
    'salary','avatar_id','facebook','twitter','linkedin','password'];


    public  function  avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }

    public function courses(){
        return $this->hasMany(Course::class,'instructor_id');
    }



}
