<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AinakiUser;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    //

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'pswd' => 'required'
        ]);

        $email = $request->email;
        $password = $request->pswd;

        $exist = AinakiUser::where('email', $email)->where('password', $password)->exists();

//        $ddd=Cookie::get('username');
//        echo $ddd;
//        exit;
        Cookie::queue(Cookie::make('username',$request->email,400000));


        if ($exist) {
            session('user', $email);

            return json_encode([
                'error' => false,
                'message' => 'شما وارد حساب خود شدید.'
            ]);
        } else {
            return json_encode([
                'error' => true,
                'message' => 'اطلاعات شما ذرست نیست یا ثبت نام نکرده اید.'
            ]);
        }

    }
}

