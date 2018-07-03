<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
        $CLASS = $this->getProductType(hexdec($request->productType));;
        return $CLASS::where('id', $request->productId)->get($this->getProductInfo(hexdec($request->productType)))->first();
    }

    private function getProductType($producType)
    {
        switch ($producType) {
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

    private function getProductInfo($producType)
    {
        switch ($producType) {
            case EYEGLASS :
                return [
                    'name',
                    'description',
                    'bridgeLength',
                    'frameColor',
                    'frameColorType',
                    'frameShape',
                    'frameWidth',
                    'gender',
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
