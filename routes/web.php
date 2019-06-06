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
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/manage-import', function () {
    return view('pages.import');
})->name('manage-import');

Route::get('photos', 'PhotoController@index')->name('photos.index');
Route::get('photos/{id}/edit', 'PhotoController@edit')->name('photos.edit');
Route::post('photos/update/{photo}', 'PhotoController@update')->name('photos.update');


Route::get('import', 'ImportController@import')->name('import');
