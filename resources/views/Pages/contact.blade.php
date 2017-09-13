@extends ('layouts.app')

@section ('content')
	<div class="container">
			<div class="text-center">
				<h1 class="jumbotron">
					Get in touch.
				</h1>
			</div>

			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					    <small id="emailHelp" class="form-text text-muted">I'll never share your email with anyone else.</small>
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Comments</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
					  </div>

					  <div class="text-center">
					  	<button type="submit" class="btn btn-primary">Submit</button>
					  </div>
					</form>
				</div>
			</div>
	</div>
@endsection