@extends ('layouts.app')

@section ('content')
 	<div class="blog-header">
    <div class="container">
      <h1 class="blog-title">The Bootstrap Blog</h1>
      <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
  </div>

  <div class="container">

    <div class="row">

      @include ('posts.index')

      <div class="col-sm-1"></div>

      @include ('partials.sidebar')

    </div><!-- /.row -->

  </div><!-- /.container -->

@endsection