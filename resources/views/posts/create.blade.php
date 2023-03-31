@extends('layouts.app')
    {{-- <main> --}}
        <a href="{{ route('posts.index') }}"><p class="create-back">←戻る</p></a>
        <div class="create-container">
            <h3>新規投稿/NewPost</h3>
            <form action="{{ route('posts.store') }}" method='POST' enctype="multipart/form-data">
            @csrf
                <div class="create-title create-name">名前</div>
                <input type="text" name='place' class="create-input" placeholder="店名・商品名・施設名など">
                <div class="create-title create-way">道のり</div>
                <input type="text" name='address' class="create-input" placeholder="住所もしくは目印">
                <div class="create-title create-categories-header">カテゴリー</div>
                <div class="kind-box">
                    <input type="radio" name="genre" id="res" class="radio1" value="restaurant">
                    <label for="res">restaurant</label>

                    <input type="radio" name="genre" id="sight" class="radio1" value="sightseeing">
                    <label for="sight">sightseeing</label>

                    <input type="radio" name="genre" id="others" class="radio1" value="others">
                    <label for="others">others</label>
                </div>
                <div class="create-title create-prices-header">価格</div>
                <div class="pp-box">
                    <input type="radio" name="price" id="box-p" class="radio" value="P">
                    <label for="box-p">P</label>

                    <input type="radio" name="price" id="box-pp" class="radio" value="PP">
                    <label for="box-pp">PP</label>

                    <input type="radio" name="price" id="box-ppp" class="radio" value="PPP">
                    <label for="box-ppp">PPP</label>
                </div>
                    {{-- <ul class="create-prices">
                        <li>P</li>
                        <li class="create-pp">PP</li>
                        <li>PPP</li>
                    </ul> --}}
                <div class="create-title create-content">内容</div>
                <textarea name="comment" placeholder="味の感想や雰囲気など" ></textarea>
                <p class="create-image">写真を選択</p>
                {{-- <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data"></form>
                   @csrf --}}
                  <input id="image_at" type="file" class="image_at" name="image_at">
                <button type="submit" class="btn-create">投稿/Post</button>
            </form>
        </div>
        

        <div class="img-contents">
         <p class="guide-p">書き方参照</p>
         <img src="../img/necessary/guide.png" alt="">
        </div> 
    {{-- </main> --}}

{{-- <style>
    .create-container {
        text-align: center;
    }
    .create-back {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 18px;
        margin: 20px 0 25px 17px;
    }

    h3 {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 20px;
        line-height: 24px;
        /* text-align: center; */
        margin-bottom: 28px;
    }

    .create-title {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 18px;
        /* text-align: center; */
    }

    .create-name {
        margin-bottom: 19px;
    }

    .create-way {
        margin-bottom: 7px;
    }

    .create-categories-header {
        margin-bottom: 29px;
    }

    .create-prices-header {
        width: 136px;
        padding: 15px 0;
        margin: 0 auto;
        border-top: 1px solid rgba(0, 0, 0, 0.3);
    }

    .create-input {
        background: rgba(169, 169, 169, 0.05);
        border: 1px solid #3CB371;
        border-top: none;
        border-right: none;
        border-left: none;
        width: 272px;
        height: 28px;
        margin-bottom: 29px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 22px;
    }

    .create-categories {
        width: 272px;
        display: flex;
        justify-content: space-between;
        margin: 0 auto;
        padding-bottom: 25px;
    }

    .create-categories li {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 10px;
        line-height: 12px;
    }

    .create-sightseeing {
        padding-right: 20px;
    }

    .create-prices {
        display: flex;
        justify-content: space-between;
        width: 225px;
        margin: 0 auto;
        padding-bottom: 38px;
    }

    .create-prices li {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 18px;
    }

    .create-pp {
        padding-left: 20px;
    }

    .create-content {
        margin-bottom: 7px;
    }

    textarea {
        background: rgba(169, 169, 169, 0.05);
        border: 1px solid #3CB371;
        width: 272px;
        height: 146px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 22px;
        overflow: auto;
        resize: none;
    }

    .create-image {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 15px;
        margin: 27px 0 51px 0;
        padding-right: 130px

    }

    .create-submit {
        background: #fff;
        border: 1px solid #3CB371;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        margin-bottom: 52px;
        width: 104px;
        height: 37px;
    }

    .create-sample {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 18px;
        color: #3769EA;
        float: right;
        margin: 0 36px 36px 0;
    }
</style>
</html> --}}