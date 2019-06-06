<?php

/*
 *      Routes
 */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manage-import', function () {
    return view('pages.import');
})->name('manage-import');

/**
 *      PHOTOS
 */
Route::get('photos', 'PhotoController@index')->name('photos.index');
Route::get('photos/{id}/edit', 'PhotoController@edit')->name('photos.edit');
Route::post('photos/update/{photo}', 'PhotoController@update')->name('photos.update');


/**
 *      IMPORT
 */
Route::get('import', 'ImportController@import')->name('import');

/*
 *      ALBUM
 */
Route::get('album', 'AlbumController@create')->name('album.create');
Route::post('album', 'AlbumController@store')->name('album.store');
