@extends('layouts.master')

@section('content')
    <div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->created_at }}</p>
        <p class="blog-post-meta"><a href="/users/{{$post->user->id}}">{{ $post->user->name }}</a></p>

        @if(count($post->tags))
            <ul>
            @foreach($post->tags as $tag)
                <li><a href="/posts/tag/{{$tag->name}}">{{ $tag->name }}</a></li>
            @endforeach
            </ul>
        @endif
        <p>{{ $post->body }}</p>
        @foreach($post->comments as $comment)
        <div class="comment">
            <p>{{ $comment->text }}</p>
        </div>
        @endforeach
    </div><!-- /.blog-post -->

    

        <form method="POST" action="/posts/{{$post->id}}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="text">Create new comment:</label>
                <textarea name="text" class="form-control" id="text" rows="8"></textarea>
            </div>
            @include('/partials/error-message', ['fieldName' => 'text'])

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
@endsection