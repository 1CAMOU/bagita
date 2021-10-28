<?php

namespace App\Http\Controllers;

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
        config(['database.connections.mysql.host' => request('host')]);
        config(['database.connections.mysql.database' => request('database')]);
        config(['database.connections.mysql.password' => request('password')]);
        config(['database.connections.mysql.username' => request('username')]);

        config(['bagita.installation_step' => 2]);

       /*
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=bagita
        DB_USERNAME=root
        DB_PASSWORD=
       */

        putenv('DB_HOST=' . request('host'));

        return back()->with('toast', 'Step ' . config('bagita.installation_step'));
    }
}
