<?php

namespace App\ProductRepositories;

use App\ProductRepositories\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
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
