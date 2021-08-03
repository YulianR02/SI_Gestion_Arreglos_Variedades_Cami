<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    //create views for user

    public function index()
    {
        $category = Category::where('front','YES')->with('subcategories')->firstOrFail();

        $productsCategory = Product::where('status','PUBLISHED')->whereHas('subcategory.category',function($query) use ($category){
            $query->where('id',$category->id);
        })->with('images')->get()->take(6);

        $productsFeatured =Product::where('status','PUBLISHED')->where('state',4)->with('images')->get()->take(6);

        $productsNew =Product::where('status','PUBLISHED')->orderBy('id','DESC')->with('images')->get()->take(6);

        $latestBlogs =Post::where('status','PUBLISHED')->orderBy('id','DESC')->with('image','user')->get()->take(5);

        $hotDeals =Product::where('status','PUBLISHED')->orderBy('previousPrice','DESC')->with('images')->get()->take(3);

        return view('web.index', compact('category','productsCategory','productsFeatured','productsNew','latestBlogs','hotDeals'));
    }

    public function notFound()
    {
        return view('web.404');
    }

    public function blogDetails()
    {
        return view('web.blog-details');
    }

    public function blog()
    {
        return view('web.blog');
    }

    public function category()
    {
        return view('web.category');
    }

    public function checkout()
    {
        return view('web.checkout');
    }

    public function contact()
    {

        return view('web.contact');

    }

    public function detail()
    {
        return view('web.detail');
    }

    public function faq()
    {
        return view('web.faq');
    }

    public function myWishlist()
    {
        return view('web.my-wishlist');
    }

    public function productComparison()
    {
        return view('web.product-comparison');
    }

    public function shoppingCart()
    {
        return view('web.shopping-cart');
    }

    public function signIn()
    {
        return view('web.sign-in');
    }

    public function termsConditions()
    {
        return view('web.terms-conditions');
    }

    public function trackOrders()
    {
        return view('web.track-orders');
    }

}
