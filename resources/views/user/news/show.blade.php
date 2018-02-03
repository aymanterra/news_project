@extends('layouts.master')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
	<div class="container">
		<h1 class="display-3">{{ $news->title }}</h1>
		<p>{{ $news->sub_title }}</p>
	</div>
</div>

<div class="container">
	<div class="row">
  		{{ $news->body }}
    </div>

    <hr>

    @if (auth()->user()->hasPermission('create.comments'))
	    <div class="row">
	    	<div class="col-md-8">
		  		<form method="post" action="/news/{{$news->id}}/comments">
					{{ csrf_field() }}
			  		<div class="form-group">
			  			<textarea id="body" name="body" class="form-control" placeholder="add a comment" required></textarea>
			  		</div>
					<button type="submit" class="btn btn-primary">Submit</button>
		  		</form>
				<br>
	    		@include('layouts.errors')
	  		</div>
	    </div>
    @endif

    <hr>

    @if (auth()->user()->hasPermission('view.comments'))
	    <div class="row">
	    	<div class="col-md-8">
			    <div class="comments">
			    	<ul class="list-group">
			    		@foreach ($news->approvedComments() as $comment)
			    			<li class="list-group-item">
			    				<strong>
			    					{{ $comment->created_at->diffForHumans() }}  
			    				</strong>
			    					by 
			    				<strong>
			    					{{ $comment->user->name }} : &nbsp&nbsp
			    				</strong>
			    				<div>
			    					{{ $comment->body }}
		    					</div>
			    			</li>
			    		@endforeach
			    	</ul>
			    </div>
	    	</div>
	    </div>
    @endif
</div> <!-- /container -->

@endsection