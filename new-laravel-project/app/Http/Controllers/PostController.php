<?php

namespace App\Http\Controllers;

use App\Models\Post;  // Postモデルをインポート
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // 最新の投稿を更新日付の降順で取得（10件）
        $posts = Post::orderBy('updated_at', 'desc')->take(10)->get();
        
        // ビューにデータを渡して表示
        return view('posts.index', compact('posts'));
    }
}
