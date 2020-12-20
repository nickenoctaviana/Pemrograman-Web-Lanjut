<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use \Cache;

class BookController extends Controller
{
    public function books($id){
        $id = 3;
        $value = Cache::remember('liat', now()->addMinutes(5), function () use ($id){
        });
        $articles=Book::find($id);
        return view('book', ['liat'=>$articles])
    }
}
