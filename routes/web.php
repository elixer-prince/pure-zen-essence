<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $products = Product::paginate(6);

    return view("index", [
        "products" => $products,
    ]);
});

// Login endpoints
Route::get("/login", function () {
    return view("auth.login");
});
Route::post("/login", function () {
    dd(request()->all());
});

// Sign Up endpoints
Route::get("/signup", function () {
    return view("auth.signup");
});
Route::post("/signup", function () {
    dd("Signing up...");
});
