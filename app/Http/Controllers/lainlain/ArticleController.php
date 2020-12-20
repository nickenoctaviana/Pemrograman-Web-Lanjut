<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use \Cache;

class ArticleController extends Controller
{
    public function article($id){
        $id=2;
        $value=Cache::remember('hasil', now()->addMinutes(5), function() use($id){
        });
        $hasil = Article::find($id);
        return view('post',['hasil'=>$hasil]);
    }
}
