<?php

use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $products = Product::all();

    return view("index", [
        "products" => $products,
    ]);
});

Route::get("/dashboard", function () {
    $products = Product::all();

    return view("dashboard.index", [
        "products" => $products,
    ]);
});

Route::controller(SessionController::class)->group(function () {
    Route::get("/login", "create");
    Route::post("/login", "store");
    Route::delete("/session", "destroy");
});

Route::controller(RegisteredUserController::class)->group(function () {
    Route::get("/register", "create");
    Route::post("/register", "store");
});

Route::resource("products", ProductController::class, [
    "only" => ["index", "show"], // I might refactor this to a group in the future
]);

Route::resource("dashboard/products", DashboardProductController::class);
