@extends('layouts.master')

@section('content')


	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="form-group">
					<label for="id">ID</label>
					<input type="text" id="id" class="form-control" value="{{ $user->id }}" readonly>
				</div>
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" class="form-control" value="{{ $user->name }}" readonly>
				</div>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="text" id="email" class="form-control" value="{{ $user->email }}" readonly>
				</div>
				<div class="form-group">
					<label for="role">Role</label>
					<input type="text" id="role" class="form-control" value="{{ $user->getRoles()->pluck('name') }}" readonly>
				</div>
			</div>
		</div>
	</div>


@endsection