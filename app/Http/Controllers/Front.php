<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Front extends Controller
{	
	/**
     * index function
     * Display home page
     *
     * @return 'index page'
     * @author ztm
     **/
    public function index()
    {
    	// return 'index';
        return view('page.home', array('page' => 'home'));
    }

    /**
     * products function
     * Display products page
     * 
     * @return 'products page'
     * @author ztm
     **/
    public function products()
    {
    	// return 'products';
        return view('page.products', array('page' => 'products'));
    }

    /**
     * product_details function
     * Display product detailed based on product id
     *
     * @return 'product details page'
     * @author ztm
     **/
    public function product_details($id)
    {
    	// return 'product_details';
        return view('page.product_details', array('page' => 'products'));
    }

    /**
     * product_categories function
     * Display product categories
     * 
     * @return 'product categories page'
     * @author ztm
     **/
    public function product_categories()
    {
    	// return 'product_categories';
        return view('page.product_categories', array('page' => 'products'));
    }

    /**
     * product_brands function
     * Display product brands 
     *
     * @return 'product brands page'
     * @author ztm
     **/
    public function product_brands($name, $category = null)
    {
    	// return 'product_brands';
        return view('page.product_brands', array('page' => 'products'));
    }

    /**
     * blog function
     * Display blog postings list
     *
     * @return 'blog page'
     * @author ztm
     **/
    public function blog()
    {
    	// return 'blog';
        return view('page.blog', array('page' => 'blog'));
    }

    /**
     * blog_post function
     * Display blog post content
     *
     * @return 'blog post page'
     * @author ztm
     **/
    public function blog_post($id)
    {
    	// return 'blog_post';
        return view('page.blog_post', array('page' => 'blog'));
    }

    /**
     * contact_us function
     * Display contact us page
     *
     * @return 'contact us page'
     * @author ztm
     **/
    public function contact_us()
    {
    	// return 'contact_us';
        return view('page.contact_us', array('page' => 'contact_us'));
    }

    /**
     * login function
     * Login user
     *
     * @return 'login page'
     * @author ztm
     **/
    public function login()
    {
    	// return 'login';
        return view('page.login', array('page' => 'home'));
    }

    /**
     * logout function
     * Logout user 
     *
     * @return 'logout page'
     * @author ztm
     **/
    public function logout()
    {
    	// return 'logout';
        return view('page.login', array('page' => 'home'));
    }

    /**
     * cart function
     * Display cart contents
     *
     * @return 'cart page'
     * @author ztm
     **/
    public function cart()
    {
    	// return 'cart';
        return view('page.cart', array('page' => 'home'));
    }

    /**
     * checkout function
     * Checkout shopper
     *
     * @return 'checkout page'
     * @author ztm
     **/
    public function checkout()
    {
    	// return 'checkout';
        return view('page.checkout', array('page' => 'home'));
    }

    /**
     * search function
     * Display search results
     *
     * @return 'query search page'
     * @author ztm
     **/
    public function search($query)
    {
    	// return 'search';
        return view('page.products', array('page' => 'products'));
    }

}
