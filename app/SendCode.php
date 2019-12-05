<?php
namespace App;
use App\User;
class SendCode
{
    public static function sendCode($phone){
        $code=rand(1111,9999);
        $nexmo=app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'201144862907',
            'from'=> 'NEXMO',
            'text'=>'Verify Code: '.$code,
        ]);
        return $code;
    }
}