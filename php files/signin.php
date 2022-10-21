<?php

if (isset($_POST["submit"])) {

  $email = $_POST["email"];
  $password = $_POST["password"];

  require_once "connection.php";
  require_once "functions.php";

  // If log in fields are empty
  if (emptySignin($email, $password) !== false){
    header("location: login.php?error=emptyinput");
    exit();
  }

  // Login function
  login($handler, $email, $password);

}
else {
  header("location: login.php");
  exit();
}
 ?>
