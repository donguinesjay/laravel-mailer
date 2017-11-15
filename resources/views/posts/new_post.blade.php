@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
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