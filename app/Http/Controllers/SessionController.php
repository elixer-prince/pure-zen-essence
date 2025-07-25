<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }

    public function store()
    {
        dd(request()->all());
        // validate the user input
        // log in the user
        // redirect to the landing page
    }
}
