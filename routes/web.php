<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::post('post/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth');

Route::post('newsletter', NewsletterController::class);

require __DIR__ . '/auth.php';
