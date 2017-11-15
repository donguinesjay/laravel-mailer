@extends('layouts.master')
@section('breadcrumb')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/inbox">Inbox</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#">Read</a></li>
  </ol>
</nav>
@endsection
@section('content')
<div class="container">
	<div class="row col-md-12">
		<div class="card col-md-12">
			<div class="container">
				<p class="float-right">
					<a href="/inbox" class="btn btn-primary">Back</a>
				</p>
				<h3 class="card-title">Sent To: <p class="card-subltitle"> {{ $mail->to }} </p></h3>
				<hr>
				<div class="card-body">
					<label>Date: <span class="badge badge-light">{{ date_format($mail->created_at, 'g:ia \o\n l jS F Y') }}</span></label>
					<p>
						{{ $mail->message }}
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection