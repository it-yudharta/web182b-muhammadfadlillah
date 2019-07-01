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

Route::get('/hape', 'SantriBaruController@index');
Route::get('/hape/tambah', 'SantriBaruController@tambah');
Route::get('/hape/store', 'SantriBaruController@store');
Route::get('/hape/{id}/edit', 'SantriBaruController@edit');
Route::get('/hape/{id}/update', 'SantriBaruController@update');
Route::get('/hape/{id}/hapus', 'SantriBaruController@destroy');
