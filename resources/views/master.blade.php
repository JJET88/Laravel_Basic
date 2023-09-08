<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','larvel-basic')</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>

    <nav class=" m-3 p-3">
        <a class=" btn btn-outline-primary me-2" href="{{route('page.home')}}">HOME</a>
        <a class=" btn btn-outline-primary me-2"  href="{{route('page.about-us')}}">ABOUT</a>
        <a  class=" btn btn-outline-primary me-2" href="{{route('page.service')}}">SERVICE</a>
    </nav>

    @yield('home')
    

    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>