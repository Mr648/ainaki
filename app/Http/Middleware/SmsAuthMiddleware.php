<?php

namespace App\Http\Middleware;

use App\SmsAuth;
use Closure;

class SmsAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $authKey = $request->authKey;
        $smsAuth = SmsAuth::where([
            'authKey' => $authKey,
            'authenticated' => true
        ])->first();

        if (!is_null($smsAuth) && !is_null($smsAuth->user)) {
            $user = $smsAuth->user;
//            $request->merge(['user' => $user]);
//            $request->setUserResolver(function () use ($user) {
//                return $user;
//            }
            $request::macro('account', function () use ($user){
                return $user;
            });
            return $next($request);
        } else {
            return response('Access is Denied.', 401)->header('Content-Type', 'text/plain');
        }
    }
}