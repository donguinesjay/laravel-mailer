@extends('layouts.master')
@section('breadcrumb')
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
  </ol>
</nav>
@endsection
@section('content')
	
	<br>
	<div class="container">
		<p class="float-right">
			<a href="/post" class="btn btn-primary">Post</a>
		</p>
		<h1>My posts</h1>
		<hr>
	</div>
	
	<div class="container">
		@foreach($posts as $post)
		<div class="row">
			<div class="card" style="width: 20rem;">
				<div class="card-body">
						<h2>{{ $post->title }}</h2>
						<p class="float-right">
							<span class="badge badge-light text-muted">
								{{ date_format($post->created_at, 'g:ia \o\n l jS F Y') }}
							</span>
						</p>
					<hr>
					<h5>{{ $post->body }}</h5>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	
@endsection