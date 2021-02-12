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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');

Route::middleware('auth:api')->group( function () {
    Route::resource('articlesApi', 'API\articleController');
    Route::resource('offersApi', 'API\offerController');
    Route::resource('appliedApi', 'API\appliedController');
    Route::resource('ciclesApi', 'API\ciclesController');
    Route::resource('usersApi', 'API\usersController');
    });

