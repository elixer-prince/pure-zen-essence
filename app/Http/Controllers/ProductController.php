<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view("products.index");
    }

    public function show(Product $product)
    {
        return view("products.show");
    }
}
