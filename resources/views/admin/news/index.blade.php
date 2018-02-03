@extends('layouts.master')

@section('content')

<div class="col-md-10 offset-md-1">

	<h1>News</h1>

	<br>

	@if (auth()->user()->hasPermission('create.roles'))
		<a class="btn btn-primary btn-lg" href="/admin/news/create">Add News</a>
	@endif

	<br>
	<br>

	<div class="table-responsive">
        <table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Sub title</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($news as $new)
				    <tr>
						<td>{{ $new->id }}</td>
						<td>{{ $new->title }}</td>
						<td>{{ $new->sub_title }}</td>
						<td>{{ $new->status->name }}</td>
						<td>
							@if (auth()->user()->hasPermission('view.roles'))
								<a class="btn btn-secondary btn-sm" href="/admin/news/show/{{ $new->id }}">Show</a>
							@endif

							@if (auth()->user()->hasPermission('view.roles'))
								<a class="btn btn-primary btn-sm" href="/admin/news/{{ $new->id }}/comments">Comments</a>
							@endif

							@if (auth()->user()->hasPermission('edit.roles'))
								<a class="btn btn-primary btn-sm" href="/admin/news/edit/{{ $new->id }}">Edit</a>
							@endif

							@if (auth()->user()->hasPermission('delete.roles'))
								<form method="post" action="/admin/news/{{ $new->id }}" style="display: inline">
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