<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Blog Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/blog.css" rel="stylesheet">

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/posts">Home</a>
          @if(auth()->check())
            <a class="nav-link ml-auto" href="/logout">{{auth()->user()->name}}</a>
            <a class="nav-link active ml-auto" href="/logout">Logout</a>
         @else
            <a class="nav-link ml-auto" href="/login">Login</a>
            <a class="nav-link ml-auto" href="{{ route('register') }}">Register</a>
         @endif
        </nav>
      </div>
    </div>

    @include('partials.header')


    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">

          
            @yield('content')


        </div><!-- /.blog-main -->

        <div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
            @foreach ($tags as $tag)
              <li>
                <a href="/posts/tag/{{ $tag->name }}"> {{$tag->name}} </a>
                <!-- setovano u AppServiceProvider boot() -->
              </li>
            @endforeach
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('partials.footer')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
