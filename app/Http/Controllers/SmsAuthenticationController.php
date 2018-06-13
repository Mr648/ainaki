<?php

namespace App\Http\Controllers;

use App\AinakiUser;
use App\SmsAuth;
use App\Http\Requests\SmsAuthRequest;
use GuzzleHttp\Client;

class SmsAuthenticationController extends Controller
{
    //

    public function sendSms(SmsAuthRequest $request)
    {


        // Getting data from request
        $phoneNumber = $request->phoneNumber;
        $user = AinakiUser::create(['phone' => $phoneNumber]);


        // TODO call SMS API here

        $client = new Client([
            'base_uri' => 'http://127.0.0.1:8000',
            'defaults' => [
                'exceptions' => false
            ]
        ]);

        $res = $client->get('/getSomeJson');

        if ($res->getStatusCode() == 200 ) {

            $smsStatus = json_decode($res->getBody());
            $verificationCode = $smsStatus->verificationCode;
             if( $smsStatus->status == 200){
                 $authSms = new SmsAuth();
                 $authSms->authentication_code = $verificationCode;
                 $user->authSms()->save($authSms);
                 return json_encode([
                     'authKey'=>''.sha1($verificationCode),
                     'message'=>'پیامک با موفقیت ارسال شد!',
                     'error' => false
                 ]);
             }else{
                 return json_encode([
                     'authKey'=>null,
                     'message'=>'خطا در ارسال پیامک!',
                     'error' => true
                 ]);
             }

        } else {
            return json_encode([
                'authKey'=>null,
                'message'=>'خطا در ارسال پیامک!',
                'error' => true
            ]);
        }
    }

    public function verify(SmsAuthVerificationRequest $request){

    }
}
