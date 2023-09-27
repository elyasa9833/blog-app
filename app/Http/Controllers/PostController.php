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
            "postingan" => Post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single post",
            "single_post" => Post::find($slug)
        ]);
    }
}
