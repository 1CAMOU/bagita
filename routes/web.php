<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::post('post/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth');

Route::post('newsletter', NewsletterController::class);

Route::get('admin/dashboard', [AdminController::class, 'index'])->middleware('admin');
Route::get('admin/post/create', [PostController::class, 'create'])->middleware('admin');
Route::post('admin/post', [PostController::class, 'store'])->middleware('admin');

require __DIR__ . '/auth.php';
