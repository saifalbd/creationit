<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;



    protected $fillable = ['serial','name','father_name','mother_name','gender',
    'date_of_birth','education','occupation','mobile','guardian_mobile',
    'email','avatar_id','present_address','permanent_address','status'];


    protected static function boot()
{
    parent::boot();

    // auto-sets values on creation
    static::creating(function ($query) {


        $serial = 10001;
        $last = Student::query()->latest()->first();
        if($last){
            $serial = $last->serial+1;
        }

        $query->serial = $serial;

    });
}




    public function avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }


    public function attendances(){
        return $this->hasMany(AttendanceStudent::class,'student_id');
    }


    public function courses(){
        return $this->hasMany(StudentCourse::class,'student_id');
    }



    public  function  reference(){
        return $this->hasOne(StudentReference::class,'student_id');
    }


    public function getCourseNamesAttribute()
    {
        return $this->courses->pluck('course')->pluck('name')->join(',');
    }

    public  function  vouchers(){
        return $this->hasMany(FeeReceiptVoucher::class,'student_id');

    }


    public function scopePending(Builder $builder){
        return $builder->whereStatus(0);
    }
    public function scopeRuning(Builder $builder){
        return $builder->whereStatus(1);
    }
    public function scopeCompleted(Builder $builder){
        return $builder->whereStatus(2);
    }


    
}
