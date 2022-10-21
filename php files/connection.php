<?php
$servername = "127.0.0.1";
$serverusername = "root";
$serverpassword = NULL;
$dbname = "ultidb";

$handler = mysqli_connect($servername,$serverusername,$serverpassword,$dbname);

if (!$handler) {
  die("Connection failed: " . mysqli_connect_error());
}

 ?>
