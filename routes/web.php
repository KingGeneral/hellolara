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

/***

Home Controller

***/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

/***

Hello Controller

***/
/*
Route::get('/hello',function(){
	return 'Hello';
});

Route::get('/hello/controller','Hello@index'); //seek ctr hello
Route::get('/hello/{name}','Hello@show'); //goto hello/show
*/

/***

Front Controller

***/

Route::get('/', 'Front@index');

Route::get('/products', 'Front@products');
Route::get('/products/detail/{id}', 'Front@product_details');
Route::get('/products/categories', 'Front@product_categories');

Route::get('/blog', 'Front@blog');
Route::get('/blog/post', 'Front@blog_post');

Route::get('/contact-us', 'Front@contact_us');
Route::get('/login', 'Front@login');
Route::get('/logout', 'Front@logout');
Route::get('/cart', 'Front@cart');
Route::get('/checkout', 'Front@checkout');
Route::get('/search/{query}', 'Front@search');