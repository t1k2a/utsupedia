@extends('layouts.pediaapp')
@section('title', 'ABOUT ME')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/aboutMe.css') }}'">

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
                    <a href="https://twitter.com/George23767665" target="_blank">
                    <img src="img/twitter.png" width="30" height="30">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100009791496155" target="_blank">
                        <img src="img/facebook.png" width="30" height="30">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/george_onepiece_naruto/" target="_blank">
                        <img src="img/instagram.png" width="30" height="30">
                    </a>
                </li>
                <li>
                    <a href="https://www.wantedly.com/users/103094284" target="_blank">
                        <img src="img/wantedly.png" width="30" height="30">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>

<section class="about">
    <div class="pic">
        <img src="img/IMG_0353.png" width="180">
    </div>
    <div class="desc">
        <h1>ABOUT ME</h1>
        <p>性格：真面目、おおらか、ガサツ</p>
        <p>仕事：SES</p>
        <p>個人的な活動：Qiita、オープンチャンネルslackにて情報収集、うつペディア開発</p>
    </div>
</section>
<section class="about">
    <div class="pic">
        <img src="img/IMG_0353.png" width="180">
    </div>
    <div class="desc">
        <h1>Hobby</h1>
        <p>ゲーム：ApexLegends</p>
        <p>読書：嫌われる勇気、サービスの神様が教えてくれたこと、e-スポーツ入門</p>
        <p>映画：marvel、DC、トランスフォーマー、ディズニー</p>
    </div>
</section>
<section class="about">
    <div class="pic">
        <img src="img/IMG_0353.png" width="180">
    </div>
    <div class="desc">
        <h1>Career</h1>
        <p>新卒で自社開発企業に就職する。</p>
        <p>1年半で見切りをつけてベンチャー企業に転職するも、圧力に耐えられずうつ病になる。</p>
        <p>その後1ヶ月の休職を経て復帰するも、うつ病が再発して退職する。</p>
        <p>知り合いの企業にSESとして就職。現在に至る。</p>
    </div>
</section>
@endsection