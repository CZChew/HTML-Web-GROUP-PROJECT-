<?php include_once "header.php"; ?>
    <div class="profile-container">
      <div class="profile-body">
        <div class="profile-header">
          <h1 id="profileHeader" >MY PROFILE</h1>
        </div>
        <div class="profile-content">
          <div class="profile">
            <h2 class="profile-info" >Name</h2>
            <?php echo "<h3>".$profilename." ".$profilelname."</h3>"; ?>
          </div>
          <div class="profile">
            <h2 class="profile-info">Email</h2>
            <?php echo "<h3>".$profileemail."</h3>"; ?>
          </div>
          <div class="profile">
            <h2 class="profile-info">Address</h2>
            <?php echo "<h3>".$profileadd1.",</h3>"; ?>
            <?php echo "<h3>".$profileadd2.",".$profilecity.",".$profilestate."</h3>"; ?>
          </div>
          <div class="profile">
            <h2 class="profile-info">Postal Code</h2>
            <?php echo "<h3>".$profilezip."</h3>"; ?>
          </div>
          <div class="profile">
            <h2 class="profile-info">Phone</h2>
            <?php echo "<h3>".$profilephone."</h3>"; ?>
          </div>
          <div class="profile">
            <div class="profile-link">
              <a href="index.php" id="shopLink" >SHOP</a>
              <a href="logout.php" id="logoutLink" >LOG OUT</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="footer">
      <div class="information5">
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
