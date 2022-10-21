<?php
include_once 'header.php';
 ?>
    <!-- Focus this part only -->
    <div class="body">
      <div class="cart-container">
        <div class="cart-list-container">
          <h2 class="product-field">PRODUCT</h2>
          <div class="cart-list">
            <?php
            require 'connection.php';
            if (isset($_POST["addCart"])) {

              if (isset($_SESSION["firstname"]) === false) {
                header("location: login.php?error=loginrequired");
              }

              $customerID = $_SESSION["memberid"];
              $customerName = $_SESSION["firstname"];
              $productID = $_POST["prodID"];
              $productName = $_POST["prodName"];
              $productPrice = $_POST["prodPrice"];
              $prodQuantity = $_POST["qty"];
              $prodSize = $_POST["size"];
              $prodImg = $_POST["prodImg"];

              require 'connection.php';

              $addSQL = "INSERT INTO cart (memberid, custName, productID, productName, productPrice, quantity, size, productImage)
              VALUES(?,?,?,?,?,?,?,?);";
              $stmt = mysqli_stmt_init($handler);
              if (!mysqli_stmt_prepare($stmt, $addSQL)) {
                header("location: error-display2.php");
                exit();
              }

              mysqli_stmt_bind_param($stmt, "ssssssss", $customerID, $customerName, $productID, $productName, $productPrice, $prodQuantity, $prodSize, $prodImg);
              mysqli_stmt_execute($stmt);
              mysqli_stmt_close($stmt);
            }

            if (isset($_SESSION["memberid"])) {
                $memberID = $_SESSION["memberid"];
            }

            $getcartSQL = "SELECT * FROM cart WHERE memberid = ?;";
            $stmt2 = mysqli_stmt_init($handler);

            if (!mysqli_stmt_prepare($stmt2, $getcartSQL)) {
              header("location: error-display2.php");
              exit();
            }

            mysqli_stmt_bind_param($stmt2, "s", $memberID);
            mysqli_stmt_execute($stmt2);

            $getcart = mysqli_stmt_get_result($stmt2);

            $total = 0;

            if ($getcart !== false) {
              while ($cartRow = mysqli_fetch_assoc($getcart)) {
                $img = $cartRow["productImage"];
                $item = $cartRow["productName"];
                $price = $cartRow["productPrice"];
                $size = $cartRow["size"];
                $qty = $cartRow["quantity"];
                $cartid = $cartRow["id"];

                $totalPrice = $price * $qty;
                $total += $totalPrice;

                echo "<div class='cart-section'>
                  <div class='cart-image'>"
                    .$img.
                  "</div>
                  <div class='cart-info'>
                      <h4 class='cart-item-name'>".$item."</h4>
                      <h4 class='cart-item-price'>RM".$price."</h4>
                      <h4 class='cartItemSize'>".$size."</h4>
                      <h4 class='cartItemQuantity'>X".$qty."</h4>
                      <a class='removeItem' onclick='removeItem()' href='remove.php?id=$cartid&total=$total&price=$totalPrice'>Remove</a>
                  </div>
                </div>";
              }
            }
             ?>
          </div>
        </div>
        <div class="cart-summary-container">
          <h2 class="summary-field">SUMMARY</h2> <hr id="summary-line">
          <div class="cart-summary">
            <h3 class="cart-total">TOTAL: RM<?php echo "$total"; ?></h3>
            <form class="checkout-form" action="ordercomplete.php?checkout=<?php echo"$total"; ?>" method="post">
              <button id="checkout-button" type="submit" name="checkout">CHECKOUT</button>
            </form>
            <a class="continueShopping" href="index.php">CONTINUE SHOPPING</a>
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
