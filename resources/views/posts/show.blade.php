@extends('layouts.master')


@section('content')

	<h2>{{ $post->title }}</h2>

	{{ $post->body }}

	@if(count($post->comments))
		<hr>
		
		<h3>Comments:</h3>
	@endif

	<div class="comments">
		<ul class="list-group">
				@foreach ($post->comments as $comment)
				<li class="list-group-item">
					<strong>
						{{ $comment->created_at->diffForHumans() }}: &nbsp;	
					</strong>
					
					{{ $comment->body }}
				</li>
				@endforeach
		</ul>
	</div>



@endsection