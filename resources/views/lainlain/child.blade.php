@extends('layout.app')
@section('title', 'Profil')
@section('sidebar')
@parent
    <p>Sidebar halaman Profil.</p>
@endsection
@section('content')
    <p>Ini adalah bagian konten. NIM - Nama</p>
@endsection

@extends('layout.app')
@component("alert")
<b>Tulisan ini akan mengisi variabel $slot</b>
@endcomponent