@extends ('posts.blog')

@section ('contentblog')

@foreach ($posts as $post)
  @include ('posts.post')
@endforeach

  <hr>

  <nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
  </nav>

  <hr>

@endsection