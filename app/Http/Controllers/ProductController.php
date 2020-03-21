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

    public function indexList()
    {
        return $this->product->indexList();
    }
    
    public function create()
    {
        return $this->product->create();
    }

    public function store(Request $request)
    {
        return $this->product->store($request);
    }

    public function edit($id)
    {
        return $this->product->edit($id);
    }

    public function destroy($id)
    {
        return $this->product->destroy($id);
    }
    
}
