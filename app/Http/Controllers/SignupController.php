<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\AinakiUser;
use Validator;

class SignupController extends Controller
{
    //


    public function signUp(Request $request)
    {


        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'phone' => 'required|numeric|regex:/(0)[0-9]{10}/',
                'pswd' => 'required|min:7'
            ]);

        if ($validator->fails()) {
            $header = array (
                'Content-Type' => 'application/json; charset=UTF-8',
                'charset' => 'utf-8'
            );
            return response()->json(array(
                'error' => true,
                'messages' => $validator->messages()
            ), Response::HTTP_BAD_REQUEST,$header);
        }
//        $this->validate($request, [
//            'email' => 'required',
//            'phone' => 'required',
//            'pswd' => 'required'
//        ]);

        $email = $request->email;
        $phone = $request->phone;
        $password = $request->pswd;


        $exists = AinakiUser::where('email', '=', $email)->count() > 0;
        if ($exists === false) {
            $user = \App\AinakiUser::create([
                'email' => $email,
                'phone' => $phone,
                'password' => $password
            ]);
            return json_encode([
                'error' => false,
                'message' => 'ثبت نام شما با موفقیت انجام شد!'
            ]);

        } else {
            return json_encode([
                'error' => true,
                'message' => 'این ایمیل قبلا در سامانه ثبت شده است!'
            ]);

        }
    }
}
