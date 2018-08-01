<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use  \Illuminate\Support\Facades\Cookie;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\AinakiUser;

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
		$remember = $request->remember;
		$location =$request->_location;

		$exist = AinakiUser::where('email', $email)->where('password', $password)->exists();

		if ($exist) {

			if ($remember == 'on') {
				Cookie::queue(Cookie::make('username', $email, 400000));
				Cookie::queue(Cookie::make('password', $password, 400000));
				Cookie::queue(Cookie::make('remember', $remember, 400000));
			} else {
				Cookie::queue(Cookie::forget('username'));
				Cookie::queue(Cookie::forget('password'));
				Cookie::queue(Cookie::forget('remember'));
			}
			$this->setSession($email);

			return redirect($location);
		}
	}

	public function setSession($email)
	{
		session(['user' => $email]);
	}

	public function flushSession($request)
	{
		$request->session()->flush();
	}

	public function getSession($request)
	{
		return $request->session()->all();
	}

	public function getAllCookie()
	{

		return Cookie::get();

//		return Cookie::getQueuedCookies();
	}

	public function getCookie($name)
	{

		return Cookie::get($name);

//		return Cookie::getQueuedCookies();
	}

	public function destroyCookie()
	{

	}

}

