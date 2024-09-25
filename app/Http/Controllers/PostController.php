<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateBylimit(3)]);
    }

    public function show(Post $post)
{
    return view('posts.show')->with(['post' => $post]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}
}
