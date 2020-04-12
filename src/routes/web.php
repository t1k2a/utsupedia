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

Route::get('/', function () {
    return redirect('/pedia');
});

Route::resource('pedia', 'EncyclopediaController', ['except' => ['update']]);
Route::post('update', 'EncyclopediaController@update');

Route::resource('column', 'ColumnController', ['except' => ['update']]);
Route::post('update', 'ColumnController@update');

Route::get('session', 'SessionController@ses_get');
Route::post('session', 'SessionController@ses_put');