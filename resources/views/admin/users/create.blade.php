@extends('layouts.master')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form method="post" action="/admin/users">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" id="email" name="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password"  name="password" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="password_confirmation">Password confirmation</label>
						<input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="role">Role</label>
						<select id="role" name="role" class="form-control">
							@foreach ($roles as $role)
								<option value="{{ $role->id }}">{{ $role->name }}</option>
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