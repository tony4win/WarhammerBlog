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

Route::get('/', function(){
    $all_posts = Post::where('user_id', auth()->id())->get();
    return view('home', ['posts' => $all_posts]);
}) -> name('home');

Route::post("/register", [UserController::class, 'register']);
Route::post("/logout", [UserController::class, 'logout']);
Route::post("/login", [UserController::class, 'login']);
Route::get("/register_page", [UserController::class, 'getRegisterPage']);

Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit_post/{post}',[PostController::class, 'editPost']);
Route::put('/edit_post/{post}',[PostController::class, 'updatePost']);
Route::delete('/delete_post/{post}',[PostController::class, 'deletePost']);

