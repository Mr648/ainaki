<?php

namespace App\Http\Controllers;

use App\EyeGlass;

use App\Http\Resources\EyeGlass as EyeGlassResource;
use App\Http\Resources\EyeGlassCollection;
use App\Http\Resources\EyeGlassDetails;
use Illuminate\Http\Request;
use App\Comment;
use App\Favorite;
use App\Photo;


define('EYEGLASS', '101');
define('STRAP', '102');
define('LENS', '103');
define('CARRYING_CASE', '104');
define('CLEANER', '105');


class ProductController extends Controller
{
    //


    private $COLS = [

        0x6480f20 => 'name',
        0x6480f21 => 'color',
        0x6480f22 => 'length',
        0x6480f23 => 'material',
        0x6480f24 => 'description',
        0x6480f25 => 'discountPercentage',
        0x6480f26 => 'discountPeriod',
        0x6480f27 => 'BC',
        0x6480f28 => 'DIA',
        0x6480f29 => 'healthLicence',
        0x6480f2a => 'width',
        0x6480f2b => 'height',
        0x6480f2c => 'volume',
        0x6480f2d => 'quantityInPack',
        0x6480f2e => 'usePeriod',
        0x6480f2f => 'waterContent',
        0x6480f30 => 'productionDate',
        0x6480f31 => 'bridgeLength',
        0x6480f32 => 'frameColor',
        0x6480f33 => 'frameColorType',
        0x6480f34 => 'frameShape',
        0x6480f35 => 'frameWidth',
        0x6480f36 => 'gender_id',
        0x6480f37 => 'handleLength',
        0x6480f38 => 'hasBox',
        0x6480f39 => 'lensColor',
        0x6480f3a => 'lensColorType',
        0x6480f3b => 'lensHeight',
        0x6480f3c => 'lensWidth',
        0x6480f3d => 'lensMaterial',
        0x6480f3e => 'weight'

    ];

    public function __construct()
    {
    }

    public function filterChooser(Request $request)
    {

        return $this->filter($request);
    }

    private function filter($request)
    {

        $CLASS = $this->getProductType(hexdec($request->productType));

        $filters = json_decode($request->filters);

        $filtered = $CLASS::where('gender', $filters->gender);

        foreach ($filters as $key => $obj) {
            $filtered = $filtered->where($this->getColumnFor(hexdec($key)), $obj->op, $obj->value);
        }

        return $filtered->get($this->getProductInfo(hexdec($request->productType)));
    }


    public function product(Request $request)
    {

        $user = $request->account();

        $CLASS = $this->getProductType(hexdec($request->productType));

        $product = array();

        $result = $CLASS::where('id', $request->productId)->first();

        if (!is_null($result)) {
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

            $brand = $result->brand()->get(['name', 'country']);
            $brand = $brand['brand'] = [];
            if (!is_null($brand)) {
                foreach ($brand as $brand) {
                    $brand['brand'][] = $brand->name;
                    $brand['brand'][] = $brand->country;
                }
            }

            $brand = $result->brand()->get(['name', 'country']);
            $brand = $brand['brand'] = [];
            if (!is_null($brand)) {
                $brand['brand'][] = $brand;
            }


            $product['url'] = urlencode('http://test');

            $product['rating'] = ($count != 0) ? $result->comments()->get(['rating', 'comment'])->sum('rating') / $count : 0;

            $product['comments'] = ($count != 0) ? $result->comments()->get(['rating', 'comment']) : [];


            return $product;
        }

        return response()->json([
            'message' => 'کالای مورد نظر یافت نشد!',
            'error' => true,
        ]);

    }


    private function getColumnFor($colId)
    {
        return $this->COLS[$colId];
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

    private function getAllProductsFor($productType)
    {
        switch ($productType) {
            case EYEGLASS :
                return new EyeGlassCollection(EyeGlass::paginate());
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


    public function index()
    {
        $title = 'لیست محصولات';
        return view('product.index', compact('title'));
    }

    public function show(Request $request, $id)
    {
//       [
        //

        //],


//]
        $title = 'لیست محصولات';
        $product =  new EyeGlassDetails(EyeGlass::find($id));
//        return $product;
        $product =  json_decode(json_encode($product->jsonSerialize()));
        return view('product.show', compact('title', 'product'));
    }


    private $products = null;

    public function listProducts($category, $filters)
    {
        $filters = preg_split('/&/', $filters);

//        $CLASS = $this->getProductType($category);

//        $products = $CLASS::inRandomOrder()->with('photos')->take(25)->get();

        if (is_null($this->products))
            $products = $this->getAllProductsFor($category);

//
        foreach ($filters as $filter) {
            $filter = preg_split('/=/', $filter);
            $products = $products->where("{$filter[0]}", '=', "{$filter[1]}");
        }


        $title = 'لیست محصولات';

        return view('product.index', compact('title', 'products'));
    }


    public function shop()
    {
        //
    }

    public function onlineTest()
    {
        //
    }
}
