<?php
//konfigurasi mysql dengan php

$host		= "localhost";
$username	= "root";
$password	= "";
$dbname		= "lkcloud";

$link = mysqli_connect($host, $username, $password, $dbname)
			or die("Salah sever, nama pengguna, atau password!");

?>
