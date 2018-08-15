<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\AinakiUser;
use Illuminate\Http\Request;


Route::get('/', function () {
    $title = "صفحه اصلی";
    $cards = array(
        [
            'img' => 'images/10.jpg',
            'alt' => 'sample'
        ],
        [
            'img' => 'images/12.jpg',
            'alt' => 'sample'
        ],
        [
            'img' => 'images/7.png',
            'alt' => 'sample'
        ],
        [
            'img' => 'images/8.jpg',
            'alt' => 'sample'
        ]
    );

    $homeProducts = \App\EyeGlass::inRandomOrder()->with('photos')->take(4)->get();
//    echo '<pre>';
//    print_r($homeProducts);
//    echo '</pre>';

    return view('index', compact('title', 'cards', 'homeProducts'));
});

Route::get('/design', function () {
	$products = \App\EyeGlass::paginate(10);
    return view('design.index',compact('products'));
});


Route::post('/verifyCode', 'SmsAuthenticationController@verifyCode');
Route::post('/sendSms', 'SmsAuthenticationController@sendSms');

Route::prefix('user')->group(function () {
    Route::post('/like', 'UserController@like');
    Route::post('/favorites', 'UserController@favorites');
    Route::post('/dislike', 'UserController@dislike');
    Route::post('/update', 'UserController@updateUser');
    Route::post('/comment', 'UserController@addComment');
    Route::post('/signup', 'SignupController@signUp')->name('signup');
    Route::post('/signin', 'LoginController@login')->name('signin');
    Route::post('/signout', 'LogoutController@logout')->name('signout');

});



Route::prefix('products')->group(function () {
    Route::get('/', 'ProductController@index')->name('product.index'); // list of products
    Route::get('/{category}/{id}', 'ProductController@show')->name('product.show'); // show single product
    Route::get('/test/online/{id}', 'ProductController@onlineTest')->name('product.test');
//    Route::get('/filter', 'ProductController@filter')->name('product.filter');

});

Route::prefix('shopping')->group(function () {
    Route::post('/basket/{id}', 'ProductController@addToBasket')->name('shopping.basket');
    Route::post('/buy', 'ProductController@buy')->name('shopping.buy');
    Route::post('/transactions', 'ProductController@transactions')->name('shopping.transactions');
});


Route::get('/products', 'ProductController@index')->name('product.index');

Route::get('/products/{id}', 'ProductController@show')->name('product.show');
Route::get('/products/shop/{id}', 'ProductController@shop')->name('product.shop');
Route::get('/products/online/test/{id}', 'ProductController@onlineTest')->name('product.test');


Route::get('/products/{category}/{filters}', 'ProductController@listProducts');


Route::get('/test/new/api', function () {

});

Route::get('/design/test/collapse', function () {
return view('design/collapse');
});


//Route::get('/products/{category}/{filters}', 'ProductController@listProducts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gggggg', function () {

    return response()->json([
        new \App\Http\Resources\EyeGlassDetails(\App\EyeGlass::find(rand(1,10))),
        new \App\Http\Resources\CleanerDetails(\App\Cleaner::find(rand(1,10))),
        new \App\Http\Resources\StrapDetails(\App\Strap::find(rand(1,10))),
        new \App\Http\Resources\CarryingCaseDetails(\App\CarryingCase::find(rand(1,10))),
        new \App\Http\Resources\LensDetails(\App\Lens::find(rand(1,10))),
    ], 200);
});