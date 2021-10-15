<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstallationController;

Route::get('/install', [InstallationController::class, 'index']);

Route::post('/install', [InstallationController::class, 'store'])->name('install');
