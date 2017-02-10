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

Route::get('/', 'PostController@list')->name('home');
Route::get('/add/post', function(){
  return view('message.add');
});
Route::post('/add/post', 'PostController@addPost');

Route::get('/show/{id}', 'PostController@cryptList');
