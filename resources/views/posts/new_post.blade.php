@extends('layouts.master')
@section('breadcrumb')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/posts">Post</a></li>
    <li class="breadcrumb-item"><a href="/post">Create</a></li>
  </ol>
</nav>
@endsection
@section('content')
	<div class="container">
		@foreach($errors->all() as $error)
		<br>
			<div class="alert alert-danger">
				<label> {{ $error }} </label>
			</div>
		@endforeach
		<div class="row col-md-12" >
			<div class="card">
				<form method="post" action="/post">
				<div class="form-group">
					{{ csrf_field() }}
					<label for="title">Title:</label>
					<input type="text" name="title" class="form-control">
					<br>
					<label for="body">Body: </label>
					<textarea class="form-control" rows="4" cols="50" name="body"></textarea>
					<br>
					<button class="btn btn-primary">Post</button>
				</div>
				</form>
			</div>
		</div>
	</div>
@endsection