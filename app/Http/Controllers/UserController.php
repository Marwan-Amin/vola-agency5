<?php

namespace App\Http\Controllers;

use App\ProductRepositories\UserRepository;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = new UserRepository($user);
    }

    public function index()
    {
        return $this->user->index();
    }
}
