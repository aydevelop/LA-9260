<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CApp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> 
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
    
    <script src="https://js.stripe.com/v2"></script>
    <script>
        Stripe.setPublishableKey("pk_test_NJ4VpIpG2R6VdM3RVaIKyrRQ00meMESPbM")
    </script>
    <script src="js/app.js"></script>
</body>
</html>