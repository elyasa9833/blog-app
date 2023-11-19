<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            "postingan" => Post::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
