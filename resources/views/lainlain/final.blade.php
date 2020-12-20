<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1c604228ee.js" crossorigin="anonymous"></script>

    <title>Keretaku</title>
        </head>
        <body>
        <!-- awal navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand font-weight-bold "style="color: #fafafa" href="/AlyaNicken">Keretaku</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item ">
                    <a class="nav-link " style="color: #fafafa" >1. Pesan </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " style="color: #fafafa" > ⇢ </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" style="color: #fafafa">2. Bayar </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " style="color: #fafafa" > ⇢ </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" style="color: #fafafa">3. Selesai</a>
                </li>
                </ul>
        </div>
        </div>
        </nav>
        <!-- akhir navbar -->

        <!-- Awal Kategori -->
        <div class="container">
        <div class="row mt-5" >
        <div class="col-md-4 ">
        <div class="card" style="height: 350px;">
        <div class="card-body">
            <h5 class="card-title" style="color: #D0560D;font-weight: bold;border-radius: 20px">Detail Pembayaran</h5>
                <br>
                <div class="card" style="height: 130px;">
                <div class="card-body" style="background: #f9fcde;box-shadow: 3px 4px 4px #888888;border-radius: 10px">
                    <h5 class="card-title" >BANK BRI</h5>
                    <small id="passwordHelpInline" class="text-muted">
                    Kode Pembayaran:
                    </small>
                    <h5 class="card-title">1214425014467</h5>
                </div>
                </div>
            <br>
            <br>
            <h6 class="card-subtitle mb-2 " style="color: #D0560D">Total Harga&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rp 12.000.-</h6>
            <center> <small id="passwordHelpInline" class="text-muted">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Selesaikan pembayaran anda sebelum 16.30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    07 Desember 2020
                    </small>
            </center>
        </div>
        </div>
        </div>
        <div class="col-md-8">
        <div class="card mb-3 "style="height:560px">
        <div class="card-body" >
            <h5 class="card-title" style="color: #D0560D">Pembayaran Tiket Kereta Api via ATM BRI</h5>
            <p class="card-text" style="font-size:20px;"><small class="">
            1. Pilih <b>Bahasa</b>, kemudian masukkan <b>PIN ATM</b><br>
            2. Pilih menu <b>Bayar/Beli</b><br>
            3. Pilih menu <b>Lainnya</b><br>
            4. Pilih menu <b>Tiket</b><br>
            5. Pilih menu <b>Kereta Api</b><br>
            6. Masukkan <b>Kode Pembayaran</b><br>
            7. Cek data pemesanan, jika sesuai tekan <b>Benar</b><br>
            8. Transaksi berhasil
            </small></p>
            <h5 class="card-title" style="color: #D0560D">Pembayaran Tiket Kereta Api via Mobile Banking BRI</h5>
            <p class="card-text" style="font-size:20px;"><small class="">
            1. <b>Login</b> Mobile Banking BRI<br>
            2. Pilih menu <b>Pembayaran</b><br>
            3. Pilih menu <b>Tiket</b><br>
            4. Pilih menu <b>Kereta Api</b><br>
            5. Masukkan <b>Kode Pembayaran</b>, klik <b>OK</b>
            </small></p>
            <a class="btns" href="/AlyaNicken" role="button" style="background: #D0560D;color: #ffffff; border: none;">Kembali ke Home</a>
        </div>
        </div>
        </div>
        <!-- Akhir Kategori -->

        <!-- Awal Modal -->
        <div class="modal fade" id="keranjang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Keranjang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" >
                <left>
                <img src="img/keranjang.png" alt="" class="img-responsive" >
                </left>
            </div>
            </div>
        </div>
        </div> 
        <div class="modal fade" id="poin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Poin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body" >
                <left>
                <img src="img/poin.png" alt="" class="img-responsive" >
                </left>
            </div>
            </div>
        </div>
        </div> 
        <!-- Akhir Modal -->

        <!-- Awal Footer -->
        <br>
        <footer class="footer">
            <div class=" text-center pt-3 pb-3" style="font-size: 15px">
            © 2020 Keretaku NICKEN ALYA. All Right Reserved
            </div>
        </footer>
        <!-- Akhir Footer -->

        <!-- Style CSS -->
        <style type="text/css">
            .container-jumbo{
                box-shadow: 5px 4px 8px #888888;
                text-align: center;
                font-family: lucida console;
                height: 20px;
                font-weight: light;
                margin-top: -99px;

            }
            .jumbotrons{
                text-align: center;
                height: 80px;
                margin-top: -45px;
                background: #f7f7f7;
            }
            .jumbotronr{
                height: 35px;
                margin-top: -10px;
                background: #f1a87e;
            }
            .navbar{
                background: #D0560D;
            }
            
            .btns{
                padding: 5px 50px;
                border-radius: 5px;
                
            }
            .navbars{
                margin-top: 10px;
            }
            body{
                background: #f7f8f7;
            }
            .card{
                height:490px;
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