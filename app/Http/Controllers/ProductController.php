<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('products');
    }

    public function single_products(){
        return view('single_product');
    }
}
