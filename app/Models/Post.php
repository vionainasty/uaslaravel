<?php

namespace App\Models;

class Post
{
private static $blog_posts = [
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
    ]
];

public static function all()
{
    return collect(self::$blog_posts);

}
public static function find($slug)
{
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
    }
}