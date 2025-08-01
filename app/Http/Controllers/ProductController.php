<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::paginate(6);

        return view("products.index", compact("products"));
    }

    /**
     * Show a specific product.
     */
    public function show(Product $product)
    {
        return view("products.show", compact("product"));
    }
}
