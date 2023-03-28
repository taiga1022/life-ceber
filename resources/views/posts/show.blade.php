<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <div class="show-container">
        <img class="show-img" src="./photo/IMG-4835.JPG" alt="">
        <h1>{{ $post -> place }}</h1>
        <h2>{{ $post -> address }}</h2>
        <hr noshade class="show-line" >
        <div class="show-text">     
            {{ $post -> comment }}
        </div>
        <div class="s1">
            <ul class="s2">
            <li>カテゴリー：{{ $post -> genre }}</li>
            <li>値段：{{ $post -> price }}</li>
            </ul>
        </div>
        <div class="under">
            <div class="show-edit">編集</div>
            <div class="show-delete">削除</div>
            <div class="show-heart">♡</div>
        </div>
    </div>


    
</body>
</html>