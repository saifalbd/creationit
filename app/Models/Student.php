<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

   

    protected $fillable = ['name','guardian_name','mother_name','gender',
    'date_of_dirth','qualification','occupation','mobile','guardian_mobile','email','avatar_id','present_address','permanent_address'];
}
