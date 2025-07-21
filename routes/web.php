<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $products = Product::all();

    return view("index", [
        "products" => $products,
    ]);
});

Route::get("/login", function () {
    return view("auth.login");
});
Route::post("/login", function () {
    dd(["Logging in...", request()->name]);
});

Route::get("/signup", function () {
    return view("auth.signup");
});
Route::post("/signup", function () {
    dd("Signing up...");
});
