<?php

Route::get('/', 'HomeController@index')->name('dashboard');
Route::get('/author/data', 'DataController@authors')->name('author.data');
Route::get('/product/data', 'DataController@products')->name('product.data');
Route::get('/rent/data', 'DataController@rents')->name('rent.data');

Route::resource('author', 'AuthorController');
Route::resource('product', 'ProductController');

Route::resource('rent', 'RentController'); 

Route::get('rent', 'RentController@index')->name('rent.index');
Route::put('rent/{rentHistory}/return', 'RentController@returnP')->name('rent.return');


// Route::get('/author', 'AuthorController@index')->name('author.index');
// Route::get('/author/create', 'AuthorController@create')->name('author.create');
// Route::post('/author', 'AuthorController@store')->name('author.store');
// Route::get('/author/{author}/edit', 'AuthorController@edit')->name('author.edit');
// Route::put('/author/{author}', 'AuthorController@update')->name('author.update');
// Route::delete('/author/{author}', 'AuthorController@destroy')->name('author.destroy');


// 