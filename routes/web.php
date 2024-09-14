<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');
