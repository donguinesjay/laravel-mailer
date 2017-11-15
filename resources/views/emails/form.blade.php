@extends('layouts.master')
@section('breadcrumb')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/mail">Mail</a></li>
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
		<div class="row col-md-12">
			<div class="card">
				<form method="post" action="/sendMail">
				<div class="form-group">
					{{ csrf_field() }}
					<label for="email">Send to:</label>
					<input type="email" name="email" class="form-control" placeholder="email@email.com">
					<br>
					<label for="message">Message: </label>
					<textarea class="form-control" rows="4" cols="50" name="message" placeholder="Type your message here"></textarea>
					<br>
					<button class="btn btn-primary">Send</button>
				</div>
				</form>
			</div>
		</div>
	</div>
@endsection