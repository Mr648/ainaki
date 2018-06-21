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
use App\Strap;
use App\Comment;

Route::get('/', function () {

    echo "test";
});
Route::post('/verifyCode', 'SmsAuthenticationController@verifyCode');

Route::get('/compare/{code1}/{code2}', function ($code1, $code2) {
    return "fgfdfdfd" . ($code1 == $code2);
});


Route::post('/sendSms', 'SmsAuthenticationController@sendSms');
Route::post('/users/like/{id}', 'UserController@like');
Route::post('/users/dislike/{id}', 'UserController@dislike');


Route::get("/products/{category}/{filter}", function ($category, $filter) {


    $eyeGlasses = \App\EyeGlass::get();

// build your second collection with a subset of attributes. this new
// collection will be a collection of plain arrays, not Users models.
    $subset = $eyeGlasses->map(function ($eyeGlass) {
        return collect($eyeGlass->toArray(), $eyeGlass->photos)
            ->only(['id', 'name', 'price', 'imagePath'])
            ->toArray();

    });

    $items = array();

    foreach ($subset as $item) {
        $item['image'] = \App\EyeGlass::findOrFail($item['id'])->photos[0]->path;
        $items[] = $item;
    }

    return \GuzzleHttp\json_encode($items);

});
