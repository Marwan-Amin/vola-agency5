<?php

namespace App\ProductRepositories;

use App\ProductRepositories\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function index()
    {
        return view('home');
    }
}
