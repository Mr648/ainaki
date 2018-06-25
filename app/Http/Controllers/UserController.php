<?php

namespace App\Http\Controllers;

use App\CarryingCase;
use App\Cleaner;
use App\EyeGlass;
use App\Favorite;
use App\Http\Requests\FavoriteRequest;
use App\Lens;
use App\SmsAuth;
use App\AinakiUser;
use App\Strap;
use Illuminate\Http\Request;

const ACTION_ADD = 'add';
const ACTION_REMOVE = 'remove';


class UserController extends Controller
{
    //


    public function like(FavoriteRequest $request)
    {
        return $this->favoriteManager(ACTION_ADD, $request);
    }

    public function dislike(FavoriteRequest $request)
    {
        return $this->favoriteManager(ACTION_REMOVE, $request);
    }

    public function favorites(Request $request)
    {
        $authKey = $request->authKey;
        $authentication = SmsAuth::where('authKey', $authKey)->first();

        if (!is_null($authentication) && $authentication->authenticated == 1) {

            $user = $authentication->user;

            $favorites = array();
            $items = array();
            foreach ($user->favorites as $favorite) {
                $CLASS = $favorite->favoriteable_type;
                $favoriteProduct = $CLASS::where('id', $favorite->favoriteable_id)->get(['id', 'name', 'price'])->first();

                $item = array();
                $item['id'] = $favoriteProduct->id;
                $item['name'] = $favoriteProduct->name;
                $item['price'] = $favoriteProduct->price;
                $item['image'] = $CLASS::where('id', $favorite->favoriteable_id)->first()->photos[0]->path;
                $items[] = $item;
            }
            return json_encode($items);
        } else {
            return json_encode(array());
        }
    }

    private function favoriteManager($action, $request)
    {
        $authKey = $request->authKey;
        $productId = $request->productId;
        $productCategory = $request->productCategory;

        $authentication = SmsAuth::where('authKey', $authKey)->first();

        if (!is_null($authentication) && $authentication->authenticated == 1) {

            $user = $authentication->user;

            $product = null;
            $productType = null;

            switch ($productCategory) {
                case 'eyeglass':
                    $product = EyeGlass::findOrFail($productId);
                    $productType = 'App\EyeGlass';
                    break;
                case 'lens':
                    $product = Lens::findOrFail($productId);
                    $productType = 'App\Lens';
                    break;
                case 'carrying_case':
                    $product = CarryingCase::findOrFail($productId);
                    $productType = 'App\CarryingCase';
                    break;
                case 'cleaner':
                    $product = Cleaner::findOrFail($productId);
                    $productType = 'App\Cleaner';
                    break;
                case 'strap':
                    $product = Strap::findOrFail($productId);
                    $productType = 'App\Strap';
                    break;
            }


            if (!is_null($product)) {

                switch ($action) {
                    case ACTION_ADD:
                        $favorite = $this->addFavorite($productId, $productType);
                        $user->favorites()->save($favorite);
                        break;
                    case ACTION_REMOVE:
                        $this->isFavorite($user->id, $productId);
//                        $user->favorites()->where('favoriteable_id', $favorite->id)->delete();
                        break;
                }

                return json_encode([
                    'error' => false,
                    'message' => "عملیات موفق!"
                ]);
            } else {
                return json_encode([
                    'error' => true,
                    'message' => "کالای مورد نظر یافت نشد!"
                ]);
            }

        } else {
            return json_encode([
                'error' => true,
                'message' => "برای افزودن کالا به علاقه‌مندی‌ها، باید حساب کاربری داشته باشید."
            ]);
        }

    }

    private function addFavorite($productId, $productType)
    {
        $result = Favorite::create([
            'favoriteable_id' => $productId,
            'favoriteable_type' => $productType,
        ]);
        return $result;
    }


    private function isFavorite($userId, $productId)
    {
        $result = Favorite::where('ainaki_user_id', $userId)
            ->where('favoriteable_id', $productId)
            ->delete();
        return $result;
    }


}
