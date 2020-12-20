<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $dtBarang = Barang::all();
        return view('admin', compact('dtBarang'));
        
}
    public function create()
    {
        return view('createbarang');
    }
    public function store(Request $request)
    {
        //dd($request->all());
    Barang::create([
        'nama_barang' => $request->nama_barang,
        'gambar' => $request->gambar,
        'harga' => $request->harga,
    ]);
        return redirect('admin');
    }
    public function edit($id)
    {
        $bar = Barang::findorfail($id);
        return view('edit',compact('bar'));
    }
    public function update(Request $request,$id)
    {
        $bar = Barang::findorfail($id);
        $bar->update($request->all());
        return redirect('admin');
    }
    public function destroy($id)
    {
        $bar = Barang::findorfail($id);
        $bar->delete();
        return back();
    }
}