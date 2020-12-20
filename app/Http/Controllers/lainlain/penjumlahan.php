<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class penjumlahan extends Controller
{
    public function jumlah(){
        $a=1;
        $b=2;
        $hasil=$a+$b;
        return "Hasil dari penjumlahan ".$a." dan ".$b." adalah ".$hasil;
    }
}
