@extends('layouts.master')


@section('content')

    <h2>{{ $post->title }}</h2>

    @if(count($post->tags))
        @foreach($post->tags as $tag)
            <a href="/posts/tags/{{ $tag->name }}">
                <li>{{ $tag->name }}</li>
            </a>
        @endforeach
    @endif

    {{ $post->body }}

    @if(count($post->comments))
        <hr>

        <h4>Comments:</h4>
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

    <hr>
    <!-- Add a comment -->
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">

                {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="body" placeholder="Your Comment here" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary ">Add Comment</button>
                </div>

            </form>

            @include('layouts.errors')

        </div>
    </div>




@endsection