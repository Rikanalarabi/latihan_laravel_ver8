<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/About', function () {
    return view('About', [
        "title" => "About",
        "Name" => "Rikan Al Arabi",
        "Email" => "Rikanalarabi8@gmail.com",
        "image" => "Rikan.jpg"
    ]);
});

Route::get('/Blog', function () {
    $Blog_posts = [
        [
        "Judul" => "Judul Artikel Pertama",
        "Slug" => "judul-artikel-pertama",
        "Pengarang" => "Rikan Al Arabi",
        "Body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vel aliquid tempora culpa necessitatibus ducimus, perspiciatis quia magnam saepe, distinctio delectus ea reiciendis, perferendis mollitia provident nemo aut obcaecati iusto."
        ],
        [
            "Judul" => "Judul Artikel Kedua",
            "Slug" => "judul-artikel-kedua",
            "Pengarang" => "Suenawati",
            "Body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ea distinctio eius, doloremque fugit eos laboriosam possimus accusantium dolore amet quam rerum soluta corporis vitae magnam maxime recusandae? Dicta temporibus, optio iure dolorem cupiditate odio eveniet nisi commodi ullam a corporis tempora voluptatem quisquam molestiae culpa placeat facilis eaque illum?"
        ]
    ];
    return view('Posts', [
        "title" => "Posts",
        "Posts" => $Blog_posts
    ]);
});

// membuat Single Post
Route::get('/Posts/{Slug}', function ($Slug) {
    $Blog_posts = [
        [
        "Judul" => "Judul Artikel Pertama",
        "Slug" => "judul-artikel-pertama",
        "Pengarang" => "Rikan Al Arabi",
        "Body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vel aliquid tempora culpa necessitatibus ducimus, perspiciatis quia magnam saepe, distinctio delectus ea reiciendis, perferendis mollitia provident nemo aut obcaecati iusto."
        ],
        [
            "Judul" => "Judul Artikel Kedua",
            "Slug" => "judul-artikel-kedua",
            "Pengarang" => "Suenawati",
            "Body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ea distinctio eius, doloremque fugit eos laboriosam possimus accusantium dolore amet quam rerum soluta corporis vitae magnam maxime recusandae? Dicta temporibus, optio iure dolorem cupiditate odio eveniet nisi commodi ullam a corporis tempora voluptatem quisquam molestiae culpa placeat facilis eaque illum?"
        ]
    ];

    $new_post= [];
    foreach ($Blog_posts as $post){
        if($post["Slug"] === $Slug){
            $new_post = $post;
        }
    }
    return view('Post', [
        "title" => "Single Posts",
        "post" => $new_post
    ]);
});