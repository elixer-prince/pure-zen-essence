<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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
        return view("auth.admin.login");
    }

    /**
     * Create an admin session;
     */
    public function store(Request $request)
    {
        // TODO: Research how to check if an email belongs to a user
        $validatedAttributes = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if (!Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                "email" => "The provided credentials do not match.",
            ]);
        }

        $request->session()->regenerate();

        return redirect("/admin/dashboard");
    }

    public function destroy(Admin $admin)
    {
        // TODO: Check how to auth a specific class
        Auth::logout();

        return redirect("/");
    }
}
