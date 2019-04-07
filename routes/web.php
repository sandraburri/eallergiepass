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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/care-provider/store', 'CareProviderController@store');

Route::get('/affected/{id}', 'AffectedController@view');
Route::get('/search', 'AffectedController@search');
Route::post('/affected/store', 'AffectedController@store');
Route::post('/affectedItems/store', 'AffectedItemsController@store');
