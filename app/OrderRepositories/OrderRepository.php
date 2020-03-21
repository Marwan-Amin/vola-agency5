<?php

namespace App\OrderRepositories;

use App\Order;
use App\OrderRepositories\OrderRepositoryInterface;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class OrderRepository implements OrderRepositoryInterface
{
    

    public function index()
    {
        $allOrders = Order::all();
       
        return view('Orders.orders',[
            'orders' => $allOrders
        ]);
    }

    public function addItem($id)
    {
        $product = Product::find($id);

        Order::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id
        ]);

        return redirect()->route('productsList');
    }

    public function invoice($id)
    {
        $user = User::findOrFail($id);
        $date = Carbon::now()->toDateString();

        return view('Orders.invoice',[
            "orders" => $user->orders,
            "date" => $date
        ]);
    }
}
