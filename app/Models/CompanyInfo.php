<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    use HasFactory;

    protected  $fillable = ['institute',
'tagline',
'address',
'mobile',
'email',
'avatar_id'];


    public  function  avatar(){
        return $this->belongsTo(Attachment::class,'avatar_id');
    }
}
