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
    echo "Ainaki Application is Alive!";
});

Route::post('/verifyCode', 'SmsAuthenticationController@verifyCode');
Route::post('/sendSms', 'SmsAuthenticationController@sendSms');

Route::prefix('user')->group(function () {
    Route::post('/like', 'UserController@like');
    Route::post('/favorites', 'UserController@favorites');
    Route::post('/dislike', 'UserController@dislike');
});

Route::get('/testUserAuth/{authKey}', function (Request $request) {
    echo 'User Authorized :: <strong>' . $request->account()->phone . '</strong>';
})->middleware('smsauth');


Route::get('/glass', function () {
    $eyeGlasses = \App\EyeGlass::all();
    return json_encode($eyeGlasses);
});


Route::get('/users', function () {
    $users = \App\AinakiUser::all();
    $users->each(function ($user) {
        echo $user->authSms->authKey . '<br>';
    });
});


Route::get('/products/{category}/{filter}', function ($id) {
    $eyes = \App\EyeGlass::all()->shuffle()->take(25);
    $items = array();
    foreach ($eyes as $eye) {
        $eyeGlassImages = App\Photo::where('imageable_id', $eye->id)->get(['path']);

        $images = array();
        foreach ($eyeGlassImages as $image) {
            $images[] = $image->path;
        };
        $items[] = array(
            'id' => $eye->id,
            'attrs' => array(
                'name' => $eye->frameColor,
                'color' => $eye->frameColor,
                'frame' => $eye->frameShape,
                'price' => $eye->price,
                'images' => !is_null($images) ? $images : 'EMPTY',
            )
        );
    }
    return json_encode($items);
});


Route::get('/test/new/api', function () {

});

