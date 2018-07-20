@extends('layouts.master')

@section('title')
    Register user
@endsection

@section('content')

<form method="POST" action="/register">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control" id="name">
    </div>
    @include('/partials/error-message', ['fieldName' => 'name'])

    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" id="email">
    </div>
    @include('/partials/error-message', ['fieldName' => 'email'])

    <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" id="password">
    </div>
    @include('/partials/error-message', ['fieldName' => 'password'])

    <div class="form-group">
        <label for="age">Age</label>
        <input name="age" type="number" class="form-control" id="age">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>

</form>

@endsection