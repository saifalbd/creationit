<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = ['title','saturday','sunday','monday','tuesday','wednesday','thursday','friday'];



    public function students(){
        return $this->hasManyThrough(Student::class,
        StudentCourse::class,
        'batch_id',
        'id',
        'id',
        'student_id',
     );
    }


    public function attendances(){
        return $this->hasMany(Attendance::class,'batch_id');
    }
    
}
