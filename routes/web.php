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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('noAuthorized', function () {
    return view('auth/noAuth');
});


Route::get('generador', function () {
    return view('generadorPdf/index');
});

Route::resource('alumnos', 'AppliedController');
Route::resource('ofertas', 'OfferController');

Route::get('/{offer}/informe', 'AppliedController@informe');
Route::get('/{date}/informe', 'AppliedController@informe'); #??

