
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('/')}}favicon.ico">

    <title>@yield('title','Master Page')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/')}}dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('/')}}dist/css/album.css" rel="stylesheet">
</head>

<body>
<div class="container">

@include('front.nav')

@yield('content')

@include('front.footer')
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="{{asset('/')}}dist/js/popper.min.js"></script>
<script src="{{asset('/')}}dist/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}dist/js/holder.min.js"></script>
</body>
</html>
