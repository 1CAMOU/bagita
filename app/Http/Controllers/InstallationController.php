<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallationController extends Controller
{
    public function index()
    {
        if (config('bagita.installation_step') != -1) {
            return view('installer.setup');
        } else {
            return redirect('/');
        }
    }

    public function store()
    {
        echo 'test';
    }
}
