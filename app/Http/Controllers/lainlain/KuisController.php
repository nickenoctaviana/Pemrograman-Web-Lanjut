<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuisController extends Controller
{
    public function kuis(){
        return view ('kuis');
    }
    public function profil(){
        return view ('profil');
    }
    public function kontak(){
        return view ('kontak');
    }
}
