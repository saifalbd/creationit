<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingStudent extends Model
{
    use HasFactory;
    protected $fillable = ['name','father_name','mother_name','gender',
    'date_of_birth','education','occupation','mobile','guardian_mobile',
    'email','avatar_id','present_address','permanent_address','course_id'];


    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
    public function avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }

}
