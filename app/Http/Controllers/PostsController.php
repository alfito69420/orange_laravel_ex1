<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostsController extends Controller
{
    //
    public function posts()
    {
        $response = Http::get("http://localhost:3000/posts");
        $posts = $response->object();

        return view("orange.posts", compact("posts"));
    }
}
