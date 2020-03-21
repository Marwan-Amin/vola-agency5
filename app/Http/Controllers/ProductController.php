<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductRepositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = new ProductRepository($product);
    }

    public function indexGrid()
    {
        return $this->product->indexGrid();
    }

    public function indexList()
    {
        return $this->product->indexList();
    }

    public function show()
    {
        return $this->product->show();
    }

    public function create()
    {
        return $this->product->create();
    }
}
