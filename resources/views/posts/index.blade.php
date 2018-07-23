@extends('layouts.master')

@section('content')

        @if(auth()->check())
        <a class="btn btn-primary" href="{{ route('create') }}">
            Create post
        </a>
        @endif

        @foreach($posts as $post)
        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h2>
            <p class="blog-post-meta">{{ $post->created_at }}</p>

            <p>{{ $post->body }}</p>

            <p class="blog-post-meta"><a href="/users/{{$post->user->id}}">{{ $post->user['name'] }}</a></p>

        </div><!-- /.blog-post -->
        @endforeach

@endsection