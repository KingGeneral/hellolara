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

/***

Testing templates

***/

Route::get('blade', function() {
    // return view('page');
    $drinks = array('Wine','Beer','Vodka');
	return view('page',array('name' 	=> 'KingGeneral was here',
							 'day'		=> 'Saturday',
							 'drinks'	=> $drinks));
});

Route::get('/insert', function() {
    
    $category = new App\Category();

   	// App\Category::created(array('name' => 'Music'));
    $id = $category->insert(array(
                                'name'          => str_random(10),
                                // 'created_at'    => NULL,
                                // 'updated_at'    => time(),
                                'created_at_ip' => Request::ip(),
                                'updated_at_ip' => ''
                                ));

    if($id){
        return 'category added success inserted';
    }else{
        return 'failed to insert';
    }
});

Route::get('/read', function() {
    $category = new App\Category();

    $data = $category->all(array('name','id'));

    //dd($data);

    foreach ($data as $list) {
    	echo $list->id.' - '.$list->name.' | <br/>';
    }
});