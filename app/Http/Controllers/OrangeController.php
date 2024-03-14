<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Http;

class OrangeController extends Controller
{
    //
    public function index()
    {
        return view('orange.index');
    }

    public function show($id)
    {
        $response = Http::get("http://localhost:3000/posts/id/$id");
        $posts = $response->object();

        $post = $posts[0];

        return view('orange.detail', compact('post'));
    }
}
