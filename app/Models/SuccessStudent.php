<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuccessStudent extends Model
{
    use HasFactory;

    protected $fillable = ['name','photo','course','designation'];
}
