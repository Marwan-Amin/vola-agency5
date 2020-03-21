<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function indexGrid()
    {
        return view('Products.productsGrid');
    }

    public function indexList()
    {
        return view('Products.productsList');
    }

    public function show()
    {
        return view('Products.showProduct');
    }

    public function create()
    {
        return view('Products.create');
    }
}
