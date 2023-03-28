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
        <div id="tabpage-all">
            <!-- <div class="all-container"> -->
                <a href="#"><img class="img-ex" src="./img/example/pancit.jpeg" alt=""></a><img class="img-ex" src="./img/example/pancit.jpeg" alt=""><img class="img-ex" src="./img/example/pine.jpeg" alt=""><img class="img-ex" src="./img/example/krend.jpeg" alt=""><img class="img-ex" src="./img/example/krend.jpeg" alt=""><img class="img-ex" src="./img/example/krend.jpeg" alt=""><img class="img-ex" src="./img/example/krend.jpeg" alt=""><img class="img-ex" src="./img/example/krend.jpeg" alt=""><img class="img-ex" src="./img/example/pine.jpeg" alt=""><img class="img-ex" src="./img/example/pine.jpeg" alt=""><img class="img-ex" src="./img/example/pine.jpeg" alt=""><img class="img-ex" src="./img/example/pine.jpeg" alt="">
            <!-- </div> -->
        </div>
        <div id="tabpage-restaurant">
            <!-- <div class="rest-container"> -->
                <img class="img-ex" src="./img/example/krend.jpeg" alt=""><img class="img-ex" src="./img/example/pancit.jpeg" alt=""><img class="img-ex" src="./img/example/krend.jpeg" alt=""><img class="img-ex" src="./img/example/krend.jpeg" alt="">
            <!-- </div> -->
        </div>
        <div id="tabpage-sightseeing">
            <!-- <div class="ss-container"> -->
                <img class="img-ex" src="./img/example/photo.jpeg" alt=""><img class="img-ex" src="./img/example/pancit.jpeg" alt=""><img class="img-ex" src="./img/example/photo.jpeg" alt=""><img class="img-ex" src="./img/example/photo.jpeg" alt="">
            <!-- </div> -->
        </div>
        <div id="tabpage-others">
            <!-- <div class="others-container"> -->
                <img class="img-ex" src="./img/example/pancit.jpeg" alt=""><img class="img-ex" src="./img/example/pancit.jpeg" alt=""><img class="img-ex" src="./img/example/pancit.jpeg" alt=""><img class="img-ex" src="./img/example/pancit.jpeg" alt="">
            <!-- </div> -->
        </div>
    </div>
    
</body>
@endsection