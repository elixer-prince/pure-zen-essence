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

Route::get("/login", [SessionController::class, "create"]);
Route::post("/login", [SessionController::class, "store"]);

Route::get("/signup", [RegisterUserController::class, "create"]);
Route::post("/signup", [RegisterUserController::class, "store"]);

Route::get("/dashboard", function () {
    $products = Product::all();

    return view("dashboard.index", [
        "products" => $products,
    ]);
});

Route::resource("dashboard/products", DashboardProductController::class);
