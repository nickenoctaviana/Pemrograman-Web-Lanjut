<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Awal Navbar -->
    <header>
        <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#">Nicken <b>Octaviana</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="kuis">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontak">Kontak</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
        </div>
    </header>
<!-- Akhir Navbar -->

<!-- Awal Jumbotron -->
  <section class="jumbotron-bg">
    <div class="jumbotron warna-bg text-white">
      <div class="container">
        <h1 class="display-4">Contact Saya</h1>
      </div>
    </div>
  </section>
  <style type="text/css">
  .warna-bg{
    background-image: radial-gradient( circle farthest-corner at 5.6% 54.5%,  rgba(47,71,79,1) 0%, rgba(159,188,198,1) 83.6% );
  }
  </style>
<!-- Akhir Jumbotron -->

<!-- Awal Content -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 mb-4"> <!-- awal 8 -->
        <div class="card">
         <div class="card-body">
          <div class="alert alert-secondary" role="alert">
             Apakah ada saran dan pertanyaan mengenai web ini?
          </div>
          <form>
            <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="input email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="input nama">
            </div>
            <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <div class="form-group">
            <label for="nama">Alamat</label>
            <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-info" > Submit</button>
          </form>
         </div>
        </div>
      </div> <!-- akhir 8 -->
    <div class="col-md-4 mb-4"><!-- awal 4 -->
      <div class="card">
        <div class="card-body bg-light">
           <h5>Apakah anda tertarik dengan web saya?</h5>
           <p>Dapatkan update web saya sebagai hiburan semata</p>
           <form>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="*Nama">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="*Email">
            </div>
            <button class="btn btn-info btn-lg" href="#" role="button">Ya, Saya Mau</button>
           </form>
        </div>
      </div>
    </div><!-- akhir 4 -->
    </div>
  </div>
<!-- Akhir Content -->

<!-- Awal Footer -->
  <footer class="warna-bg">
    <div class="text-white text-center pt-3 pb-3">
      Nicken Octaviana .2020
    </div>
  </footer>
<!-- Akhir Footer -->

