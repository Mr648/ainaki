<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AinakiUser;

class SignupController extends Controller
{
    //




    public function signUp(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'phone' => 'required',
            'pswd' => 'required'
        ]);

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
