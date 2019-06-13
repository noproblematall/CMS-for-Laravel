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
Route::get('/setting', 'HomeController@setting')->name('setting');
Route::post('/setting','HomeController@user_setting')->name('user_setting');

// Data processing
Route::get('/inputdata', 'DataEdit@index')->name('inputdata');
Route::get('/input_product','DataEdit@input_product')->name('input_product');
Route::post('product_add','DataEdit@product_add')->name('product_add');
Route::get('/productedit/{id}','DataEdit@product_edit')->name('product_edit');
Route::get('/product_delete/{id}','DataEdit@product_delete')->name('product_delete');
Route::post('/productchange','DataEdit@product_change')->name('product_change');
// Activity
Route::get('/activity', 'ActivityController@index')->name('activity');

// Route For Only SuperAdmin
Route::group([
    'middleware' => 'super',
    'prefix' => 'super'
], function ($router) {
    Route::get('/user', 'HomeController@user')->name('user');
    Route::post('adduser', 'HomeController@adduser')->name('adduser');
    Route::get('/useredit/{id}', 'HomeController@useredit')->name('useredit');
    Route::post('/user_edit', 'HomeController@user_edit')->name('user_edit');
    Route::get('/userdelete/{id}', 'HomeController@userdelete')->name('userdelete');

    // Search
    Route::get('/search', 'DataEdit@search')->name('search');
    Route::post('/admin_search', 'DataEdit@admin_search')->name('admin_search');
    Route::post('/category_search','DataEdit@category_search')->name('category_search');
    Route::get('/core_search','DataEdit@core_search')->name('core_search');
});

// Route For User
// Route::get('/userinput', 'DataEdit@user_inputdata')->name('user.inputdata');
