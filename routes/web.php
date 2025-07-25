<?php

use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\RegisterUserController;
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

Route::controller(DashboardProductController::class)->group(function () {
    Route::get("/dashboard/products", "index");
    Route::get("/dashboard/products/create", "create");
    Route::post("/dashboard/products", "store");
    Route::get("/dashboard/product/{product}/edit", "edit");
    Route::patch("/dashboard/product/{product}", "update");
    Route::delete("/dashboard/product/{product}", "destroy");
});
