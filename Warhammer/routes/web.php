<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    // grab all data
    $all_posts = Post::all();
    // 'posts' can be accessed in the blade template
    return view('home', ['posts' => $all_posts]);
});

Route::post("/register", [UserController::class, 'register']);
Route::post("/logout", [UserController::class, 'logout']);
Route::post("/login", [UserController::class, 'login']);

Route::post('/create-post', [PostController::class, 'createPost']);
