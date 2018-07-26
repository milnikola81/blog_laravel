<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function showPostsWithTag($tag)
    {
        $posts = Tag::where('name', $tag)->first()->posts()->paginate(10);
        return view('posts.index', compact('posts'));
    }
}
