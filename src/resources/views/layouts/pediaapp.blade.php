<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hamburger.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/aboutMe.css') }}">
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
</head>
<body>
    @include('layouts.header')

    @include('layouts.hamburgerMenu')

    <div class="container">
        @yield('content')
    </div>

    @include('layouts.modalContact')
    <script src="{{ asset('/js/pedia.js') }}"></script>
</body>
</html>
