<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Holiday extends Model
{
    use HasFactory;

    protected $fillable = ['title','from','to'];


    protected function to(): Attribute
    {
        return Attribute::make(
            get: fn ( $value) =>$value?$value: $this->from,
        );
    }



}
