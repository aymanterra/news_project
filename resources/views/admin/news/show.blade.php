@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="form-group">
					<label for="id">ID</label>
					<input type="text" id="id" class="form-control" value="{{ $news->id }}" readonly>
				</div>
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" id="title" class="form-control" value="{{ $news->title }}" readonly>
				</div>
				<div class="form-group">
					<label for="sub_title">Sub title</label>
					<textarea id="sub_title" class="form-control" readonly>{{ $news->sub_title }}</textarea>
				</div>
				<div class="form-group">
					<label for="body">Body</label>
					<textarea id="body" class="form-control" readonly>{{ $news->body }}</textarea>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<input type="text" id="status" class="form-control" value="{{ $news->status->name }}" readonly>
				</div>
			</div>
		</div>
	</div>

@endsection