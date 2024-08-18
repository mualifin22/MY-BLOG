<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', [
        'title' => "Home",
        'active' => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About",
        'active' => "about",
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
        'active' => "categories",
        'categories' => Category::all(),
    ]);
});

// route login
Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);
