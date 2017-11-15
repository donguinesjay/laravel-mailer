@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			<div class="card">
				<form method="post" action="/sendMail">
				<div class="form-group">
					{{ csrf_field() }}
					<label for="email">Send to:</label>
					<input type="email" name="email" class="form-control">
					<br>
					<label for="message">Message: </label>
					<textarea class="form-control" rows="4" cols="50" name="message"></textarea>
					<br>
					<button class="btn btn-primary">Send</button>
				</div>
				</form>
			</div>
		</div>
	</div>
@endsection