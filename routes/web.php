<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::post('post/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth');

require __DIR__ . '/auth.php';
