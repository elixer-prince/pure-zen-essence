<?php

use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;
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

Route::controller(DashboardProductController::class)->group(function () {
    Route::get("/dashboard/products", "index");
    Route::get("/dashboard/products/create", "create");
    Route::post("/dashboard/products", "store");
    Route::get("/dashboard/product/{product}/edit", "edit");
    Route::patch("/dashboard/product/{product}", "update");
    Route::delete("/dashboard/product/{product}", "destroy");
});
