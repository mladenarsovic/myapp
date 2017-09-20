<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>My App</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/myapp.css" rel="stylesheet">
</head>

<body>

@include('partials.navbar')

<div class="blog-header">
    <div class="container">
        <h2 class="blog-title">My App</h2>
        <!-- <p class="lead blog-description">samo proba </p> -->
    </div>
</div>

<div class="container">

    <div class="row">

        <div class="col-sm-12 blog-main">

            @yield('content')

        </div>

    </div>

</div>

@include('partials.footer')

</body>
</html>