<?php
session_start();
require("../config.php");

$query = "SELECT * FROM `pinjam`";
$execute = mysqli_query($link,$query);
$conn = new mysqli($host, $username, $password, $dbname);

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
        <div class="mx-auto col-lg-6 col-10">

        <h1>Form Perizinan Event</h1>
          <p class="mb-3">Silahkan isi informasi di bawah ini</p>

          <form class="text-left" method="POST">

            <label for="form17" style="">Nama Event</label>
            <div class="form-group">
              <div class="form-group">
                <input name="event" type="text" class="form-control" required></div>
            </div>

            <label for="form17" style="">Detail Event</label>
            <div class="form-group">
              <div class="form-group">
                <input name="detail" type="text" class="form-control" required></div>
            </div>

            <label for="form17" style="">Tanggal Event</label>
            <div class="form-group">
              <div class="form-group">
                <input name="tanggal" type="date" class="form-control" required></div>
            </div>

            <label for="form17" style="">Nama Organisasi Pelaksana</label>
            <div class="form-group">
              <div class="form-group">
                <input name="organisasi" type="text" class="form-control" required></div>
            </div>

            <label for="form17" style="">Apakah detail acara ini perlu dirahasiakan?</label>
            <div class="form-group">
              <div class="form-group">
                <input name="jenis" type="checkbox" class="form-control" value = "1" checked></div>
            </div>

            <button type="submit" class="btn btn-primary" name="save">Submit</button>
          </form>

          <?php

            if(isset($_POST['save'])){

                  $sql = "INSERT INTO acara (namaEvent, detailEvent, tanggalEvent, organisasi, jenis)
                  VALUES ('".$_POST["event"]."','".$_POST["detail"]."','".$_POST["tanggal"]."','".$_POST["organisasi"]."','".$_POST["jenis"]."')";

                  $result = mysqli_query($conn,$sql);
            }
          ?>

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