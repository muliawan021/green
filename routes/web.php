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

// // Route::get('/', function () {
// //     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/artikel',function(){
    return view('artikel');
});

Route::post('artikel/create','ArtikelController@create');
Route::get('artikel/view','ArtikelController@view');
Route::get('artikel/{id}/edit','ArtikelController@edit');
Route::post('artikel/{id}/update','ArtikelController@update');
Route::get('artikel/{id}/delete','ArtikelController@delete');


Route::get('/komentar',function(){
    return view('komentar');
});

Route::post('komentar/create','CommentsController@create');
Route::get('komentar/view','CommentsController@view');
Route::post('komentar/update','CommentsController@update');


Route::resource('artikel/json','ArtikelJsonController');