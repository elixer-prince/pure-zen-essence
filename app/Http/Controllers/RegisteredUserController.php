<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration form.
     */
    public function create()
    {
        return view("auth.register");
    }

    /**
     * Handle the registration of a new user.
     */
    public function store(Request $request)
    {
        $validatedAttributes = $request->validate([
            "first_name" => "required|max:255",
            "last_name" => "required|max:255",
            "email" => "required|email|unique:users,email",
            "password" => [
                "required",
                Password::min(6)->letters()->numbers(),
                "confirmed",
            ],
        ]);

        $user = User::create($validatedAttributes);

        Auth::login($user);

        return redirect("/products");
    }
}
