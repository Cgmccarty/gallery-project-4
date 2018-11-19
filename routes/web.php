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
    $artworks = \App\Artwork::get()->all();
    return view('home', compact('artworks'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/artworks', 'ArtworkController')->middleware('auth');
