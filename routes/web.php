<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('home', [
        'title' => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'name' => "Muhammad Ibnu Mualifin",
        'email' => "mimualifin22@gmail.com",
        // 'image' => "mualifin.jpg",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => "Categories",
        'categories' => Category::all(),
    ]);
});
