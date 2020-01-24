<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
    {{-- <link rel="stylesheet" type="text/css" href="/css/style.css"> --}}
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/pedia">
                うつペディア
            </a>
        </div>
    </header>

    <div>
        @yield('content')
    </div>
</body>
</html>