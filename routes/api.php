<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['middleware' => ['cors']], function () {
//    Route::get('test', function () {
//        return 'Hello World';
//    });
    //获取openid
    Route::post('login', 'API\UserController@login');        //登录接口
    Route::post('test', 'API\testController@test');          //登录接口
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
