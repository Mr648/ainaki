<?php

namespace App\Http\Controllers;

use App\CarryingCase;
use App\Cleaner;
use App\EyeGlass;
use App\Favorite;
use App\Http\Requests\FavoriteRequest;
use App\Lens;
use App\Strap;
use Illuminate\Http\Request;

const ACTION_ADD = 'add';
const ACTION_REMOVE = 'remove';
const ACTION_FETCH = 'fetch';


class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('smsauth');
    }

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
        return $this->favoriteManager(ACTION_FETCH, $request);
    }

    private function fetchFavorites($request)
    {

        $user = $request->account();
        $items = array();
        foreach ($user->favorites as $favorite) {
            $CLASS = $favorite->favoriteable_type;
            $favoriteProduct = $CLASS::where('id', $favorite->favoriteable_id)->get(['id', 'name', 'price'])->first();

            $item = array();
            $item['id'] = $favoriteProduct->id;
            $item['name'] = $favoriteProduct->name;
            $item['price'] = $favoriteProduct->price;
//            $item['image'] = $CLASS::where('id', $favorite->favoriteable_id)->first()->photos[0]->path;
            $items[] = $item;
        }
        return json_encode($items);
    }

    private function favoriteManager($action, $request)
    {

        if ($action == ACTION_FETCH) {
            return $this->fetchFavorites($request);
        }

        $user = $request->account();
        $productId = $request->productId;
        $productCategory = $request->productCategory;

        $product = null;
        $productType = null;

        switch ($productCategory) {
            case 'eyeglass':
                $product = EyeGlass::find($productId);
                $productType = 'App\EyeGlass';
                break;
            case 'lens':
                $product = Lens::find($productId);
                $productType = 'App\Lens';
                break;
            case 'carrying_case':
                $product = CarryingCase::find($productId);
                $productType = 'App\CarryingCase';
                break;
            case 'cleaner':
                $product = Cleaner::find($productId);
                $productType = 'App\Cleaner';
                break;
            case 'strap':
                $product = Strap::find($productId);
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
                    $this->rmFavorite($user->id, $productId);
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
    }

    private function addFavorite($productId, $productType)
    {
        $result = Favorite::create([
            'favoriteable_id' => $productId,
            'favoriteable_type' => $productType,
        ]);
        return $result;
    }

    private function rmFavorite($userId, $productId)
    {
        $result = Favorite::where('ainaki_user_id', $userId)
            ->where('favoriteable_id', $productId)
            ->delete();
        return $result;
    }

    private function addComment($productId, $productType)
    {

    }

}
