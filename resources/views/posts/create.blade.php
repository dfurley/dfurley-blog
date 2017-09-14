@extends ('posts.blog')

@section ('contentblog')
	<h1>Publish a post.</h1>

	<hr>

	<form method="POST" action="/posts">
		{{ csrf_field() }}

	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" placeholder="Post title" name="title">
	  </div>

	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea id="body" name="body" class=form-control placeholder="Post body" rows="5"></textarea>
	  </div>

	  <div class="form-group">
	  	<button type="submit" class="btn btn-success">Publish</button>
	  </div>
	  @include('layouts.errors')
	</form>
@endsection