<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

require __DIR__ . '/auth.php';

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('post/{post:slug}', [PostController::class, 'show']);
Route::post('post/{post:slug}/comments', [CommentController::class, 'store'])->middleware('auth');

Route::post('newsletter', NewsletterController::class);

// Admin Dashboard
Route::middleware('admin')->group(function () {
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index']);
    Route::resource('admin/posts', AdminPostController::class)->except('show');
});
