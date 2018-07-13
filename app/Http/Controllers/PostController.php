<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published();
        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('single-post', compact('post'));
    }
}
