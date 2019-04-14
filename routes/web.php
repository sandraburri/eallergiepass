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


// --------------------- backend ---------------------

Auth::routes();

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/care-provider/store', 'CareProviderController@store');

    Route::get('/affected/view/{id}', 'AffectedController@view');
    Route::get('/affected/items/{id}', 'AffectedController@items');

    Route::get('/affected/create', 'AffectedController@create');
    Route::get('/affected/search', 'AffectedController@search');
    Route::post('/affected/store', 'AffectedController@store');

    Route::get('/affectedItems/create', 'AffectedItemsController@create');
    Route::post('/affectedItems/store', 'AffectedItemsController@store');
    Route::get('/affectedItems/delete', 'AffectedItemsController@delete');

    Route::get('/pdf/{id}', 'PdfController@index');
    Route::get('/pdf/html/{id}', 'PdfController@html');

});
