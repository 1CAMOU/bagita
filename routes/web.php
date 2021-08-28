<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // Find all posts in posts folder and pass an array of Post objects to the "posts" view
    return view('posts', ['posts' => Post::all()]);
});

Route::get('/post/{post}', function ($slug) {
    // Find a post by its slug and pass it to a view called "post"
    return view('post', ['post' => Post::find($slug)]);
});
