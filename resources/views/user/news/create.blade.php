@extends('layouts.master')

@section('content')

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1 class="display-3">Create News</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="post" action="/news">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" id="title" name="title" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="sub_title">Sub title</label>
						<textarea id="sub_title" name="sub_title" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label for="body">Body</label>
						<textarea id="body" name="body" class="form-control" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<br>
				@include('layouts.errors')
			</div>
		</div>
		<hr>

	</div> <!-- /container -->

@endsection