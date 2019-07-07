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

//Migracion de Proyecto

Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/{product}', 'CategoryController@show')->name('category.show');

Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/product/{id}/addtocart', 'CartController@store')->middleware('auth');
Route::get('/cart', 'CartController@index')->middleware('auth');
Route::post('/cart/{id}', 'CartController@destroy')->middleware('auth');
Route::get('/cart/close', 'CartController@closeCart')->middleware('auth');
Route::get('/history', 'CartController@history')->middleware('auth');
Route::get('/thanks', function(){
  view('thanks')->middleware('auth');
});



Route::get('/', function (){
  return view('home');
});
