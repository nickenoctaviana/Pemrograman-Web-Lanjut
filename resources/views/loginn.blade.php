<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1c604228ee.js" crossorigin="anonymous"></script>

    <title>BELIO.</title>
  </head>
  <body>
        <!-- Awal Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mr-4">
                    <li class="nav-item active">
                        <a class="nav-link" href="/login">
                        <i class="fas fa-user-circle fa-2x" style="color: #dec3f3"></i> <!-- icon user -->
                        <span class="sr-only">(current)</span></a>

                    </li>
                </ul>
            </div>
            <!-- awal search bar -->
            <div class="search">
                <input class="form " type="text" placeholder="Search" aria-label="Search">
                <button class="btn " type="submit"><i class="fas fa-search fa-1.5x" style="color: #fff"></i></button>
            </div>
            <!-- akhir search bar -->
            <a class="navbar-brand font-weight-bold "style="color: #45156a" href="">Belio.</a> <!-- Brand -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <!-- Akhir Navbar -->

        <!-- Awal Jumbotron -->
        <div class="jumbotron jumbotron-fluid bg-white">
            <div class="container-jumbo">
                <h5 class="display-4"></h5>
            </div>
        </div>
        <!-- Akhir Jumbotron -->

        <!-- Awal Menu -->
        <div class="menu">
            <ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">
                    Kategori
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Shoes</a>
                    <a class="dropdown-item" href="#">Clothes</a>
                    <a class="dropdown-item" href="#">Bag</a>
                    </div>
                </li>
                <li><a href="#">Semua</a><li>
            </ul>
        </div>
        <!-- Akhir Menu -->

        <!-- Awal Carousel -->
        <div class="container mt-4">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/web1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Rose of Summer</h5>
                <p>This exclusive skirt only for you</p>
                
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/web2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Burgundy Leather</h5>
                <p>Turning into vintage looks</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/web3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Leona Heels</h5>
                <p>Elegant heels with signature brown</p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        </div>
        <!-- Akhir Carousel -->

        <!-- Awal Content -->
        <div class="container ">
            <div class="row ">
                <div class="col-md-3 mb-2">
                <div class="card" >
                <img src="img/spt1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Leona Heels</h5> <!-- sepatu 1 -->
                    <p class="card-text">IDR499,999</p>
                    <button type="button" class="btns btn-btn-default" data-toggle="modal" data-target="#sepatu1">QUICK SHOP</button>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/spt2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Ruby Heels</h5> <!-- sepatu 2 -->
                    <p class="card-text">IDR499,999</p>
                    <button type="button" class="btns btn-btn-default" data-toggle="modal" data-target="#sepatu2">QUICK SHOP</button>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/bj1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Rose Skirt</h5> <!-- baju 1 -->
                    <p class="card-text">IDR349,999</p>
                    <button type="button" class="btns btn-btn-default" data-toggle="modal" data-target="#baju1">QUICK SHOP</button>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/tas1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Burgundy Leather</h5> <!-- tas 1 -->
                    <p class="card-text">IDR650,000</p>
                    <button type="button" class="btns btn-btn-default" data-toggle="modal" data-target="#tas1">QUICK SHOP</button>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/tas2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Round Bag</h5> <!-- tas 2 -->
                    <p class="card-text">IDR649,999</p>
                    <button type="button" class="btns btn-btn-default" data-toggle="modal" data-target="#tas2">QUICK SHOP</button>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/bj2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Amoera Dress</h5> <!-- baju 2 -->
                    <p class="card-text">IDR980,000</p>
                    <button type="button" class="btns btn-btn-default" data-toggle="modal" data-target="#baju2">QUICK SHOP</button>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/bj3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Color Sun</h5> <!-- baju 3 -->
                    <p class="card-text">IDR599,999</p>
                    <button type="button" class="btns btn-btn-default" data-toggle="modal" data-target="#baju3">QUICK SHOP</button>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-2 ">
                <div class="card" >
                <img src="img/spt6.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Jasmine Heels</h5> <!-- sepatu 3 -->
                    <p class="card-text">IDR499,999</p>
                    <button type="button" class="btns btn-btn-default" data-toggle="modal" data-target="#sepatu3">QUICK SHOP</button>
                </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Akhir Content -->

        <!-- Awal Modal PopUp -->
        <!-- Modal 1 -->
        <div class="modal fade" id="sepatu1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" >
                <left>
                <img src="img/sps1.jpg" alt="" class="img-responsive" >
                </left>
            </div>
            <div class="modal-footer">
                <button type="button" class="btns btn-default" data-dismiss="modal">Add to Cart</button>	
            </div>
            </div>
        </div>
        </div> 
        <!-- Modal 2 -->
        <div class="modal fade" id="sepatu2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <left>	
                    <img src="img/sps2.jpg" alt="" class="img-responsive">
                </left>
            </div>
            <div class="modal-footer">
                <button type="button" class="btns btn-default" data-dismiss="modal">Add to Cart</button>	
            </div>
            </div>
        </div>
        </div> 
        <!-- Modal 3 -->
        <div class="modal fade" id="baju1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <left>	
                    <img src="img/bjz1.jpg" alt="" class="img-responsive">
                </left>
            </div>
            <div class="modal-footer">
                <button type="button" class="btns btn-default" data-dismiss="modal">Add to Cart</button>	
            </div>
            </div>
        </div>
        </div>
        <!-- Modal 4 -->
        <div class="modal fade" id="tas1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <left>	
                    <img src="img/tsz1.jpg" alt="" class="img-responsive">
                </left>
            </div>
            <div class="modal-footer">
                <button type="button" class="btns btn-default" data-dismiss="modal">Add to Cart</button>	
            </div>
            </div>
        </div>
        </div>
         <!-- Modal 5 -->
         <div class="modal fade" id="tas2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <left>	
                    <img src="img/tsz2.jpg" alt="" class="img-responsive">
                </left>
            </div>
            <div class="modal-footer">
                <button type="button" class="btns btn-default" data-dismiss="modal">Add to Cart</button>	
            </div>
            </div>
        </div>
        </div>
         <!-- Modal 6 -->
         <div class="modal fade" id="baju2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <left>	
                    <img src="img/bjz2.jpg" alt="" class="img-responsive">
                </left>
            </div>
            <div class="modal-footer">
                <button type="button" class="btns btn-default" data-dismiss="modal">Add to Cart</button>	
            </div>
            </div>
        </div>
        </div>
         <!-- Modal 7 -->
         <div class="modal fade" id="baju3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <left>	
                    <img src="img/bjz3.jpg" alt="" class="img-responsive">
                    
                </left>
            </div>
            <div class="modal-footer">
                <button type="button" class="btns btn-default" data-dismiss="modal">Add to Cart</button>	
            </div>
            </div>
        </div>
        </div>
         <!-- Modal 8 -->
         <div class="modal fade" id="sepatu3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <left>	
                    <img src="img/sps3.jpg" alt="" class="img-responsive">
                </left>
            </div>
            <div class="modal-footer">
                <button type="button" class="btns btn-default" data-dismiss="modal">Add to Cart</button>	
            </div>
            </div>
        </div>
        </div>


        <!-- Akhir Modal PopUp -->

        <!-- Awal Footer -->
        <br>
        <footer class="footer">
            <div class=" text-center pt-3 pb-3">
            Nicken Octaviana .2020
            </div>
        </footer>
        <!-- Akhir Footer -->

        <!-- Style CSS -->
        <style type="text/css">
            .carousel-item{
                height: 500px;
                text-align: center;
                font-family: lucida console;
            }
            .navbar-brand{
                font-family: lucida console;
                font-size: 30px;
                color: #45156a;
            }
            .nav-item{
                font-size: 20px;
            }
            .nav-link:hover{
                color: #45156a;
            }
            .btn-info{
                padding: 5px 40px;
                background-color: black;
                color: white;
                font-size: 15px;
                border: none;
                font-weight: bold;
            }
            .jumbotron{
                text-align: center;
                font-family: lucida console;
                height: 20px;
                font-weight: light;
                margin-top: -95px;
            }
            .container-jumbo{
                box-shadow: 5px 4px 8px #888888;
                padding: 10px;
                border: none solid;
            }
            *{
                padding: 0px;
                margin: 0px;
            }
            .menu{
                height: 30px;
                text-align: center;
                margin-top: -35px;
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
            .search{
                position: absolute;
                height: 40px;
                border: none;
                background: #dec3f3;
                border-radius: 40px;
                padding: 10px;
                left: 140px;
                margin-top: -5px;
                color: #dec3f3;
            }
            .search:hover > .form{
                width: 140px;
                padding: 0 7px;
            }
            .search:hover > .btn{
                background: #45156a;
            }
            .btn{
                color: #ffff;
                float: right;
                width: 30px;
                height: 30px;
                border-radius: 50px;
                background: #dec3f3;
                justify-content: center;
                align-items: center;
                display: flex;
                margin-top: -5px;
            }.form{
                border: none;
                background: none;
                outline: none;
                float: left;
                padding: 0;
                color: white;
                font-size: 15px;
                transition: 0.4s;
                width: 0;
            }
            .card{
                margin-top: 40px;
            }
            .card-title{
                text-align: center;
            }
            .card-text{
                text-align: center;
            }
            .footer{
                width: 100%;
                height: 100px;
                line-height: 50px;
                background: #333;
                color: #fff;
            }
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

        </style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>
