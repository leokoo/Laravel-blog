@extends('layouts.master')

@section('content')

  @include('posts.post')

  <nav>
    <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul>
  </nav>


@endsection

@section('footer')
	<script src="/js/test.js"></script>
@endsection