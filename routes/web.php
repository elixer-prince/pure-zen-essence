<?php

use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $products = Product::paginate(6);

    return view("index", [
        "products" => $products,
    ]);
});

Route::controller(SessionController::class)->group(function () {
    Route::get("/login", "create");
    Route::post("/login", "store");
});

Route::controller(RegisteredUserController::class)->group(function () {
    Route::get("/signup", "create");
    Route::post("/signup", "store");
});

Route::get("/dashboard", function () {
    $products = Product::all();

    return view("dashboard.index", [
        "products" => $products,
    ]);
});

Route::resource("dashboard/products", DashboardProductController::class);
