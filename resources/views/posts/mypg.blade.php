@extends('layouts.underBar')
@extends('layouts.sub')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mypg.css">
</head>
<body>
    <header>
        <div class="mypg-header">
            <h2>←</h2>
            <h1>my page</h1>
            <h1></h1>
        </div>
    </header>
    <div class="mypg-container">
     <input id="check-a" type="checkbox" class="check">
     <label class="label"for="check-a">
        <div class="p-container">
          <p class="center">my gallery</p>
          <div class="see-more">
            <p >see more</p>
            <p >↓</p>
           </div>
        </div>
     </label>
     @foreach ($posts as $post)
     <div id="pic">
        <!-- <div class="rest-container"> -->
            <a href="{{ route('posts.show', $post->id) }}">
                {{ $post ->image_at }}
            </a>
            {{-- <img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""> --}}
        <!-- </div> -->
        <div class="close-btn">
            <!-- <p class="close">close</p> あとで時間があったらcloseボタン押したら閉じる追加-->
        </div>
    </div>
    @endforeach


     <input id="check-b" type="checkbox" class="check">
     <label class="label "for="check-b">
        <div class="p-container">
            <p class="center">likes</p>
            <div class="see-more">
             <p >see more</p>
             <p >↓</p>
            </div>
          </div>
     </label>
     <div id="pic">
        <!-- <div class="rest-container"> -->
            <img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt="">
        <!-- </div> -->
            <!-- <p class="close">close</p> -->
    </div>

</body>
</html>