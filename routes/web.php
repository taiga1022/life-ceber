<?php

use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/posts/create', 'PostController@create')->name('posts.create');

Route::post('/posts', 'PostController@store')->name('posts.store');

Route::get('/posts/{id}', 'PostController@show')->name('posts.show');

Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');

Route::put('/posts/{id}', 'PostController@update')->name('posts.update');

Route::delete('/posts/{id}', 'PostController@destroy')->name('posts.destroy');

Route::get('/mypg', 'PostController@mypg')->name('posts.mypg');

// いいねを作成
Route::get('/posts/{post_id}favorites','LikeController@store');
// いいねを取り消す
Route::get('/favorites/{post_id}','LikeController@destroy');

Route::get('/rate', 'RateController@index')->name('rate');