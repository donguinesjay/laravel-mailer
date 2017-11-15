@extends('layouts.master')
@section('breadcrumb')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="/inbox">Inbox</a></li>
  </ol>
</nav>
@endsection
@section('content')
	<div class="container">
		<div class="row col-md-12">
			<div class="card col-md-8">
				<div class="container">
				<p class="float-right">
					<a href="/mail" class="btn btn-primary">New Mail</a>
				</p>
				<h4 class="card-title">Inbox</h4>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th>To</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $row)
							<tr>
								<td scope="col">{{ $row->to }}</td>
								<td scope="col"> {{ $row->created_at }}</td>
								<td scope="col"><a href="/inbox/read/{{ $row->id }}" class="btn btn-primary">View</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection