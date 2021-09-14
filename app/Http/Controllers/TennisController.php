<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

// 追記
use App\Tennis;

class TennisController extends Controller
{
    public function index(Request $request)
    {
        $posts = Tennis::all()->sortByDesc('updated_at');
        
        if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        //news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('tennis.index',['headline' => $headline, 'posts' => $posts]);
    }
    
}