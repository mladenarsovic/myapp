@extends('layout.master')


@section('content')

<h3>Login</h3>

<form method="POST" action="/login">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" name="password" class="form-control">
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">Login</button>
		
	</div>
</form>

@if (count($errors->all(0)) >0)
	@foreach ($errors->all() as $error)
		<div class="form-group">
			<div class="alert alert-danger">
				<li>{{ $error }}</li>
			</div>			
		</div>
	@endforeach
@endif


@endsection