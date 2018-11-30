<?php
session_start();
require("../config.php");

$query = "SELECT * FROM `aset`";
$execute = mysqli_query($link,$query);
$tolong = "1";

$_SESSION["nim"] = "18216020";

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-2 text-center text-uppercase" style="">LK Cloud</h1>
          <p class="text-monospace text-center">Mempermudah Anda dalam melaksanakan kegiatan di kampus</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="">
    <div class="container justify-content-center"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar9">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar9">
        <ul class="navbar-nav">
        <li class="nav-item mx-2"> <a class="nav-link" href="home_pengguna.php">Home</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="peminjaman.php">Peminjaman</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="perizinan.php">Perizinan</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="tentang_kami.php">Tentang kami</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="login.php">Logout</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4"><a class="btn btn-dark btn-block" href="#">Room</a></div>
        <div class="col-md-4"><a class="btn btn-dark btn-block" href="#">Field</a></div>
        <div class="col-md-4"><a class="btn btn-dark btn-block" href="#">Item</a></div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 p-0"><img class="img-fluid d-block" src="../public/pict/gku barat.jpg"></div>
        <div class="p-5 col-lg-7 d-flex flex-column justify-content-center">
          <h3 class="display-4 mb-3 text-center text-white"><b>GKU Barat</b></h3>
          <p class="lead mb-0 text-center" style="">Terletak di sebelah barat kampus</p>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6"><a class="btn btn-primary btn-block" href="#">See availability</a></div>
                <div class="col-md-6"><a class="btn btn-primary btn-block" href="form_peminjaman_asset.php">Request for loaning</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid d-block" src="../public/pict/317017012_bb7a9dbcbc_z.jpg"></div>
        <div class="p-5 col-lg-6 d-flex flex-column justify-content-center">
          <h3 class="display-4 mb-3 text-center text-white"><b>Labtek V</b></h3>
          <p class="lead mb-0 text-center" style="">Di tengah-tengah ITB dekat Plaza Widya Nusantara</p>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6"><a class="btn btn-primary btn-block" href="#">See availability</a></div>
                <div class="col-md-6"><a class="btn btn-primary btn-block" href="form_peminjaman_asset.html">Request for loaning</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-6"><img class="img-fluid d-block" src="../public/pict/aula barat.jpg"></div>
        <div class="p-5 col-lg-6 d-flex flex-column justify-content-center">
          <h3 class="display-4 mb-3 text-center text-white"><b>Aula Barat</b></h3>
          <p class="lead mb-0 text-center" style="">Di sebelah barat gerbang utama ITB</p>
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6"><a class="btn btn-primary btn-block" href="#">See availability</a></div>
                <div class="col-md-6"><a class="btn btn-primary btn-block" href="form_peminjaman_asset.html">Request for loaning</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>