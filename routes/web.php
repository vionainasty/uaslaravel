<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Ravi",
        "email" => "ravi@gmail.com",
        "image" => "rc.png"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});