@extends('layouts.master')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->created_at }}</p>

        <p>{{ $post->body }}</p>
        @foreach($post->comments as $comment)
        <div class="comment">
            <p>{{ $comment->text }}</p>
            <p>{{ $comment->author }}</p>
        </div>
        @endforeach
    </div><!-- /.blog-post -->

     <a class="btn btn-primary" href="{{ route('create') }}">
        Create comment
    </a>
@endsection