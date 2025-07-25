<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view("dashboard.products.index");
    }

    public function create()
    {
        return view("dashboard.products.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            "image" => ["required"],
            "title" => ["required"],
            "description" => ["required"],
            "sizes" => ["required"],
        ]);

        Product::create([
            "image" => "https://someurl.com/image/seed/{{ rand(1, 100000) }}",
            "title" => request("title"),
            "description" => request("description"),
            "sizes" => ["name"],
        ]);

        return redirect("/dashboard");
    }

    public function edit(Product $product)
    {
        return view("dashboard.products.edit", [
            "product" => $product,
        ]);
    }

    public function update(Product $product, Request $request)
    {
        $request->validate([
            "image" => ["required"],
            "title" => ["required"],
            "description" => ["required"],
            "sizes" => [""],
        ]);

        $product->update([
            "title" => request("title"),
            "description" => request("description"),
        ]);

        return redirect("/");
    }

    public function destroy(Product $product)
    {
        // authorize the user (On hold...)

        $product->delete();

        return redirect("/");
    }
}
