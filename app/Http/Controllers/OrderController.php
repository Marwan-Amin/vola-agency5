<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderRepositories\OrderRepository;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct(Order $order)
    {
        $this->order = new OrderRepository($order);
    }

    public function index()
    {
        return $this->order->index();
    }

    public function invoice($id) 
    {
        return $this->order->invoice($id);
    }

    public function addItem($id)
    {
        return $this->order->addItem($id);
    }
}
