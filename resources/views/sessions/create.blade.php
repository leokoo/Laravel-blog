@extends('layouts.master')

@section('content')
	<h1>Register</h1>

	<form  method="POST" action="/register">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name">
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="text" class="form-control" id="password" name="password">
		</div>

		<div class="form-group">
			<button class="btn btn-primary" type="submit">Register</button>
		</div>
	</form>

@endsection