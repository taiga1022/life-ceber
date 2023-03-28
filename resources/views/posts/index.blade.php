@extends('layouts.app')
{{-- @extends('layouts.main') --}}
@extends('layouts.underBar')



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./reset.css"rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="./style2.css">
</head> --}}
<body id="body-index">
    <div id="sample08" class="loading">
        <svg width="200" height="200" class="load-spin">
            <path id="upperArc" d="M 25 100
                A 50 50 0 1 1 175 100
                " stroke="transparent" fill="transparent" />
            <path id="lowerArc" d="M 175 100
                A 50 50 0 1 1 25 100
                " stroke="transparent" fill="transparent" />
            <text font-size="16pt" class="load-blink" fill="#48A969">
                <textPath xlink:href="#upperArc">
                    Life-Ceber
                </textPath>
                <textPath xlink:href="#lowerArc">
                    Life-Ceber
                </textPath>
            </text>
        </svg>
    </div>
    @section('content')
    <p id="tabcontrol">
        <a href="#tabpage-all">all</a>
        <a href="#tabpage-restaurant">restaurant</a>
        <a href="#tabpage-sightseeing">sightseeing</a>
        <a href="#tabpage-others">others</a>
    </p>
    <div id="tabbody">
    @foreach ($posts as $post)
        <div id="tabpage-all">
            <!-- <div class="all-container"> -->
                <a href="#">
                    {{-- <img src="./img/example/pancit.jpeg" alt=""> --}}
                    {{ $post -> image_at }}
                </a>
                {{-- <img src="./img/example/pancit.jpeg" alt=""><img src="./img/example/pine.jpeg" alt=""><img src="./img/example/krend.jpeg" alt=""><img src="./img/example/krend.jpeg" alt=""><img src="./img/example/krend.jpeg" alt=""><img src="./img/example/krend.jpeg" alt=""><img src="./img/example/krend.jpeg" alt=""><img src="./img/example/pine.jpeg" alt=""><img src="./img/example/pine.jpeg" alt=""><img src="./img/example/pine.jpeg" alt=""><img src="./img/example/pine.jpeg" alt=""> --}}
            <!-- </div> -->
        </div>
    @endforeach
    @foreach ($posts_restaurant as $post_restaurant)
        <div id="tabpage-restaurant">
            <!-- <div class="rest-container"> -->
                <a href="#">
                    {{ $post_restaurant -> image_at }}
                </a>
                {{-- <img src="./img/krend.jpeg" alt=""><img src="./img/example/pancit.jpeg" alt=""><img src="./img/example/krend.jpeg" alt=""><img src="./img/example/krend.jpeg" alt=""> --}}

            <!-- </div> -->
        </div>
    @endforeach
    @foreach ($posts_sightseeing as $post_sightseeing)
        <div id="tabpage-sightseeing">
            <!-- <div class="ss-container"> -->
                <a href="#">
                    {{ $post_sightseeing -> image_at }}
                </a>
                {{-- <img src="./img/photo.jpeg" alt=""><img src="./img/example/pancit.jpeg" alt=""><img src="./img/example/photo.jpeg" alt=""><img src="./img/example/photo.jpeg" alt=""> --}}

            <!-- </div> -->
        </div>
    @endforeach
    @foreach ($posts_others as $post_others)
        <div id="tabpage-others">
            <!-- <div class="others-container"> -->
                <a href="#">
                    {{ $post_others -> image_at }}
                </a>
                {{-- <img src="./img/pancit.jpeg" alt=""><img src="./img/example/pancit.jpeg" alt=""><img src="./img/example/pancit.jpeg" alt=""><img src="./img/example/pancit.jpeg" alt=""> --}}
            <!-- </div> -->
        </div>
    </div>
    @endforeach

    {{-- <script type="text/javascript">

        var tabs = document.getElementById('tabcontrol').getElementsByTagName('a');
        var pages = document.getElementById('tabbody').getElementsByTagName('div');
     
        function changeTab() { --}}
           {{-- // ▼href属性値から対象のid名を抜き出す
           var targetid = this.href.substring(this.href.indexOf('#')+1,this.href.length);
     
           // ▼指定のタブページだけを表示する
           for(var i=0; i<pages.length; i++) {
              if( pages[i].id != targetid ) {
                 pages[i].style.display = "none";
              }
              else {
                 pages[i].style.display = "block";
              }
           }
      --}}
           {{-- // ▼クリックされたタブを前面に表示する
           for(var i=0; i<tabs.length; i++) {
              tabs[i].style.zIndex = "0";
           }
           this.style.zIndex = "10";
     
           // ▼ページ遷移しないようにfalseを返す
           return false;
        }
     
        // ▼すべてのタブに対して、クリック時にchangeTab関数が実行されるよう指定する
        for(var i=0; i<tabs.length; i++) {
           tabs[i].onclick = changeTab;
        }
     
        // ▼最初は先頭のタブを選択
        tabs[0].onclick();
      --}}
     {{-- </script> --}}
     {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}
    
</body>
@endsection