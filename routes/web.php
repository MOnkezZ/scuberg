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
// 	return view('welcome');
// });

Route::get('/user', function () {
	return view('user');
});

Auth::routes();

Route::group(['middleware' => 'admin'], function () {


});

Route::get('/', 'ProductController@index')->name('home');
Route::post('/home', 'ProductController@index')->name('home');

Route::get('/users', 'HomeController@users')->name('users');

Route::get('/product', 'ProductController@product')->name('product');
Route::get('/productdetail/{id?}', 'ProductController@productdetail')->name('productdetail');
Route::get('/productup/{id?}', 'ProductController@productUp')->name('productup');
Route::post('/productsave', 'ProductController@productsave')->name('productsave');
Route::get('/productdel/{id}', 'ProductController@productDel')->name('productdel');

Route::get('/category/{id?}', 'ProductController@category')->name('category');
Route::post('/catesave', 'ProductController@catesave')->name('catesave');
Route::get('/catedel/{id}', 'ProductController@cateDel')->name('catedel');

Route::post('upload', 'ProductController@upload')->name('upload');