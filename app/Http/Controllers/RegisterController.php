<?php

namespace App\Http\Controllers;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
}
