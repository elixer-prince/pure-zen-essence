<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

/**
 * Handles user session management, including login and logout.
 */
class UserController extends Controller
{
    /**
     * Displays the login form.
     */
    public function create()
    {
        return view("auth.login");
    }

    /**
     * Handles the login request.
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if (!Auth::attempt($validatedAttributes)) {
            throw ValidationException::withMessages([
                "validation" => "The provided credentials do not match.",
            ]);
        }

        $request->session()->regenerate();

        return redirect("/products");
    }

    /**
     * Handles the logout request.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect("/");
    }
}
