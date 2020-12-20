<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
@extends('layouts.app')
<link href="{{ asset('css/styless.css') }}" rel="stylesheet">
@section('content')
<div class="menu">
            <ul>
            <li><a href="#">BAG</a><li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                    Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/sepatu">Shoes</a>
                    <a class="dropdown-item" href="/baju">Clothes</a>
                    <a class="dropdown-item" href="/tas">Bag</a>
                    </div>
                </li>
            </ul>
        </div>
<div class="container">
        
<div class="container">
    <div class="row justify-content">
        <div class="col-md-12 mb-5">
        </div>
        
        <div class="container ">
            <div class="row ">
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/tas1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Burgundy Leather</h5> <!-- tas 1 -->
                    <p class="card-text">IDR650,000</p>
                    <a class="btns btn-btn-default" href="{{url('https://api.whatsapp.com/send?phone=085850483438')}}" role="button">BELI</a>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/tas2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Round Bag</h5> <!-- tas 2 -->
                    <p class="card-text">IDR649,999</p>
                    <a class="btns btn-btn-default" href="{{url('https://api.whatsapp.com/send?phone=085850483438')}}" role="button">BELI</a>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/tas3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Black Shoulder</h5> <!-- tas 2 -->
                    <p class="card-text">IDR670,000</p>
                    <a class="btns btn-btn-default" href="{{url('https://api.whatsapp.com/send?phone=085850483438')}}" role="button">BELI</a>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/tas4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Brown Latte</h5> <!-- tas 2 -->
                    <p class="card-text">IDR650,000</p>
                    <a class="btns btn-btn-default" href="{{url('https://api.whatsapp.com/send?phone=085850483438')}}" role="button">BELI</a>
                </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Akhir Content -->

        
@endsection
        <style type="text/css">
            .btns{
                background-color: #45156a;
                border: none;
                color: white;
                padding: 1px 58px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                margin: 2px 2px;
            }
            .card-title{
                text-align: center;
            }
            .card-text{
                text-align: center;
            }
            .menu{
                height: 30px;
                text-align: center;
                margin-top: -5px;
            }
            .menu ul{
                display: inline-block;
                list-style: none;
                
            }
            .menu ul li{
                text-align: center;
                float: left;
                font-size: 20px;
                
            }
            .menu ul li a{
                display: block;
                text-decoration: none;
                padding: 0px 20px;
                line-height: 30px;
                color: #45156a;
            }
            .menu ul li a:hover{
                background-color: #fff;
                color: #dec3f3;
            }

        </style>
