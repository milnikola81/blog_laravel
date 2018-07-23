<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Mail\CommentReceived;
use Illuminate\Support\Facades\Mail;


class CommentController extends Controller
{
    public function store(Post $post) {
        
        $this->validate(request(),[
            'text' => 'required'
        ]);
        
        $post->comments()->create([
            'text' => request('text')
        ]);
        
        Mail::to($post->user)->send(new CommentReceived($post));

        return redirect('/posts/'.$post->id);         
    }

}
