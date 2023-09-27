<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

    return view('posts', [
        "title" => "Posts",
        "postingan" => Post::all()
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {

    return view('post', [
        "title" => "Single post",
        "single_post" => Post::find($slug)
    ]);
});
