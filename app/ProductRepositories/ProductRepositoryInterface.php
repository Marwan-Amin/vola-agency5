<?php

namespace App\ProductRepositories;

use Illuminate\Http\Request;

interface ProductRepositoryInterface
{
    public function indexList();
    public function create();
    public function store(Request $request);
    public function edit($id);
    public function update($id, Request $request);
    public function destroy($id);
}