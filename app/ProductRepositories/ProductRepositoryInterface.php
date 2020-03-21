<?php

namespace App\ProductRepositories;


interface ProductRepositoryInterface
{
    public function indexGrid();
    public function indexList();
    public function show();
    public function create();
}