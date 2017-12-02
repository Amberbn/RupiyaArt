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

Route::get('default', function () {
    return view('templates.default');
});

Route::get('image.upload', function () {
    return view('admin.uploads.upload');
});

/*--------------------------------------------------------------------
ROUTE PRODUCTS
---------------------------------------------------------------------*/
Route::get('show','ProductController@index');
Route::get('create','ProductController@create');
Route::post('create','ProductController@store')->name('saveProduct');

Route::get('{id}/edit','ProductController@edit')->name('editProduct');
Route::patch('{id}/edit','ProductController@update')->name('updateProduct');

Route::get('{id}/detail','ProductController@show')->name('detaiProduct');

Route::get('{id}/delete','ProductController@destroy')->name('deleteProduct');
Route::delete('{id}/delete','ProductController@remove')->name('deleteProducts');
/*-------------------------------------------------------------------------
END ROUTE PRODUCT
-----------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------
ROUTE CATEGORIES
-----------------------------------------------------------------------------*/
Route::get('category.show','CategoryController@index');
Route::get('category.create','CategoryController@create');
Route::post('category.create','CategoryController@store')->name('category.saveCategory');
Route::get('{id}/category.detail','CategoryController@show')->name('category.detailCategory');
//Route::get('{id}/category.detail','CategoryController@show')->name('category.detailCategory');

/*-------------------------------------------------------------------------
END ROUTE CATEGORIES
-----------------------------------------------------------------------------*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
