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


Route::get('/blog', function () {
    $blog_posts = [
        [
    
            "title" => "Judul Post Pertama",
            "author" => "Adinata Kusuma Wardani",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quisquam ad laboriosam ullam veniam molestias ipsam, impedit debitis? Libero accusantium reprehenderit quas? 
            Architecto sed impedit voluptatibus odit labore facere. Mollitia commodi similique asperiores aliquam dignissimos cum quia nesciunt! Praesentium cum quidem laudantium nemo facilis quos fugit sint. 
            Distinctio, ullam. Cumque blanditiis repudiandae voluptas aliquam rem nostrum eius provident, eaque distinctio reprehenderit iste, ullam asperiores! Totam culpa optio repellat nisi iure obcaecati explicabo, 
            animi illum. Cum adipisci reiciendis atque et voluptatem!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quisquam ad laboriosam ullam veniam molestias ipsam, impedit debitis? Libero accusantium reprehenderit quas? 
            Architecto sed impedit voluptatibus odit labore facere. Mollitia commodi similique asperiores aliquam dignissimos cum quia nesciunt! Praesentium cum quidem laudantium nemo facilis quos fugit sint. 
            Distinctio, ullam. Cumque blanditiis repudiandae voluptas aliquam rem nostrum eius provident, eaque distinctio reprehenderit iste, ullam asperiores! Totam culpa optio repellat nisi iure obcaecati explicabo, 
            animi illum. Cum adipisci reiciendis atque et voluptatem!"
        ],
        [
    
            "title" => "Judul Post Kedua",
            "author" => "Adinata Kusuma Wardani",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quisquam ad laboriosam ullam veniam molestias ipsam, impedit debitis? Libero accusantium reprehenderit quas? 
            Architecto sed impedit voluptatibus odit labore facere. Mollitia commodi similique asperiores aliquam dignissimos cum quia nesciunt! Praesentium cum quidem laudantium nemo facilis quos fugit sint. 
            Distinctio, ullam. Cumque blanditiis repudiandae voluptas aliquam rem nostrum eius provident, eaque distinctio reprehenderit iste, ullam asperiores! Totam culpa optio repellat nisi iure obcaecati explicabo, 
            animi illum. Cum adipisci reiciendis atque et voluptatem!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quisquam ad laboriosam ullam veniam molestias ipsam, impedit debitis? Libero accusantium reprehenderit quas? 
            Architecto sed impedit voluptatibus odit labore facere. Mollitia commodi similique asperiores aliquam dignissimos cum quia nesciunt! Praesentium cum quidem laudantium nemo facilis quos fugit sint. 
            Distinctio, ullam. Cumque blanditiis repudiandae voluptas aliquam rem nostrum eius provident, eaque distinctio reprehenderit iste, ullam asperiores! Totam culpa optio repellat nisi iure obcaecati explicabo, 
            animi illum. Cum adipisci reiciendis atque et voluptatem!"
        ],
    
    ];
    
    return view('posts',[
        "title" => "Posts",
        "Posts" => $blog_posts
    ]);

});