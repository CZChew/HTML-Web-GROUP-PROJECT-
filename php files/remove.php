<?php
include 'connection.php';

$removeID = $_GET["id"];
$removeSQL = "DELETE FROM cart WHERE id = '$removeID';";
$stmt = mysqli_stmt_init($handler);

$remove = mysqli_query($handler, $removeSQL);
header("location: cart.php");
 ?>
