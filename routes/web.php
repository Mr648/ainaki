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

    return view('index', compact('title' , 'cards', 'homeProducts') );
});

Route::get('/design', function () {
    return view('design.index');
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







Route::get('/products', 'ProductController@index')->name('product.index');

Route::get('/products/{id}', 'ProductController@show')->name('product.show');
Route::get('/products/shop/{id}', 'ProductController@shop')->name('product.shop');
Route::get('/products/online/test/{id}', 'ProductController@onlineTest')->name('product.test');


Route::get('/products/{category}/{filters}', 'ProductController@listProducts');


Route::get('/test/new/api', function () {

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/gggggg', function () {
    return new \App\Http\Resources\EyeGlassDetails(\App\EyeGlass::find(1));
});