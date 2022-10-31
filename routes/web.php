<?php

use App\Models\Post;
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
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adinata Kusuma Wardani",
        "email" => "adinata2862@gmail.com",
        "image" => "adinata.jpeg", 
        "npm" => "203040158"
    ]);
});


Route::get('/posts', function () {

    return view('posts',[
        "title" => "Posts",
        "Posts" => Post::all()
    ]);

});