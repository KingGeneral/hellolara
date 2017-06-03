<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// imports the App namespace
use App\Brand;
use App\Category;
use App\Product;

class Front extends Controller
{	

    // common data to all the pages
    var $brands;
    var $categories;
    var $products;

    // title and meta description for search engine optimization
    var $title;
    var $description;

    /**
     * Construct
     * @author ztm
     **/
    public function __construct() {
        $this->brands = Brand::all(array('name'));
        $this->categories = Category::all(array('name'));
        $this->products = Product::all(array('id','name','price'));
    }

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
        return view(
            'page.home', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'home',
                  'brands'      => $this->brands, 
                  'categories'  => $this->categories, 
                  'products'    => $this->products
            )
        );
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
        return view(
            'page.products', 
            array(
                'title'         => 'Products Listing',
                'description'   => '',
                'page'          => 'products', 
                'brands'        => $this->brands, 
                'categories'    => $this->categories, 
                'products'      => $this->products
            )
        );
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
        return view(
            'page.product_details', 
            array('product'     => $product, 
                  'title'       => $product->name,
                  'description' => '',
                  'page'        => 'products', 
                  'brands'      => $this->brands, 
                  'categories'  => $this->categories, 
                  'products'    => $this->products
            )
        );
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
        return view(
            'page.product_categories', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'products', 
                  'brands'      => $this->brands, 
                  'categories'  => $this->categories, 
                  'products'    => $this->products
            )
        );
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
        return view(
            'page.product_brands', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'products', 
                  'brands'      => $this->brands, 
                  'categories'  => $this->categories, 
                  'products'    => $this->products
            )
        );
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
        return view(
            'page.blog', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'blog', 
                  'brands'      => $this->brands, 
                  'categories'  => $this->categories, 
                  'products'    => $this->products
            )
        );
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
        return view(
            'page.blog_post', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'blog', 
                  'brands'      => $this->brands, 
                  'categories'  => $this->categories, 
                  'products'    => $this->products
            )
        );
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
        return view(
            'page.contact_us', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'contact_us'
            )
        );
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
        return view(
            'page.login', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'home'
            )
        );
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
        return view(
            'page.login', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'home'
            )
        );
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
        return view(
            'page.cart', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'home'
            )
        );
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
        return view(
            'page.checkout', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'home'
            )
        );
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
        return view(
            'page.products', 
            array('title'       => 'Welcome',
                  'description' => '',
                  'page'        => 'products'
            )
        );
    }

}
