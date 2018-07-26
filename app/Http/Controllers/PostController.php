<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Tag;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index()
    {
        $posts = Post::with('user')->latest()->paginate(10);
        // sa with se radi eager load (dovuce sve podatke i za post i za usera u jednom pozivu)
        return view('posts/index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id); // u objekat $post dodaje niz komentara vezanih za id ovog posta u asoc niz comments 
        //$post = Post::findOrFail($id);
        return view('posts.show', compact(['post']));
    }

    public function create() {
        $tags = Tag::all();

        return view('posts.create', compact('tags'));
    }

    public function store() {

        $this->validate(request(), ['title' => 'required', 'body' => 'required', 'tags' => 'required|array']);

        $post = Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'published' => (bool) request('published'),
            'user_id' => !empty(auth()->user())
                ? auth()->user()->id
                : 1

        ]);

        $post->tags()->attach(request('tags'));

        return redirect('/posts');
    }

}
