<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user/pages/index');
    }
    public function about()
    {
        return view('user/pages/about');
    }
    public function blog()
    {
        return view('user/pages/blog');
    }
    public function blogDetails()
    {
        return view('user/pages/blogDetails');
    }
    public function cart()
    {
        return view('user/pages/cart');
    }
    public function checkout()
    {
        return view('user/pages/checkout');
    }
    public function contact()
    {
        return view('user/pages/contact');
    }
    public function faq()
    {
        return view('user/pages/faq');
    }
    public function productDetails()
    {
        return view('user/pages/productDetails');
    }
    public function products()
    {
        return view('user/pages/products');
    }
    public function trackOrder()
    {
        return view('user/pages/trackOrder');
    }
    public function userProfile()
    {
        return view('user/pages/userProfile');
    }
    public function wishlist()
    {
        return view('user/pages/wishlist');
    }
}