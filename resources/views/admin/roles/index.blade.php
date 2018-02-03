@extends('layouts.master')

@section('content')

<div class="col-md-10 offset-md-1">

	<h1>Roles</h1>

	<br>

	@if (auth()->user()->hasPermission('create.roles'))
		<a class="btn btn-primary btn-lg" href="/admin/roles/create">Add role</a>
	@endif

	<br>
	<br>

	<div class="table-responsive">
        <table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Slug</th>
					<th>Description</th>
					<th>Permissions</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($roles as $role)
				    <tr>
						<td>{{ $role->id }}</td>
						<td>{{ $role->name }}</td>
						<td>{{ $role->slug }}</td>
						<td>{{ $role->description }}</td>
						<td>{{ str_replace(['[',']','"'], ' ', $role->permissions()->pluck('slug')) }}</td>
						<td>
							@if (auth()->user()->hasPermission('view.roles'))
								<a class="btn btn-secondary btn-sm" href="/admin/roles/show/{{ $role->id }}">Show</a>
							@endif

							@if (auth()->user()->hasPermission('edit.roles'))
								<a class="btn btn-primary btn-sm" href="/admin/roles/edit/{{ $role->id }}">Edit</a>
							@endif

							@if (auth()->user()->hasPermission('delete.roles'))
								<form method="post" action="/admin/roles/{{ $role->id }}" style="display: inline">
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