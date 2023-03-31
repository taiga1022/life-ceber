<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {   
        $posts = Post::all();

        $posts_restaurant = Post::where('genre', 'restaurant')->get();

        $posts_sightseeing = Post::where('genre', 'sightseeing')->get();

        $posts_others = Post::where('genre', 'others')->get();
        // dd($posts);

        return view('posts.index', ['posts'=>$posts, 'posts_restaurant'=>$posts_restaurant, 'posts_sightseeing'=>$posts_sightseeing, 'posts_others'=>$posts_others]);

        // dd($post);
    }

    function create()
    {
        return view('posts.create');
    }

    function store(Request $request)
    {
        // dd($request);
        $post = new Post;
        // $post -> title = $request -> title;
        // $post -> body = $request -> body;
        $image_at = request()->file('image_at')->getClientOriginalName();
        request()->file('image_at')->storeAs('public/images',$image_at);

        $post -> image_at = $image_at;
        $post -> place = $request -> place;
        $post -> genre = $request -> genre;
        $post -> address = $request -> address;
        $post -> price = $request -> price;
        $post -> comment = $request -> comment;

         //image_atをDBに保存
         //DBのテーブル＝formからきたデータ

        
        // Post::create([
        //     'image_at'=>$image_at,
        // ]);
        $post -> user_id = Auth::id();
        $post -> save();
        return redirect()->route('posts.index');
    }

    function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', ['post'=>$post]);
    }

    function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', ['post'=>$post]);
    }

    function update(Request $request, $id)
    {
        $post = Post::find($id);
        // $post -> title = $request -> title;
        // $post -> body = $request -> body;
        $post -> image_at = $request -> image_at;
        $post -> place = $request -> place;
        $post -> genre = $request -> genre;
        $post -> address = $request -> address;
        $post -> price = $request -> price;
        $post -> comment = $request -> comment;

        $post -> save();
        return view('posts.show', compact('post'));
    }

    function destroy($id)
    {
        $post = Post::find($id);
        $post -> delete();
        return redirect() -> route('posts.index');
    }
}
