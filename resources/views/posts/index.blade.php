<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./reset.css"rel="stylesheet" type="text/css" >
    <link rel="stylesheet" href="./style2.css">
</head>
<body id="body-index">
    <p id="tabcontrol">
        <a href="#tabpage-all">all</a>
        <a href="#tabpage-restaurant">restaurant</a>
        <a href="#tabpage-sightseeing">sightseeing</a>
        <a href="#tabpage-others">others</a>
    </p>
    <div id="tabbody">
        <div id="tabpage-all">
            <!-- <div class="all-container"> -->
                <a href="#"><img src="./img/pancit.jpeg" alt=""></a><img src="./img/pancit.jpeg" alt=""><img src="./img/pine.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/pine.jpeg" alt=""><img src="./img/pine.jpeg" alt=""><img src="./img/pine.jpeg" alt=""><img src="./img/pine.jpeg" alt="">
            <!-- </div> -->
        </div>
        <div id="tabpage-restaurant">
            <!-- <div class="rest-container"> -->
                <img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt=""><img src="./img/krend.jpeg" alt="">
            <!-- </div> -->
        </div>
        <div id="tabpage-sightseeing">
            <!-- <div class="ss-container"> -->
                <img src="./img/photo.jpeg" alt=""><img src="./img/photo.jpeg" alt=""><img src="./img/photo.jpeg" alt=""><img src="./img/photo.jpeg" alt="">
            <!-- </div> -->
        </div>
        <div id="tabpage-others">
            <!-- <div class="others-container"> -->
                <img src="./img/pancit.jpeg" alt=""><img src="./img/pancit.jpeg" alt=""><img src="./img/pancit.jpeg" alt=""><img src="./img/pancit.jpeg" alt="">
            <!-- </div> -->
        </div>
    </div>

    <script type="text/javascript">

        var tabs = document.getElementById('tabcontrol').getElementsByTagName('a');
        var pages = document.getElementById('tabbody').getElementsByTagName('div');
     
        function changeTab() {
           // ▼href属性値から対象のid名を抜き出す
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
     
           // ▼クリックされたタブを前面に表示する
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
     
     </script>
    
</body>
</html>