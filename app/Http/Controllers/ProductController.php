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
        $this->middleware('smsauth');
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
            $filtered = $filtered->where($this->getColumnFor($key), $obj->op, $obj->value);
        }

        return $filtered->get($this->getProductInfo(hexdec($request->productType)));
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
