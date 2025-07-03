<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ravi",
        "email" => "ravi@gmail.com",
        "image" => "rc.png",
        
    ]);
});



Route::get('/blog', function () {

$blog_posts = [

];


    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {

return view('post', [
"title" => "Single Post",
"post" => Post::find($slug)
]);
});