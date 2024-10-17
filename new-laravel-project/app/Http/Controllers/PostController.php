<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Postモデルからデータを取得し、更新日時で並べ替えてページネーションする
        $posts = Post::orderBy('updated_at', 'desc')->paginate(10);
        
        // ビューにデータを渡す
        return view('posts.index', compact('posts'));
    }
}