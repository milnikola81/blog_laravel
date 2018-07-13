@extends('layouts.master')

@section('content')
    <ul>
    
        @foreach($posts as $post)
        <li>
            <div> {{ $post->title }} </div>
            <div> {{ $post->body }} </div>
        </li>
        @endforeach

    </ul>
@endsection