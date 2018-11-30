<?php
session_start();
require("../config.php");

$query = "SELECT * FROM `acara`";
$execute = mysqli_query($link,$query);
$conn = new mysqli($host, $username, $password, $dbname);
$id = 0;
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}
</style>

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
          <li class="nav-item mx-2"> <a class="nav-link" href="home_admin.php">Home</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="list_acara.php">List Acara</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="list_aset.php">List Pinjam Aset</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="admin_daftar_acara.php">Konfirmasi Acara</a> </li>
          <li class="nav-item mx-2"> <a class="nav-link" href="admin_daftar_asset.php">Konfirmasi Peminjaman Aset</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <form class="text-left" method="POST">
                <table class="table">
                <thead>
                    <tr>
                    <th>Nama Acara</th>
                    <th>Detail Acara</th>
                    <th>Tanggal</th>
                    <th>Organisasi</th>
                    <th>Terima</th>
                    <th>Tolak</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while ($row = mysqli_fetch_array($execute)){
                    $terima = "Terima" . $row['IDEvent'];
                    $tolak = "Tolak" . $row['IDEvent'];
                    $something = $row['IDEvent'];
                ?>
                <tr>
                <td><?= $row['namaEvent'] ?></td>
                <td><?= $row['detailEvent'] ?></td>
                <td><?= $row['tanggalEvent'] ?></td>
                <td><?= $row['organisasi'] ?></td>
                <td> <button id = "yes" class="btn btn-primary" type = "submit" name = "<?php echo $terima?>"> Yes </button> </td>
                <td> <button id = "no" class="btn btn-primary" type = "submit" name = "<?php echo $tolak?>"> No </button> </td>
                </tr>
                
                <?php
                
                if(isset($_POST[$terima])){
                    
                    $sql = "UPDATE acara SET kondisi = 'OK' WHERE IDEvent = '$something'";
                    $result = mysqli_query($conn,$sql);
                }
                
                if(isset($_POST[$tolak])){

                    $sql = "UPDATE acara SET kondisi = 'TOLAK' WHERE IDEvent = '$something'";
                    $result = mysqli_query($conn,$sql);
                }

                }
                ?>
                </tbody>
                </table>

                <!-- The Modal -->
                <div id="myModal1" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Acara Diterima</h2>
                    </div>
                    <div class="modal-body">
                    <p>Some text in the Modal Body</p>
                    <p>Some other text...</p>
                    </div>
                    <div class="modal-footer">
                    <h3>Modal Footer</h3>
                    </div>
                </div>

                </div>

                <!-- The Modal -->
                <div id="myModal2" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <div class="modal-header">
                    <span class="close">&times;</span>
                    <h2>Acara Ditolak</h2>
                    </div>
                    <div class="modal-body">
                    <p>Some text in the Modal Body</p>
                    <p>Some other text...</p>
                    </div>
                    <div class="modal-footer">
                    <h3>Modal Footer</h3>
                    </div>
                </div>

                </div>
            </form> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>