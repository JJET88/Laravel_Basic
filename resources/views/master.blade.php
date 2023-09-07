<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','larvel-basic')</title>
</head>
<body>

    <nav>
        <a href="{{url('/')}}">HOME</a>
        <a href="{{url('/about-us')}}">ABOUT</a>
        <a href="{{url('/service')}}">SERVICE</a>
    </nav>

    @yield('home')
    
</body>
</html>