@extends('layouts.pediaapp')
@section('title', 'ABOUT ME')

@section('content')

<header>
    <div class="introduction">
        <div class="icon">
                <img src="https://avatars1.githubusercontent.com/u/20882554?s=400&v=4" alt="george" width="350" height="300">
        </div>
        <div class="info">
            <h1>George</h1> 
            <p>うつ病を乗り越えたへっぽこエンジニア</p>
            <ul>
                <li>
                    <a href="https://twitter.com/George23767665">
                    <img src="img/twitter.png" width="30" height="30">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100009791496155">
                        <img src="img/facebook.png" width="30" height="30">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/george_onepiece_naruto/">
                        <img src="img/instagram.png" width="30" height="30">
                    </a>
                </li>
                <li>
                    <a href="https://www.wantedly.com/users/103094284">
                        <img src="img/wantedly.png" width="30" height="30">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<section>
    <h1>ABOUT</h1>
    <p>こんな性格だったりこんな仕事だったり個人的な活動だったり</p>
</section>
<section>
    <h1>Hobby</h1>
    <ul>
        <li>
            ゲーム
        </li>
        <li>
            読書
        </li>
        <li>
            プログラミング
        </li>
    </ul>
</section>

<section>
    <h1>Career</h1>
    <p>過去の経歴をざっと書く</p>
</section>
@endsection