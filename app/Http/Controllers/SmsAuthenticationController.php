<?php

namespace App\Http\Controllers;

use App\AinakiUser;
use App\SmsAuth;
use App\Http\Requests\SmsAuthRequest;
use App\Http\Requests\SmsAuthVerificationRequest;
use GuzzleHttp\Client;

class SmsAuthenticationController extends Controller
{
    //

    public function sendSms(SmsAuthRequest $request)
    {


        // Getting data from request
        $phoneNumber = $request->phone;

        $user = AinakiUser::where('phone', $phoneNumber)->first();
        if (is_null($user)) {
            $user = new AinakiUser();
            $user->phone = $phoneNumber;
            $user->save();
        }


        // TODO call SMS API here

       /* $client = new Client([
            'base_uri' => 'http://127.0.0.1:8000',
            'defaults' => [
                'exceptions' => false
            ]
        ]);*/

//        $res = $client->get('/getSomeJson');


            $smsStatus = json_decode(json_encode([
                'status'=>200,
                'verificationCode'=>rand(1000,9999)
            ]));


            $verificationCode = $smsStatus->verificationCode;

            if ($smsStatus->status == 200) {
                $authSms = new SmsAuth();
                $authSms->authentication_code = $verificationCode;
                $authSms->authKey = md5($phoneNumber . env('MD5_SALT'));

                $user->authSms()->save($authSms);

                return json_encode([
                    'message' => "ارسال موفقیت آمیز!" . " :: " . $verificationCode,
                    'error' => false
                ]);
            }
//        if ($res->getStatusCode() == 200) {
//
//            $smsStatus = json_decode($res->getBody());
//            $verificationCode = $smsStatus->verificationCode;
//
//            if ($smsStatus->status == 200) {
//                $authSms = new SmsAuth();
//                $authSms->authentication_code = $verificationCode;
//                $authSms->authKey = md5($phoneNumber . env('MD5_SALT'));
//
//                $user->authSms()->save($authSms);
//
//                return json_encode([
//                    'message' => "ارسال موفقیت آمیز!" . " :: " . $verificationCode,
//                    'error' => false
//                ]);
//            } else {
//                return json_encode([
//                    'message' => 'خطا در ارسال پیامک!',
//                    'error' => true
//                ]);
//            }
//
//        } else {
//            return json_encode([
//                'message' => 'خطا در ارسال پیامک!',
//                'error' => true
//            ]);
//        }
    }

    public function verifyCode(SmsAuthVerificationRequest $request)
    {

        $phoneNumber = $request->phone;
        $verificationCode = $request->verificationCode;

        $smsAuth = SmsAuth::where([
                'authKey' => md5($phoneNumber . env('MD5_SALT')),
                'authenticated' => false,
                'authentication_code' => $verificationCode]
        )->first();

        if (is_null($smsAuth)) {
            return json_encode([
                'message' => 'خطا در ارسال پیامک!',
                'error' => true
            ]);
        } else {
            $smsAuth->authenticated = true;
            $smsAuth->save();
            return json_encode([
                'message' => 'ورود موفقیت آمیز',
                'error' => false,
                'isAuthResponse' => true,
                'authKey' => sha1($smsAuth->authKey)
            ]);
        }
    }
}
