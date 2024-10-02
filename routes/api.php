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
    Route::middleware('auth:api')->group(function (){
        Route::get('logout', 'App\Http\Controllers\API\AuthController@logout');
        Route::get('user', 'App\Http\Controllers\API\AuthController@user');
        Route::get('allfarmhouse', 'App\Http\Controllers\FarmHouseController@index');
        Route::post('addfarmhouse', 'App\Http\Controllers\FarmHouseController@store');
        Route::delete('deletefarmhouse/{id}', 'App\Http\Controllers\FarmHouseController@delete');
    });
});

