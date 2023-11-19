<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::latest(); // get postingan terbaru
        if(request('search')){ // jika ada search, tampilkan 'title like % search % atau 'body like % search %'
            $post = Post::where('title', 'like', '%'. request('search') .'%')
                    ->orWhere('body', 'like', '%'. request('search') .'%');
        }

        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            "postingan" => $post->get()
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
