<?php
include_once "header.php";
 ?>
<head>
    <meta charset="utf-8">
    <title>ULTI-DRY</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="css/Design/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="head-container">
      <div class="header">
        <a class="logo" href="index.html"><img class="main-logo" height="70px" width="150px" src="css/Design/logo.svg" alt="ulti-logo"></a>
        <nav>
          <a href="new.php" class="nav-button">NEW</a>
          <a href="men.php"  class="nav-button">MEN</a>
          <a href="women.php"  class="nav-button">WOMEN</a>
          <a href="#"  class="nav-button">SALE</a>
        </nav>
        <div class="login">
          <a class="login-button" href="login.php" "signin.php" "register.php">Login / Sign up</a>
        </div>
        <a class="cart-link" href="cart.php"></a>
        <div class="search">
          <input type="text" onfocus="this.value="" name="search" value="Search">
          <input id="search-icon" type="image" src="css/Design/search-icon.svg" height="24px" width="24px" alt="search">
        </div>
      </div>
    </div>

    <div class="body">
      <div class="slideContainer">
        <div class="previewImg">
          <a class="image-link" href="login.php"><img class="home-image" src="css/images/joinus.jpg" alt="join-us-img"></a>
        </div>
        <div class="previewImg">
          <a class="image-link" href="aboutus.php"><img class="home-image" src="css/images/aboutus.jpg" alt="about-us-img"></a>
        </div>
        <div class="previewImg">
          <a class="image-link" href="new.php"><img class="home-image" src="css/images/sample-image2.jpg" alt="brand-new-img"></a>
        </div>

        <a class="prev-slide" onclick="clickSlide(-1)">&#10094;</a>
        <a class="next-slide" onclick="clickSlide(1)">&#10095;</a>
        <script type="text/javascript" src="slide.js">

        </script>
      </div>

    <div class="footer">
      <div class="information">
        <div class="about-us">
          <a class="footer-link" id="about" href="aboutus.php">About Us</a>
        </div>
        <div class="faq">
          <a class="footer-link" id="faq" href="faq.php">FAQ</a>
        </div>
        <div class="policy">
          <a class="footer-link" id="policy" href="policy.php">Return Policy</a>
        </div>
      </div>
      <div class="social-media">
        <h3 class="follow-header" >Follow us on</h3>
        <div class="media-links">
          <div class="facebook">
            <a class="facebook-link" href="https://www.facebook.com/profile.php?id=100070298860230"></a>
          </div>
          <div class="instagram">
            <a class="instagram-link" href="https://www.instagram.com/ultidry/?utm_medium=copy_link"></a>
          </div>
          <div class="twitter">
            <a class="twitter-link" href="https://twitter.com/ultidry"></a>
          </div>
        </div>
      </div>
      <div class="copyright-section">
        <div class="copyright-words">
          <small class="copyright">&#169;2021 Ulti-Dry Malaysia, Inc.- All rights reserved.</small>
        </div>
      </div>
    </div>
  </body>
  </html>
