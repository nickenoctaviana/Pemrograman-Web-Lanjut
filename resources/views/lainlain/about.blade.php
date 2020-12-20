@extends('master')
@section('judul')
@parent
<p>Pemograman Web Lanjut</p>
@endsection
@section('konten')
    <h3><b>Data Diri</b></h3>
@endsection
@section('isi')
<div class="a">
    <p>Nama     : Nicken Octaviana</p>
    <p>NIM      : 1931710114</p>
    <p>Kelas    : MI-2D</p>
    <p>Alamat   : Jl. Sawunggaling, Mojoanyar, Bareng, Jombang</p>
</div>
@endsection
<br>
@section('akhir')
    <p>Terima Kasih Telah Berkunjung</p>
@endsection

<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
<link href="{{ asset("css/blog-home.css") }}" rel="stylesheet">

<style type="text/css">
body{
    background-color:#d8bfd8;
    text-align:center;
}
div.a{
    text-align: left;
    margin-left:440;
    margin-right:440;
}
</style>
