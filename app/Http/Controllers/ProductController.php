<?php

namespace App\Http\Controllers;

use App\CarryingCase;
use App\EyeGlass;
use App\Lens;
use App\Strap;
use App\Cleaner;

use App\Http\Resources\CarryingCaseCollection;
use App\Http\Resources\CleanerCollection;
use App\Http\Resources\StrapCollection;
use App\Http\Resources\LensCollection;
use App\Http\Resources\EyeGlassCollection;

use App\Http\Resources\CleanerDetails as CleanerResource;
use App\Http\Resources\EyeGlassDetails as EyeGlassResource;
use App\Http\Resources\LensDetails as LensResource;
use App\Http\Resources\StrapDetails as StrapResource;
use App\Http\Resources\CarryingCaseDetails as CarryingCaseResource;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


define('EYEGLASS', 'eyeglass');
define('STRAP', 'strap');
define('LENS', 'lens');
define('CARRYING_CASE', 'carrying_case');
define('CLEANER', 'cleaner');


class ProductController extends Controller
{


	public function __construct()
	{
	}

	private function getProductType($productType, $id)
	{
		switch ($productType) {
			case EYEGLASS :
				return new EyeGlassResource(EyeGlass::findOrFail($id));
			case STRAP :
				return new StrapResource(Strap::findOrFail($id));
			case LENS :
				return new LensResource(Lens::findOrFail($id));
			case CARRYING_CASE :
				return new CarryingCaseResource(CarryingCase::findOrFail($id));
			case CLEANER :
				return new CleanerResource(Cleaner::findOrFail($id));
		}
	}


	private function getAllProductsFor($productType, $paginate)
	{
		$productType = strtolower($productType);
		switch ($productType) {
			case EYEGLASS :
				return new EyeGlassCollection(EyeGlass::paginate($paginate));
			case STRAP :
				return new StrapCollection(Strap::paginate($paginate));
			case LENS :
				return new LensCollection(Lens::paginate($paginate));
			case CARRYING_CASE :
				return new CarryingCaseCollection(CarryingCase::paginate($paginate));
			case CLEANER :
				return new CleanerCollection(Cleaner::paginate($paginate));
		}
	}

	public function index($category)
	{

		$paginate = Input::get('paginate');
		$title = 'لیست ' . __('messages.routes.' . $category) . '‌ها';
		if (!is_numeric($paginate)) {
			$paginate = 12;
		}
//        $products = \App\Http\Resources\EyeGlassDetails::collection(\App\EyeGlass::simplePaginate(15));
		$products = $this->getAllProductsFor($category, $paginate);
		return view('product.index', compact('title', 'products', 'category'));
	}

	public function show($category, $id)
	{
//       [
		//

		//],

//]
//		$title = 'لیست محصولات';
//		$product = new EyeGlassDetails(EyeGlass::find($id));
//		return $product;
//		$product = json_decode(json_encode($product->jsonSerialize()));
//		return view('product.show', compact('title', 'product'));

		$title = 'لیست محصولات';
		$product = $this->getProductType($category, $id);
//		return $product;
		$product = json_decode(json_encode($product->jsonSerialize()));
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

		return view('product.index', compact('category', 'title', 'products'));
	}


	public function shop()
	{
		//
	}

	public function addToBasket(Request $request)
	{
		return response()->json([
			$request->product_type,
			$request->id,
		], 200);
	}

	public function onlineTest()
	{
		//
	}
}
