<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function insertAlert($attribute=''){
        return ['removed'=>__('message.inserted',compact('attribute'))];
    }

    public function removeAlert($attribute=''){
        return ['updated'=>__('message.removed',compact('attribute'))];
    }
    public function updateAlert($attribute=''){
        return ['updated'=>__('message.updated',compact('attribute'))];
    }


}
