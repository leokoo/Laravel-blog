@extends('layouts.master')


@section('content')

	<h2>{{ $post->title }}</h2>

	{{ $post->body }}

@endsection