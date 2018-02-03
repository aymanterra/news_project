@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="post" action="/admin/roles">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="slug">Slug</label>
						<input type="text" id="slug" name="slug" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea id="description" name="description" class="form-control" ></textarea>
					</div>
					<div class="form-group">
						<label for="permissions">Permissions</label>
						<select multiple="multiple" id="permissions" name="permissions[]" class="form-control">
							@foreach ($permissions as $permission)
								<option value="{{ $permission->id }}">{{ $permission->name }}</option>
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