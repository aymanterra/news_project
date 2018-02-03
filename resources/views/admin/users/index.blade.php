@extends('layouts.master')

@section('content')

<div class="col-md-10 offset-md-1">

	<h1>Users</h1>

	<br>
	@if (auth()->user()->hasPermission('create.users'))
		<a class="btn btn-primary btn-lg" href="/admin/users/create">Add user</a>
	@endif
	<br>
	<br>

	<div class="table-responsive">
        <table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Role</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
				    <tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>
							@foreach ($user->getRoles() as $role)
								{{ $role->name }} 
							@endforeach
						</td>
						<td>
							@if (auth()->user()->hasPermission('view.users'))
								<a class="btn btn-secondary btn-sm" href="/admin/users/show/{{ $user->id }}">Show</a>
							@endif

							@if (auth()->user()->hasPermission('edit.users'))
							<a class="btn btn-primary btn-sm" href="/admin/users/edit/{{ $user->id }}">Edit</a>
							@endif

							@if (auth()->user()->hasPermission('delete.users') && auth()->user()->id != $user->id)
							<form method="post" action="/admin/users/{{ $user->id }}" style="display: inline">
								{{ csrf_field() }}
								<button class="btn btn-danger btn-sm" type="submit">Delete</button>
							</form>
							@endif
						</td>
				    </tr>
			    @endforeach
			</tbody>
        </table>
    </div>

</div>

@endsection