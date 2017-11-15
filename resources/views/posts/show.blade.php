@extends('layouts.master')

@section('content')
	
	<br>
	<div class="container">
		<p class="float-right">
			<a href="/post" class="btn btn-primary">Post</a>
		</p>
		<h1>My posts</h1>
	</div>
	
	<div class="container">
		@foreach($posts as $post)
		<label>{{ $post->title }}</label>
		<ul>
			<li>{{ $post->body }}</li>
		</ul>
		@endforeach
	</div>
	
@endsection