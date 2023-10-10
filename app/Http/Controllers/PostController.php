<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "postingan" => Post::latest()->get() // get postingan terbaru
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single post",
            "post" => $post
        ]);
    }
}
