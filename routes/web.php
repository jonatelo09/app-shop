<?php
Route::get('/', 'TestController@welcome');
Route::get('/principaldos', 'TestController@welcomedos');
Route::get('/principal', 'TestController@principal');
Route::get('/admin/aspirant', 'AspirantController@index');
Route::post('/admin/aspirant', 'AspirantController@store');

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/search', 'SearchController@show');
Route::get('/products/json', 'SearchController@data');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/products-dos/{id}', 'ProductController@showdos');

Route::get('/categories/{category}', 'CategoryController@show');
Route::get('/categories-dos/{category}', 'CategoryController@showdos');

Route::post('/cart', 'CartDetailController@store');
Route::post('/cart/{id}/delete', 'CartDetailController@destroy');

Route::post('/order', 'CartController@update');

Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->group(function () {
	Route::get('/products', 'ProductController@index'); //listado
	Route::get('/products/create', 'ProductController@create'); //formulario
	Route::post('/products', 'ProductController@store'); //registrar
	Route::get('/products/{id}/edit', 'ProductController@edit'); //formulario edicion
	Route::post('/products/{id}/edit', 'ProductController@update'); //actualizar
	Route::post('/products/{id}/delete', 'ProductController@destroy'); // form eliminar

	Route::get('/products/{id}/images', 'ImageController@index'); // mostrar las imagenes de cada producto
	Route::post('/products/{id}/images', 'ImageController@store');
	Route::delete('/products/{id}/images', 'ImageController@destroy');
	Route::get('/products/{id}/images/select/{image}', 'ImageController@select');

	//rutas de categorias
	Route::get('/category', 'CategoryController@index'); //listado
	Route::get('/category/create', 'CategoryController@create'); //formulario
	Route::post('/category', 'CategoryController@store'); //registrar
	Route::get('/category/{id}/edit', 'CategoryController@edit'); //formulario edicion
	Route::post('/category/{id}/edit', 'CategoryController@update'); //actualizar
	Route::post('/category/{id}/delete', 'CategoryController@destroy'); // form eliminar

	// Route::post('/aspirant','AspirantController@store');
});

Route::get('payments', 'PaypalController@index');
Route::post('/payments/pay', 'PaymentController@pay')->name('pay');
Route::get('/payments/aprobada', 'PaymentController@aprobada')->name('aprobada');
Route::get('payments/cancelado', 'PaymentController@cancelado')->name('cancelado');
