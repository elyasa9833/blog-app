<?php

namespace App\Models;

class Post
{
    private static $postingan_aja = [
        [
            "title" => "Judul post pertama",
            "slug" => "post-pertama",
            "author" => "Will Smith",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A laudantium sint doloribus voluptates iste qui labore hic fuga dolore recusandae."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "post-kedua",
            "author" => "james Bond",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A laudantium sint doloribus voluptates iste qui labore hic fuga dolore recusandae. sama aja sih."
        ]
    ];

    public static function all()
    {
        return collect(self::$postingan_aja);
    }

    public static function find($slug)
    {
        $all_post = static::all();
        return $all_post->firstWhere('slug', $slug);
    }
}
