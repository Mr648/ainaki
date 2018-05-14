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

    $user = AinakiUser::findOrFail(1);
    //echo '<img src="/'. $user->comments[0]->commentable->photos[0]->path . '" alt=" sdfsdfsdf " />';
    echo "<pre>" . json_encode(array($user->comments[0]->commentable, $user->comments[0], $user)) . "</pre>";


});
