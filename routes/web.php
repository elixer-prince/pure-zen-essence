<?php

use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\Mail\InquiryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\Session\AdminController;
use App\Http\Controllers\Session\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// TODO: 1. Research to see why suggested form test or initial text is tinier. It might be due to there being a pseudoclass.

// FIXME: 2. Make it so that the mobile navbar only show the / link on the / page

Route::post("/mail", InquiryController::class);

/*** GUEST ROUTES */
Route::middleware("guest")->group(function () {
    // Landing Page
    Route::get("/", function () {
        $products = Product::paginate(6);

        return view("index", compact("products"));
    });

    // User Login
    Route::controller(UserController::class)->group(function () {
        Route::get("/login", "create")->name("login");
        Route::post("/login", "store");
    });

    // User Registration
    Route::controller(RegisteredUserController::class)->group(function () {
        Route::get("/register", "create");
        Route::post("/register", "store");
    });

    // Admin Login
    Route::get("/admin/login", [AdminController::class, "create"]);
    Route::post("/admin/login", [AdminController::class, "store"]);
});
// ->can("index"); // TODO: Change to admin perms or some other policy

/*** AUTHENTICATED USER ROUTES */
Route::middleware("auth")->group(function () {
    Route::delete("/session", [UserController::class, "destroy"]);

    Route::resource("products", ProductController::class)->only([
        "index",
        "show",
    ]);
});

/*** ADMIN ROUTES */
Route::prefix("admin")
    ->middleware(["auth", "admin"])
    ->group(function () {
        // Dashboard Index
        Route::get("/dashboard", function () {
            $products = Product::paginate(6);

            return view("dashboard.index", compact("products"));
        });

        // Dashboard Products
        Route::resource(
            "/dashboard/products",
            DashboardProductController::class,
        );
    });
