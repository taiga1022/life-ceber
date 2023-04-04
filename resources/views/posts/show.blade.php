@extends('layouts.sub')

{{-- ヘッダーとフッターいらない場合のbladeファイル --}}

{{-- @extends('layouts.underBar') --}}

    <div class="show-container">
        <img class="show-img" src="{{ asset('storage/images/' . $post->image_at) }}" alt="">                    
        {{-- <img class="show-img" src="./photo/IMG-4835.JPG" alt=""> --}}
        <h1 class="showh">{{ $post -> place }}</h1>
        <h2 class="showh">{{ $post -> address }}</h2>
        <hr noshade class="show-line" >
        <div class="show-text">     
            {{ $post -> comment }}
        </div>
        <div class="s1">
            <ul class="s2">
                <li class="showh">カテゴリー：{{ $post -> genre }}</li>
                <li class="showh">値段：{{ $post -> price }}</li>
            </ul>
        </div>
        @if($post->user_id == Auth::user()->id)
            <div class="under">
                <a href="{{ route('posts.edit', $post->id) }}" class="show-edit">編集</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method='post'>
                    @csrf
                    @method('delete')
                    <input type="submit" value='削除' class="show-delete" onclick='return confirm("本当に削除しますか？");'>
                </form>
        @endif
            </div>
            <a href="{{ route('posts.index') }}"><p class="p-back">←戻る</p></a>
    </div>


    
