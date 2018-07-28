<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Favorite;


define('EYEGLASS', 0x1001);
define('STRAP', 0x1002);
define('LENS', 0x1003);
define('CARRYING_CASE', 0x1004);
define('CLEANER', 0x1005);


class ProductController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('smsauth');
    }

    public function filterChooser(Request $request)
    {

        return $this->filter($request);
    }

    private function filter($request)
    {

        $user = $request->account();

        $CLASS = $this->getProductType(hexdec($request->productType));

        $product = array();

        $result = $CLASS::where('id', $request->productId)->first();


        $json = json_decode($result);

        $keys = $this->getProductInfo(hexdec($request->productType));

        foreach ($json as $key => $value) {
            if (array_search($key, $keys)) {
                $product[$key] = $value;
            }
        }

        $isFavorite = $result->favorites()->where('ainaki_user_id', $user->id)->first();

        $product['isFavorite'] = !is_null($isFavorite);

        $count = $result->comments()->get(['rating', 'comment'])->count();

        $photos = $result->photos()->get(['path']);
        $product['photos'] = [];
        if (!is_null($photos)) {
            foreach ($photos as $photo) {
                $product['photos'][] = $photo->path;
            }
        }

        $brand = $result->brand()->get(['name' , 'country']);
        $brand= $brand['brand'] = [];
        if (!is_null($brand)) {
            foreach ($brand as $brand) {
                $brand['brand'][] = $brand->name;
                $brand['brand'][] = $brand->country;
            }
        }

        $brand = $result->brand()->get(['name' , 'country']);
        $brand= $brand['brand'] = [];
        if (!is_null($brand)) {
                $brand['brand'][] = $brand;
            }


        $product['url'] = urlencode('http://test');

        $product['rating'] = ($count != 0) ? $result->comments()->get(['rating', 'comment'])->sum('rating') / $count : 0;

        $product['comments'] = ($count != 0) ? $result->comments()->get(['rating', 'comment']) : [];


        return $product;
    }

    private function getProductType($productType)
    {
        switch ($productType) {
            case EYEGLASS :
                return 'App\EyeGlass';
            case STRAP :
                return 'App\Strap';
            case LENS :
                return 'App\Lens';
            case CARRYING_CASE :
                return 'App\CarryingCase';
            case CLEANER :
                return 'App\Cleaner';
        }
    }

    private function getProductInfo($productType)
    {
        switch ($productType) {
            case EYEGLASS :
                return [
                    'description',
                    'name',
                    'bridgeLength',
                    'frameColor',
                    'frameColorType',
                    'frameShape',
                    'frameWidth',
                    'gender',
                    'price',
                    'handleLength',
                    'hasBox',
                    'lensColor',
                    'lensColorType',
                    'lensHeight',
                    'lensWidth',
                    'lensMaterial',
                    'weight',
                    'discountPercentage',
                    'discountPeriod',
                    'productionDate',
                ];
            case STRAP :
                return [
                    'color',
                    'name',
                    'length',
                    'material',
                    'description',
                    'discountPercentage',
                    'discountPeriod',
                ];
            case LENS :
                return [

                ];
            case CARRYING_CASE :
                return [

                ];
            case CLEANER :
                return [

                ];
        }
    }
}
