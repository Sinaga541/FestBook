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


Route::get('/', 'Frontend\\productController@index')->name('homepage');
Route::get('/product/{product}', 'Frontend\\packageController@show')->name('product.show');
Route::post('/product/{product}/rent', 'Frontend\\packageController@rent')->name('product.rent')->middleware('auth');


Route::get('/package', 'Frontend\\packageController@index')->name('packagepage');
// Route::get('/package', function () {
//     return view('register');
// });
Route::get('/customize', 'Frontend\\customizeController@index')->name('customizepage');
// Route::get('/customize', function () {
//     return view('customize');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
