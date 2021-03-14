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
}
