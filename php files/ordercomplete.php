<?php
include_once "header.php";

if (isset($_POST["checkout"])) {
  if ($_GET["checkout"] == 0) {
    echo "<script>
    alert('Please shop before checking out!');
    window.location.href='index.php';
    </script>";
  }
}
 ?>
    <div class="body">
      <div class="preview-ordercomplete">
        <h1 class="orderComplete">ORDER COMPLETE</h1>
        <a class="goback" href="index.php">GO BACK</a>
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
