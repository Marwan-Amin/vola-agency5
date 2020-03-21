<?php

namespace App\ProductRepositories;

use App\UserRepositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function index()
    {
        return view('home');
    }
}
