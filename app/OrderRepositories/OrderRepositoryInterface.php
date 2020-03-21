<?php

namespace App\OrderRepositories;


interface OrderRepositoryInterface
{
    public function index();
    public function addItem($id); 
    public function invoice($id);  
}