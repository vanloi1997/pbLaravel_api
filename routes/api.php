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


Route::middleware('auth:api')->get('/user', function(Request $req){
    return $req->user();
});

Route::group(['prefix' => 'auth'], function(){
    Route::post('/register','Api\AuthController@register');
    Route::post('/login','Api\AuthController@login');
});


