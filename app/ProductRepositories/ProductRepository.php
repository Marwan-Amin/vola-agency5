<?php

namespace App\ProductRepositories;

use App\Product;
use App\ProductRepositories\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Util\PrioritizedList;

class ProductRepository implements ProductRepositoryInterface
{

    public function indexList()
    {
        $products = Product::all();

        return view('Products.productsList',[
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('Products.create');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('Products.edit', [
            'product' => $product
        ]);
    }

    public function update($id , Request $request)
    {
        $product = Product::findOrFail($id);

        Product::updateOrCreate([
            ['id' => $product->id ],
            ['name' => $request->name , 'description' => $request->description , 'price' => $request->price  ]
        ]);

        return view('Products.productsList');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id)->delete();
        return redirect()->route('productsList');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'description' =>$request->description,
            'price' => $request->price,
        ]);
        
        return redirect()->route('productsList');
    }
}
