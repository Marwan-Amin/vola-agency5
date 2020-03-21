<?php

namespace App\ProductRepositories;

use App\User;
use App\UserRepositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function index()
    {
        $allBuyers = User::all();
        return view('Buyers.buyers',[
            'allBuyers' => $allBuyers
        ]);
    }
}