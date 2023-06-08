<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentReference extends Model
{
    use HasFactory;

    protected $fillable = ['student_id','ref','ref_address','ref_mobile'];
}
