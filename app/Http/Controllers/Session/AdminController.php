<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    /**
     * Show the admin login form.
     */
    public function create()
    {
        return view("auth.admin-login");
    }

    /**
     * Create an admin session;
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if (!Auth::guard("admin")->attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                "email" => "The provided credentials do not match our records.",
            ]);
        }

        $request->session()->regenerate();

        return redirect("/admin/dashboard");
    }

    public function destroy()
    {
        Auth::guard("admin")->logout();

        return redirect("/");
    }
}
