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


Route::get('informe/{offerid}', 'AppliedController@informe')->name('informeAlumno');
Route::get('informe', 'OfferController@informe')->name('informeOferta');


Route::get('/enviarEmail', 'emailController@index');
Route::get('/emailEnviado', 'emailController@store');


Route::get('users','UserController@index');
Route::get('usersAct','UserController@desactivados');
Route::get('usersDct','UserController@activados');

Route::patch('users1/{id}','UserController@validar')->name('StatusOn');
Route::patch('users2/{id}','UserController@invalidar')->name('StatusOff');