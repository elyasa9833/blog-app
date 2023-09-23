<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Amri Elyasa",
        "email" => "aelyasa@student.telkomuniversity.ac.id",
        "image" => "muka-kocheng.jpg"
    ]);
});

Route::get('/blog', function () {

    $postingan_aja = [
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
    return view('posts', [
        "title" => "Posts",
        "postingan" => $postingan_aja
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {

    $postingan_aja = [
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

    $post_baru = [];
    foreach ($postingan_aja as $value) {
        if($value["slug"] === $slug){
            $post_baru = $value;
        }
    }

    return view('post', [
        "title" => "Single post",
        "single_post" => $post_baru
    ]);
});
