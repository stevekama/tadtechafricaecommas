<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('pages.index');
    }

    public function shop()
    {
        # code...
        return view('pages.shop');
    }

    public function product_datails()
    {
        # code...
        return view('pages.product');
    }

    public function blog()
    {
        # code...
        return view('pages.blog');
    }

    public function contact()
    {
        # code...
        return view('pages.contact');
    }

    public function cart()
    {
        # code...
        return view('pages.cart');
    }

    public function wishlist()
    {
        # code...
        return view('pages.wishlist');
    }

    public function checkout()
    {
        # code...
        return view('pages.checkout');
    }
}
