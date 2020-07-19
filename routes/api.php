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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'Api\AuthController@login');
    Route::post('register', 'Api\AuthController@register');
    Route::group(['middleware' => 'auth:api'], function() {
        Route::post('logout', 'Api\AuthController@logout');
        Route::get('user', 'Api\AuthController@user');
        Route::resource('categories', 'Category\CategoryController');
        Route::resource('products', 'Product\ProductController');
        Route::resource('product-types', 'ProductType\ProductTypeController');
        Route::resource('providers', 'Providers\ProvidersController');
        Route::resource('users', 'User\UsersController');
    });
});
Route::get('users/email-check', 'User\UsersController@emailcheck');

