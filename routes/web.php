<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    return view('posts', ['posts' => Post::all()]);
    // return view('welcome');
});
Route::get('/posts', function () {
    return view('posts');
});
Route::get('/post/{post:slug}', function (Post $post) {
    // $post = Post::where('slug', $slug)->first();
    // $postContent = Postsample::find($slug);
    // dump($postContent);
    return view('post', ['post' => $post]);
});
