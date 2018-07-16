@extends('layouts.master')

@section('title')
    Create post
@endsection

@section('content')

<form method="POST" action="/posts">

    {{ csrf_field() }}

    <!--
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    -->
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>
    @include('/partials/error-message', ['fieldName' => 'title'])

    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" id="body" rows="10"></textarea>
    </div>
    @include('/partials/error-message', ['fieldName' => 'body'])

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="published" name="published" value="1">
        <label class="form-check-label" for="published">Publish</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection