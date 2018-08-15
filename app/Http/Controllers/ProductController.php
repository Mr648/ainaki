<?php

namespace App\Http\Controllers;

use App\EyeGlass;

use App\Http\Resources\CleanerDetails as CleanerResource;
use App\Http\Resources\EyeGlass as EyeGlassResource;
use App\Http\Resources\EyeGlassCollection;
use App\Http\Resources\EyeGlassDetails;
use Illuminate\Http\Request;
use App\Comment;
use App\Favorite;
use App\Photo;
use App\Cleaner;


define('EYEGLASS', '101');
define('STRAP', '102');
define('LENS', '103');
define('CARRYING_CASE', '104');
define('CLEANER', '105');


class ProductController extends Controller
{


	public function __construct()
	{
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

	public function index()
	{
		$title = 'لیست محصولات';
//        $products = \App\Http\Resources\EyeGlassDetails::collection(\App\EyeGlass::simplePaginate(15));
        $products = \App\EyeGlass::paginate(5);
		return view('product.index', compact('title','products'));
	}

	public function show(Request $request, $id)
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
		$product = new CleanerResource(Cleaner::findOrFail($id));
		return $product;
//		$product = json_decode(json_encode($product->jsonSerialize()));
//		return view('product.show', compact('title', 'product'));

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
