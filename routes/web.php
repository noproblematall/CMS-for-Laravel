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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/activity', 'HomeController@activity')->name('activity');
Route::get('/inputdata', 'HomeController@inputdata')->name('inputdata');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/user', 'HomeController@user')->name('user');

Route::post('adduser', 'HomeController@adduser')->name('adduser');
Route::get('/useredit/{id}', 'HomeController@useredit')->name('useredit');
Route::post('/user_edit', 'HomeController@user_edit')->name('user_edit');
Route::get('/userdelete/{id}', 'HomeController@userdelete')->name('userdelete');

