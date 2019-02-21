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

Route::get('/', 'PageController@viewHome');
Route::get('/contact', 'PageController@viewContact');
Route::get('/catalogue', 'PageController@viewCatalogue');
//Route::get('/product', 'PageController@viewProduct');
Route::get('/product/{id}', 'PageController@viewProduct');
Route::get('/basket', 'PageController@viewBasket');
//
//Route::get('/contact', function () {
//    return view('contact');
//});
//
//
//Route::get('/basket', function () {
//    return view('basket');
//});
//
//
//Route::get('/product', function () {
//    return view('product');
//});
//
//
//Route::get('/catalogue', function () {
//    return view('catalogue');
//});
