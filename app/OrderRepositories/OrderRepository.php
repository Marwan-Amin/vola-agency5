<?php

namespace App\OrderRepositories;

use App\OrderRepositories\OrderRepositoryInterface;


class OrderRepository implements OrderRepositoryInterface
{
    public function index()
    {
        return view('home');
    }
}
