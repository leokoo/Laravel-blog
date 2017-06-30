<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Laravel Blog Template</title>

    <!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://getbootstrap.com/dist/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>
		
    @include('layouts.nav')
 
    <div class="container">

     @include('layouts.header')

      <div class="row">

        <div class="col-sm-8 blog-main">

          @yield('content')
        
        </div><!-- /.blog-main -->

        @include('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

      @include('layouts.footer')

  </body>
</html>