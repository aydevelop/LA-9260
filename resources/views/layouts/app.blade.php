<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CApp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div id="site-header">
        @include('partials.header')
    </div>

    <div id="site-main">
        @yield('content')
    </div>

    <div id="site-footer">
        @include('partials.footer')
    </div>
    <script src="js/all.js"></script>
</body>
</html>