<?php

$errormsg;

// If error message is declared in get method
if (isset($_GET["error"])) {
  // If error, display error messages
  if ($_GET["error"] == "emptyinput") {
    $errormsg = "Please fill up the form!";
  }
  else if ($_GET["error"] == "emptypassword") {
    $errormsg = "Please enter your password!";
  }
  else if ($_GET["error"] == "invalidfirstname") {
    $errormsg = "Please use a proper name!";
  }
  else if ($_GET["error"] == "invalidlastname") {
    $errormsg = "Please use a proper name!";
  }
  else if ($_GET["error"] == "invalidemail") {
    $errormsg = "This is not an email!";
  }
  else if ($_GET["error"] == "passwordmismatch") {
    $errormsg = "Password and confirm password do not match!";
  }
  else if ($_GET["error"] == "emailused") {
    $errormsg = "This email address is already in use!";
  }
  else if ($_GET["error"] == "stmtfailed") {
    $errormsg = "There is an error, please try again later.";
  }
  else if ($_GET["error"] == "incorrectlogin") {
    $errormsg = "Incorrect email or password";
  }
  else if ($_GET["error"] == "loginrequired") {
    $errormsg = "Login to purchase items";
  }
}
else {
  $errormsg = " ";
}

 ?>
