<?php
include_once 'header.php';
 ?>

    <!-- Focus this part only -->
    <div class="body">
      <div class="product-container">
        <div class="product-image-container">
          <div class="product-preview">
            <img src="css/images/hoodie8-model.jpg" id="women-zip-hoodie" name="womenziphoodie" alt="Women's Crop Hoodie">
            <img src="css/images/hoodie8-front.jpg" id="women-zip-hoodie" name="womenziphoodie" alt="Women's Crop Hoodie">
            <img src="css/images/hoodie8-back.jpg" id="women-zip-hoodie" name="womenziphoodie" alt="Women's Crop Hoodie">
          </div>
        </div>
        <div class="product-pricing-container">
          <div class="product-pricing">
            <h2 class="product-banner">Women's Crop Hoodie</h2> <hr id="product-line">
            <p class="prodPrice" >Price: RM 59.99</p>
            <form class="addToCart" action="cart.php" method="post">
              <select class="size-select" name="size">
                <option>-- Select Size --</option>
                <option value="XS">XS</option>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
              </select>
              <label class="labelQuan" for="prodQuan">Quantity</label>
              <input type="number" min="1" max="100" class="product-quantity" id="prodQuan" name="qty">
              <input type="hidden" name="prodID" value="15">
              <input type="hidden" name="prodName" value="Women's Crop Hoodie">
              <input type="hidden" name="prodPrice" value="59.99">
              <input type="hidden" name="memberNUM" value="<?php echo ".$profileID.";?>">
              <input type="hidden" name="prodImg" value="<img class='cart-item' src='css/images/hoodie8-front.jpg' alt='item15'>">
              <br>
                <button id="addCart-button" type="submit" name="addCart">ADD TO CART</button>
            </form>
          </div>
          <div class="product-information">
            <p class="prodInformation" >This minimalistic crop hoodie is one that can go well with any outfit you have in your wardrobe. This crop hoodie is also one that you can wear at any time of the week, especially for your night out with friends.</p>
            <ul>
              <li>100% cotton</li>
              <li>Front pouch pocket</li>
              <li>Signature logo patch</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->

    <div class="footer">
      <div class="information9">
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
