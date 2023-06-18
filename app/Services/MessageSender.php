<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MessageSender
{

    public string $token;
    public  string $url;

    public function __construct()
    {
        $this->token = config('sms.token');
        $this->url = config('sms.url');
    }


    public function validateMessage($to,$message){
        throw_unless($to,'Array To Property Missing');
        throw_unless(is_bd_phone($to),"$to Number Not Are Valid Bangladeshi Phone Number");
        throw_unless($message,"$to Number With Message Not Found");
    }

    public  function  sendSingle($to,$message){
        $url = $this->url;
        $token = $this->token;
        $result = Http::post($url,compact('token','to','message'));
    }




    public  function sendBulk(array $list){
        $url = $this->url;
        $token = $this->token;
        foreach ($list as $item){
            $message = $item['message'];
            $to = $item['to'];
            $this->validateMessage($to,$message);

        }
        $items = collect($list)->toJson();
        $smsdata="$items";
        $result = Http::post($url,compact('token','smsdata'));
    }






}
