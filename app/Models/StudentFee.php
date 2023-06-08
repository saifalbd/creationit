<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFee extends Model
{
    use HasFactory;



    protected $fillable = ['student_id','fee','discount','1st_ins','1st_ins_date','2nd_ins','2nd_ins_date','3rd_ins','3rd_ins_date'];
}
