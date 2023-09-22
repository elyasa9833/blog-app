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
            "author" => "Will Smith",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A laudantium sint doloribus voluptates iste qui labore hic fuga dolore recusandae."
        ],
        [
            "title" => "Judul post kedua",
            "author" => "james Bond",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A laudantium sint doloribus voluptates iste qui labore hic fuga dolore recusandae. sama aja sih."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "postingan" => $postingan_aja
    ]);
});

