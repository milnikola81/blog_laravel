@extends('layouts.master')

@section('title')
    Create post
@endsection

@section('content')

<form method="POST" action="/posts">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" id="body" rows="10"></textarea>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="published" name="published" value="1">
        <label class="form-check-label" for="published">Publish</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection