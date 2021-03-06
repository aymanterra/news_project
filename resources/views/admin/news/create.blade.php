@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="post" action="/admin/news">
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
					<div class="form-group">
						<label for="status_id">Status</label>
						<select id="status_id" name="status_id" class="form-control">
							@foreach ($statuses as $status)
								<option value="{{ $status->id }}">{{ $status->name }}</option>
							@endforeach
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<br>
				@include('layouts.errors')
			</div>
		</div>
	</div>

@endsection