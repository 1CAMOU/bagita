<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::post('post/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth');

Route::post('newsletter', NewsletterController::class);

Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('admin');
Route::get('admin/posts', [AdminPostController::class, 'index']);
Route::get('admin/post/create', [AdminPostController::class, 'create'])->middleware('admin');
Route::post('admin/post', [AdminPostController::class, 'store'])->middleware('admin');

require __DIR__ . '/auth.php';
