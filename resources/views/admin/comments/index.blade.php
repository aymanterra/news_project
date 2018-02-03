@extends('layouts.master')

@section('content')


	<h1>Roles</h1>


	<br>
	<br>

	<div id="root" class="table-responsive" v-cloak>
        <table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>ID</th>
					<th>Body</th>
					<th>Publisher</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				    <tr v-for="comment in comments">
						<td>@{{comment.id}}</td>
						<td>@{{comment.body}}</td>
						<td>@{{comment.user_name}}</td>
						<td>@{{comment.status_name}}</td>
						<td>
							@if (auth()->user()->hasPermission('view.roles'))
								<button class="btn btn-success btn-sm" v-on:click.prevent="changeStatus(comment.id, '2')">Approve</button>
							@endif

							@if (auth()->user()->hasPermission('edit.roles'))
								<button class="btn btn-warning btn-sm" v-on:click.prevent="changeStatus(comment.id, '3')">Disapprove</button>
							@endif

							@if (auth()->user()->hasPermission('delete.roles'))
									<button class="btn btn-danger btn-sm" v-on:click.prevent="destroy(comment.id)">Delete</button>
							@endif
						</td>
				    </tr>
			</tbody>
        </table>
    </div>

@endsection


@section('scripts')
    <script type="text/javascript" src="{{ mix('js/admin.js') }}" ></script>
@endsection
