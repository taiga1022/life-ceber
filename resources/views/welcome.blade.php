<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <title>Life-Ceber</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        {{-- jquery --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        {{-- <link rel="stylesheet" type="text/css" href="css/vegas.min.css" /> --}}
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/vegas.min.js"></script>
        

        <!-- Styles -->
        <style>
            html {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            body {
                background-image: 
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                widows: 100vw;
                height: 100vh;
                background-position: center;
                background-size: cover;
                overflow: hidden;
            }
          

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .box-welcome{
            background-image: url(../img/necessary/back.png)
            }
        </style>
        <script>
            $(function(){ 
            $('#vegas-wrapper .bg-slider').vegas({
            slides: [
            { src: '../img/necessary/back.png', transition: 'fade2' },
            { src: '../img/necessary/back.png', transition: 'fade2' },
            { src: '../img/necessary/back.png', transition: 'fade2' },
            { src: '../img/necessary/back.png', transition: 'fade2' }
            ],
            
            transitionDuration: 2000, //スライドの遷移アニメーションの時間
            delay: 5000, //スライド切り替え時の遅延時間
            animationDuration: 10000, //スライド表示中のアニメーションの時間
            loop: true,
            });

});
        </script>
    </head>
    <body>
        <div class="vegas-wrap">
            <div class="bg-slider">
            </div>
            </div>
        {{-- <img decoding="slide" id="pic" src="../img/necessary/back.png" alt="" width="390" height="800"> --}}
        <div class="box-welcome">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            

            <div class="content-welcome">
                <div class="title m-b-md">
                    Life-Ceber
                </div>
            </div>
        </div>
    </body>
</html>
