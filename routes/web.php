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

//login logout auth routes
Route::get('auth/login', 'Front@login'); //displays the login and register
Route::post('auth/login', 'Front@authenticate'); //actual user authentication
Route::get('/logout', 'Front@logout');

//register
Route::post('/register', 'Front@register');

//carts
Route::get('/cart', 'Front@cart');
Route::get('/cart-remove/{id}', 'Front@remove_cart');
Route::get('/clear-cart', 'Front@remove_all_cart');

//make this protected only can be accessed after auth
// Route::get('/checkout', 'Front@checkout');
Route::get('/checkout', [
    'middleware'    => 'auth', //will check if a user is logged in, if not redirected to /auth/login page
    'uses'          => 'Front@checkout'
]);

//search
Route::get('/search/{query}', 'Front@search');

// auth start

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');


/***

Testing templates CRUD

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

    // idk why this in 5.4 cannot run
   	// App\Category::created(array('name' => 'Music'));

    $id = $category->insert(array(
                                'name'          => str_random(10),
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
    	echo '| '.$list->id.' - '.$list->name.' | <br/>';
    }
});

Route::get('/update/{id}', function($id) {
    //check id
    // $category = App\Category::find(1);
    $category = App\Category::find($id);

    //update name from $id
    $category->name          = 'Hello - updated'.$id;
    $category->updated_at_ip = Request::ip();
    $category->save(); //save

    //get all data from category
    $data = $category->all(array('name','id'));
    foreach ($data as $list) {
        echo '| '.$list->id.' - '.$list->name.' | <br/>';
    }
});

Route::get('/delete/{id}', function($id) {
    //check
    // $category = App\Category::find(1);
    $category = App\Category::find($id);
    $category->delete();

    //get all data from category
    $data = $category->all(array('name','id'));
    foreach ($data as $list) {
        echo '| '.$list->id.' - '.$list->name.' | <br/>';
    }
});

// to use this API v1
/*
    you need to use auth in line 81 and 82
    enable it, and register there
*/

//get all existing category
Route::get('/api/v1/categories/{id?}', [
    'middleware' => 'auth.basic',
    function($id = null) {
        //get categories
    if ($id == null) {
        $categories = App\Category::all(array('id', 'name', 'created_at_ip'));
    } else {
        $categories = App\Category::find($id, array('id', 'name', 'created_at_ip'));
    }
    return Response::json(array(
                'error' => false,
                'categories' => $categories,
                'status_code' => 200
            ));
    }
]);

//get all registered user API
Route::get('/api/v1/users/{id?}', [
    'middleware' => 'auth.basic',
    function($id = null) {
        //get users
    if ($id == null) {
        $users = App\User::all(array('id', 'name', 'email'));
    } else {
        $users = App\User::find($id, array('id', 'name', 'email'));
    }
    return Response::json(array(
                'error' => false,
                'users' => $users,
                'status_code' => 200
            ));
    }
]);