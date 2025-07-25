<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $products = Product::paginate(6);

    return view("index", [
        "products" => $products,
    ]);
});

//? Login endpoints
Route::get("/login", function () {
    return view("auth.login");
});
Route::post("/login", function () {
    dd(request()->all());
});

//? Sign Up endpoints
Route::get("/signup", function () {
    return view("auth.signup");
});
Route::post("/signup", function () {
    dd(request()->all());
});

//? Products endpoints

//!========================================================================
//!----------------------DANGER ABOVE--------------------------------------
//!========================================================================

//? Dashboard Endpoints

// dashboard index
Route::get("/dashboard", function () {
    $products = Product::all();

    return view("dashboard.index", [
        "products" => $products,
    ]);
});

// dashboard products index
Route::get("/dashboard/products", function () {
    $products = Product::all();

    return view("dashboard.products.index", [
        "products" => $products,
    ]);
});

// maybe I'll add a show endpoint

// create product
Route::get("/dashboard/products/create", function () {
    return view("dashboard.products.create");
});

// post product
Route::post("/dashboard/products", function () {
    request()->validate([
        "image" => ["required"],
        "title" => ["required"],
        "description" => ["required"],
        "sizes" => [""],
    ]);

    Product::create([
        "image" => "https://someurl.com/image/seed/{{ rand(1, 100000) }}",
        "title" => request("title"),
        "description" => request("description"),
        "sizes" => ["name"],
    ]);

    return redirect("/dashboard");
});

// edit product
Route::get("/dashboard/product/{product}/edit", function (Product $product) {
    return view("dashboard.products.edit", [
        "product" => $product,
    ]);
});

// update product
Route::patch("/dashboard/product/{product}", function (Product $product) {
    request()->validate([
        "image" => ["required"],
        "title" => ["required"],
        "description" => ["required"],
        "sizes" => [""],
    ]);

    $product = Product::find($product);

    $product->title = request("title");
    $product->description = request("description");
    $product->save();

    Product::update([
        "title" => request("title"),
        "description" => request("description"),
    ]);

    redirect("/dashboard/products");
});

// destroy product
Route::delete("/dashboard/product/{product}", function (Product $product) {
    $product = Product::find($product);

    $product->delete();

    redirect("/dashboard/products");
});
