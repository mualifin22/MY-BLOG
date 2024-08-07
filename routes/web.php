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
        'title' => "Post Categories",
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Author's Posts",
        'posts' => $author->posts,
        'author' => $author->name
    ]);
});
