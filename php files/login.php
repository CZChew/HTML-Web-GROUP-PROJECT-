<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ULTI-DRY</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="css/Design/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
  </head>
  <body>

    <?php
    require_once "display_error.php";
     ?>

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
          <a class="login-button" href="login.php">Login / Sign up</a>
        </div>
        <a class="cart-link" href="cart.php"></a>
      </div>
    </div>


    <div class="login-body">
      <div class="form-container">
        <h2 id="account-header" >ACCOUNT</h2>
        <div class="signin">
          <form class="signin-form" action="signin.php" method="post">
            <label class="login-label" for="email">Email </label>
            <input type="email" name="email" id="email">
            <label class="login-label" for="password">Password </label>
            <input type="password" name="password" id="password">
            <button type="submit" name="submit" id="login-button">SIGN IN</button>
            <?php echo "<h3 style='color:red; height:50px;' >$errormsg</h3>"; ?>
          </form>
        </div>
        <h2 id="account-header" >NEW CUSTOMER</h2>
        <div class="signup">
          <h3 id="account-create">Enjoy exclusives and discounts by creating a personal account</h3>
          <a class="create-member" href="register.php">BE ULTI-MEMBER</a>
        </div>
      </div>
    </div>


    <div class="footer">
      <div class="information3">
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
            <a class="instagram-link" href="https://instagram.com/ultidry?utm_medium=copy_link"></a>
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
