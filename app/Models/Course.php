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

}
