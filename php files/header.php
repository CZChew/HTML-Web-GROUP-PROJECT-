<?php
// Start session
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script>
      function removeItem() {
        alert("Item Removed");
      }
    </script>
    <meta charset="utf-8">
    <title>ULTI-DRY</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="css/Design/favicon.ico">
  </head>
  <body>
    <div class="head-container">
      <div class="header">
        <a class="logo" href="index.php"><img class="main-logo" height="70px" width="150px" src="css/Design/logo.svg" alt="ulti-logo"></a>
        <nav>
          <a href="index.php" class="nav-button" id="home" >HOME</a>
          <a href="new.php" class="nav-button" id="new" >NEW</a>
          <a href="men.php"  class="nav-button" id="men" >MEN</a>
          <a href="women.php"  class="nav-button" id="women" >WOMEN</a>
        </nav>
        <div class="login">
          <?php
          if (isset($_SESSION["firstname"])) {
            $profileID = $_SESSION["memberid"];
            $profilename = $_SESSION["firstname"];
            $profilelname = $_SESSION["lastname"];
            $profileemail = $_SESSION["Email"];
            $profileadd1 = $_SESSION["add1"];
            $profileadd2 = $_SESSION["add2"];
            $profilecity = $_SESSION["City"];
            $profilestate = $_SESSION["State"];
            $profilezip = $_SESSION["post"];
            $profilephone = $_SESSION["phone"];


            echo "<a class='login-button'style='margin-left:50px'href='profile.php'>$profilename</a>";
          }
          else {
            echo "<a class='login-button' href='login.php'>Login / Sign up</a>";
          }
           ?>
        </div>
        <a class="cart-link" href="cart.php"></a>

      </div>
    </div>
