<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function (){
    Route::post('login', 'App\Http\Controllers\API\AuthController@login');
    Route::post('register', 'App\Http\Controllers\API\AuthController@register');
    Route::get('logout', 'App\Http\Controllers\API\AuthController@logout');
    Route::get('user', 'App\Http\Controllers\API\AuthController@user');
    Route::middleware('auth:api')->group(function (){
        Route::get('logout', 'App\Http\Controllers\API\AuthController@logout');
        Route::get('user', 'App\Http\Controllers\API\AuthController@user');
        Route::get('allfarmhouse', 'App\Http\Controllers\FarmHouseController@index');
        Route::post('addfarmhouse', 'App\Http\Controllers\FarmHouseController@store');
        Route::delete('deletefarmhouse/{id}', 'App\Http\Controllers\FarmHouseController@delete');
        Route::get('allproduct', 'App\Http\Controllers\ProductController@index');
        Route::post('addproduct', 'App\Http\Controllers\ProductController@store');
        Route::delete('deleteproduct/{id}', 'App\Http\Controllers\ProductController@delete');
        Route::put('updateproduct/{id}', 'App\Http\Controllers\ProductController@update');
        Route::get('allcategory', 'App\Http\Controllers\ProductController@allcategory');
    });
});

