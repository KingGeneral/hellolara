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
    	return 'index';
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
    	return 'products';
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
    	return 'product_details';
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
    	return 'product_categories';
    }

    /**
     * product_brands function
     * Display product brands 
     *
     * @return 'product brands page'
     * @author ztm
     **/
    public function product_brands()
    {
    	return 'product_brands';
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
    	return 'blog';
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
    	return 'blog_post';
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
    	return 'contact_us';
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
    	return 'login';
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
    	return 'logout';
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
    	return 'cart';
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
    	return 'checkout';
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
    	return 'search';
    }

}
