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
    return $code1 == $code2;
});


Route::post('/sendSms', 'SmsAuthenticationController@sendSms');
Route::get('/showuser/{id}', function ($id) {
    $user = AinakiUser::findOrFail($id);
    echo '<pre>';
    echo json_encode($user);
    echo '</pre>';
});

Route::get('/testUserAuth/{authKey}' , function ($authKey){
    echo 'jamal';
})->middleware('smsauth');

Route::get("/products/{category}/{filter}", function ($category, $filter) {
    $array = array();
    for ($i = 1; $i < 100; $i++) {
        $array[] = [
            "id" => $i,
            "name" => "Rayban " . substr(rand(), 3),
            "image" => urlencode('images/g' . (rand() % 7 + 1) . '.png'),
            "price" => rand() / 2 * 0.001];
    }
    return json_encode($array);
});
