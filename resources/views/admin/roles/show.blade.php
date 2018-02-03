@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="form-group">
					<label for="id">ID</label>
					<input type="text" id="id" class="form-control" value="{{ $role->id }}" readonly>
				</div>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" class="form-control" value="{{ $role->name }}" readonly>
				</div>
				<div class="form-group">
					<label for="slug">Slug</label>
					<input type="text" id="slug" class="form-control" value="{{ $role->slug }}" readonly>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<input type="text" id="description" class="form-control" value="{{ $role->description }}" readonly>
				</div>
				<div class="form-group">
					<label for="permissions">Permissions</label>
					<input type="text" id="permissions" class="form-control" value="{{ str_replace(['[',']','"'], ' ', $role->permissions()->pluck('slug')) }}" readonly>
				</div>
			</div>
		</div>
	</div>

@endsection