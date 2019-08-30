<?php
Route::get('/','TestController@welcome');
Route::post('/admin/aspirant','AspirantController@store');

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/search','SearchController@show');
Route::get('/products/json','SearchController@data');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}','ProductController@show');
Route::get('/categories/{category}','CategoryController@show');

Route::post('/cart', 'CartDetailController@store');
Route::post('/cart/{id}/delete', 'CartDetailController@destroy');

Route::post('/order', 'CartController@update');

Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/products','ProductController@index');//listado
    Route::get('/products/create','ProductController@create'); //formulario
    Route::post('/products','ProductController@store'); //registrar
    Route::get('/products/{id}/edit','ProductController@edit'); //formulario edicion
    Route::post('/products/{id}/edit','ProductController@update'); //actualizar
    Route::post('/products/{id}/delete','ProductController@destroy'); // form eliminar

    Route::get('/products/{id}/images', 'ImageController@index'); // mostrar las imagenes de cada producto
    Route::post('/products/{id}/images','ImageController@store');
    Route::delete('/products/{id}/images', 'ImageController@destroy');
    Route::get('/products/{id}/images/select/{image}', 'ImageController@select');


    //rutas de categorias
    Route::get('/category','CategoryController@index');//listado
    Route::get('/category/create','CategoryController@create'); //formulario
    Route::post('/category','CategoryController@store'); //registrar
    Route::get('/category/{id}/edit','CategoryController@edit'); //formulario edicion
    Route::post('/category/{id}/edit','CategoryController@update'); //actualizar
    Route::post('/category/{id}/delete','CategoryController@destroy'); // form eliminar

    Route::post('/aspirant','AspirantController@store');
});



Route::get('/admin/products/prueba','ProductController@prueba');

