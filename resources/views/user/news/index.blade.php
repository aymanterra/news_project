@extends('layouts.master')

@section('content')

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1 class="display-3">Hello, {{ auth()->user()->name }}!</h1>
    <p>Now you can Publish news and comment on a published news, but they will not appear untill Admin approve them.</p>
    <p><a class="btn btn-primary btn-lg" href="/news/create" role="button">Add News &raquo;</a></p>
  </div>
</div>

<div class="container">
  <div class="row">

    @foreach ($approvedNews as $news)
    <div class="col-md-4">
      <h2> {{ $news->title }} </h2>
      <p> {{ $news->sub_title }} </p>
      <p><a class="btn btn-secondary" href="/news/show/{{ $news->id }}" role="button">View details &raquo;</a></p>
    </div>
    @endforeach

  </div>
  <hr>

</div> <!-- /container -->

@endsection