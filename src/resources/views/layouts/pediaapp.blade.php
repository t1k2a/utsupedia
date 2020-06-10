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
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <script>
        $(function() {
            const hum = $('#hamburger, .close')
            const nav = $('.sp-nav')
            hum.on('click', function(){
                nav.toggleClass('toggle');
            });
        });
    </script>
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
                うつ病に関する相談はこちら
            </a>
        </div>
    </header> 

        <div id="hamburger">
            <span></span>
        </div>

    <nav class="sp-nav">
        <ul>
            <li>
                <a class="nav-link nav-list-item" href="/pedia">
                    記事一覧
                </a>
            </li>
            <li>
                <a class="nav-link nav-list-item" href="/column">
                    コラム
                </a>
            </li>
            <li>    
                <a class="nav-link nav-list-item" id="contact" href="#" >
                    うつ病に関する相談はこちら
                </a>
            </li>
            <li class="close">
                <span>
                    ×閉じる
                </span>
            </li>
        </ul>
    </nav>
 
    <div class="container"> 
        @yield('content')
    </div>
       <div id="modal" class="modal">
        <div class="modal-content">
            <header class="bg-dark" style="text-align:center; color:white">
                　　うつ病に関する相談はこちら
                <button style="float:right;" class="modal-close">
                    ×
                </button>
            </header>
            <div class="modal-body">
                <form action="sendContact">
                    <input type="text" placeholder="名前" name="name" required>
                    <textarea placeholder="内容" name="content" required></textarea>

                    <button type="submit" formaction="sendContact" class="btn btn-success">
                        送信
                    </button>
                </form>
                    <script> 
                        document.querySelector(".modal-close").addEventListener('click', function(){
                            modal.style.display = 'none';
                        });

                        // document.querySelector("#modal").addEventListener('click', function(){
                        //     modal.style.display = 'none';
                        // });
                    </script>
            </div>
        </div>
    </div>    
    <script src="{{ asset('/js/pedia.js') }}"></script> 
</body>
</html>