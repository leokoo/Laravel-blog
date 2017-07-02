 <div class="blog-masthead">
  <div class="container">
    <nav class="blog-nav">
      <a class="blog-nav-item active" href="/">Home</a>
      <a class="blog-nav-item" href="/posts/create">Create A New Post</a>
      <a class="blog-nav-item" href="/register">Register</a>
      <a class="blog-nav-item" href="/login">Login</a>
      <a class="blog-nav-item" href="/logout">Logout</a>

			@if (Auth::check())
	      <a class="blog-nav-item ml-auto" href="#">{{ Auth::user()->name }}</a>
    	@endif
    </nav>
  </div>
</div>