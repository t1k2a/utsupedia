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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/modal.css') }}">
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
       <div id="modal" class="modal">
        <div class="modal-content">
            <header class="bg-dark" style="text-align:center; color:white">
                    問い合わせる
            </header>
            <div class="modal-body" style="text-align: center">
                <form action="sendContact">
                    <label for="name">名前:</label>
                    <input type="text" name="name" value="">
                    <br>
                    <label for="content">内容@auth
                        
                    @endauth</label> 
                    <textarea name="content" value=""></textarea>
                    <br>
                    <button type="submit" formaction="sendContact" class="btn btn-primary">
                        送信
                    </button>
                </form>
                <button type="button" id="close">
                    閉じる
                    <script> 
                    // jsファイルで書きたい
                        document.getElementById("close").addEventListener('click', function () {
                            modal.style.display = 'none';
                        });
                    </script>
                </button>
            </div>
        </div>
    </div>    
    <script src="{{ asset('/js/pedia.js') }}"></script> 
</body>
</html>