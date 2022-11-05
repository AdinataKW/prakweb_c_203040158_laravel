<?php

namespace App\Http\Controllers;
use App\models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all(),
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Blog",
            "post" => $post
        ]);
    }
}
