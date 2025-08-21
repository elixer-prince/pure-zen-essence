<?php

use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\Mail\InquiryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\Session\AdminController as AdminSessionController;
use App\Http\Controllers\Session\UserController as UserSessionController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::post("/mail", InquiryController::class);

/*** GUEST ROUTES */
Route::middleware("guest")->group(function () {
    // Landing Page
    Route::get("/", function () {
        $products = Product::paginate(6);

        return view("index", compact("products"));
    });

    // Additional check for admin guest routes
    Route::middleware("admin.guest")->group(function () {
        // User Login
        Route::controller(UserSessionController::class)->group(function () {
            Route::get("/login", "create")->name("login");
            Route::post("/login", "store");

            // User Registration
            Route::controller(RegisteredUserController::class)->group(
                function () {
                    Route::get("/register", "create");
                    Route::post("/register", "store");
                },
            );

            // Admin Login
            Route::get("/admin/login", [
                AdminSessionController::class,
                "create",
            ]);
            Route::post("/admin/login", [
                AdminSessionController::class,
                "store",
            ]);
        });
    });
});

/*** AUTHENTICATED USER ROUTES */
Route::delete("/session", [
    UserSessionController::class,
    "destroy",
])->middleware("auth");

Route::middleware("auth:web,admin")->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get("/products", "index")->name("home");
        Route::get("/products/{product}", "show");
    });
});

/*** ADMIN ONLY ROUTES */
Route::prefix("admin")
    ->middleware(["admin"])
    ->group(function () {
        Route::delete("/session", [AdminSessionController::class, "destroy"]);

        // Dashboard Index
        Route::get("/dashboard", function () {
            $products = Product::paginate(6);
            $admin = auth()->guard("admin")->user();

            return view("dashboard.index", compact("products"));
        });

        // Dashboard Products
        Route::resource(
            "/dashboard/products",
            DashboardProductController::class,
        );
    });
