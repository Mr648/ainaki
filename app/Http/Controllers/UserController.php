<?php

namespace App\Http\Controllers;

use App\CarryingCase;
use App\Cleaner;
use App\EyeGlass;
use App\Http\Requests\FavoriteRequest;
use App\Lens;
use App\SmsAuth;
use App\Strap;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    //
    public function like(FavoriteRequest $request)
    {
        $authKey = $request->authKey;
        $productId = $request->productId;
        $productCategory = $request->productCategory;

        $authentication = SmsAuth::where('authKey', sha1($authKey))->first();

        if (!is_null($authentication) && $authentication->authenticated == 1) {

            $user = $authentication->user;

            $product = null;

            switch ($productCategory) {
                case 'eyeglass':
                    $product = EyeGlass::findOrFail($productId);
                    break;
                case 'lens':
                    $product = Lens::findOrFail($productId);
                    break;
                case 'carrying_case':
                    $product = CarryingCase::findOrFail($productId);
                    break;
                case 'cleaner':
                    $product = Cleaner::findOrFail($productId);
                    break;
                case 'strap':
                    $product = Strap::findOrFail($productId);
                    break;
            }

            if (!is_null($product)) {
                $user->favorites()->save($product);
                return json_encode([
                    'error'=>false,
                    'message'=>"عملیات موفق!"
                ]);
            }else{
                return json_encode([
                    'error'=>true,
                    'message'=>"کالای مورد نظر یافت نشد!"
                ]);
            }

        }else{
            return json_encode([
                'error'=>true,
                'message'=>"برای افزودن کالا به علاقه‌مندی‌ها، باید حساب کاربری داشته باشید."
            ]);
        }

    }

    public function dislike(FavoriteRequest $request)
    {
        $productId = $request->productId;
        $productCategory = $request->productCategory;
        $authKey = $request->authKey;

        $authentication = SmsAuth::where('authKey', $authKey)->first();

        if (!is_null($authentication) && $authentication->authenticated == 1) {

            $user = $authentication->user;

            $product = null;

            switch ($productCategory) {
                case 'eyeglass':
                    $product = EyeGlass::findOrFail($productId);
                    break;
                case 'lens':
                    $product = Lens::findOrFail($productId);
                    break;
                case 'carrying_case':
                    $product = CarryingCase::findOrFail($productId);
                    break;
                case 'cleaner':
                    $product = Cleaner::findOrFail($productId);
                    break;
                case 'strap':
                    $product = Strap::findOrFail($productId);
                    break;
            }

            if (!is_null($product)) {
                $user->favorites()->remove($product);
                return json_encode([
                    'error'=>false,
                    'message'=>"عملیات موفق!"
                ]);
            }else{
                return json_encode([
                    'error'=>true,
                    'message'=>"کالای مورد نظر یافت نشد!"
                ]);
            }

        }else{
            return json_encode([
                'error'=>true,
                'message'=>"برای افزودن کالا به علاقه‌مندی‌ها، باید حساب کاربری داشته باشید."
            ]);
        }

    }


}
