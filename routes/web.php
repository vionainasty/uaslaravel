<?php

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
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ravi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque. Lorem ipsum 
        dolor sit amet consectetur adipisicing elit. Doloribus, cumque. Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Doloribus, cumque."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Rangga",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore dicta porro tenetur 
        quas eos labore quis nostrum suscipit ratione omnis?"
    ],
];


    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {

$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ravi",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, cumque. Lorem ipsum 
        dolor sit amet consectetur adipisicing elit. Doloribus, cumque. Lorem ipsum dolor sit amet consectetur 
        adipisicing elit. Doloribus, cumque."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Rangga",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore dicta porro tenetur 
        quas eos labore quis nostrum suscipit ratione omnis?"
    ],
];

$new_post = [];
foreach($blog_posts as $post) {
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}

return view('post', [
"title" => "Single Post",
"post" => $new_post
]);
});