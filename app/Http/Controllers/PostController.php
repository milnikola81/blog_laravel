<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts/index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id); // u objekat $post dodaje niz komentara vezanih za id ovog posta u asoc niz comments 
        //$post = Post::findOrFail($id);
        return view('posts.show', compact(['post']));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {

        $this->validate(request(), ['title' => 'required', 'body' => 'required']);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'published' => (bool) request('published'),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/posts');
    }

}
