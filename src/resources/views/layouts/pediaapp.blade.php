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

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>
<body>

    <header class="navbar navbar-dark bg-dark">
        <div class="header-list">
            <a class="navbar-brand" href="/pedia">
                うつペディア
            </a>
            <a class="nav-link nav-list-item" href="/pedia">
                記事一覧
            </a>
            <a class="nav-link nav-list-item" href="/column">
                コラム
            </a>
            <a class="nav-link nav-list-item" id="contact" href="#" >
                問い合わせ
            </a>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>
        <script src="{{ asset('/js/pedia.js') }}"></script>

</body>
</html>