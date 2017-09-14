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

      <div class="col-sm-8 blog-main">
        @yield ('contentblog')
      </div><!-- /.blog-main -->

      <div class="col-sm-1"></div>

      @include ('layouts.sidebar')

    </div><!-- /.row -->

  </div><!-- /.container -->

@endsection