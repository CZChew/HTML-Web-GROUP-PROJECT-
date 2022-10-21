<?php

// Function: check empty form
 function emptySignup($firstname,$lastname,$email,$password,$conpassword,$address1,$address2,$city,$state,$zip,$contact) {
  // Create variable for error checking.
  $errorCheck;
  // If fields are empty
  if (empty($firstname || $lastname || $email || $password || $conpassword || $address1 || $address2 || $city || $state || $zip || $contact)) {
    $errorCheck = true;
  }
  else {
    $errorCheck = false;
  }
  return $errorCheck;
}

function emptyPassword($password, $conpassword) {
  if (empty($password || $conpassword)) {
    $errorCheck = true;
  }
  else {
    $errorCheck = false;
  }
  return $errorCheck;
}

// Function: If first name is incorrect
function invalidfname($firstname) {
  $errorCheck;
  // If input does not match the patterns(a-z, A-Z, whitespace)
  if (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
    $errorCheck = true;
  }
  else {
    $errorCheck = false;
  }
  return $errorCheck;
}

// Function: If last name is incorrect
function invalidlname($lastname) {
  $errorCheck;
  if (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
    $errorCheck = true;
  }
  else {
    $errorCheck = false;
  }
  return $errorCheck;
}

// Function: If email is incorrect
function invalidEmail($email) {
  $errorCheck;
  // Built in function to check email
  // If email is not entered properly
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errorCheck = true;
  }
  else {
    $errorCheck = false;
  }
  return $errorCheck;
}

// Function: If password and confirm password are not match
function passwordMatch($password, $conpassword) {
  $errorCheck;
  // if not match
  if ($password !== $conpassword) {
    $errorCheck = true;
  }
  else {
    $errorCheck = false;
  }
  return $errorCheck;
}

// Function: if email address is in used
function emailExist($handler, $email) {
  // sql query
  $sql = "SELECT * FROM ultimember WHERE email = ?;";
  // Initialize a statement for prepare statement
  $stmt = mysqli_stmt_init($handler);
  // If prepare statement fails
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    // Redirect user back to register page
    header("location: register.php?error=stmtfailed");
    exit();
  }
  // Binds variables as parameters to prepared statement
  mysqli_stmt_bind_param($stmt, "s", $email);
  // Execute prepare statement
  mysqli_stmt_execute($stmt);
  // Get data from the database
  $getData = mysqli_stmt_get_result($stmt);

  // Fetch data as an associative array
  // It is true if data is fetched
  if ($dataRow = mysqli_fetch_assoc($getData)) {
    // If input is fetched from the database meaning it already has exist
    // Returning all the data from the database if email exist
    // $dataRow can be used to check for login
    return $dataRow;
    // Data not found returns false
  } else {
    $errorCheck = false;
    return $errorCheck;
  }

  // Close prepare statement
  mysqli_stmt_close($stmt);
}

// Function: Create new Ulti-Member
function createMember($handler, $firstname,$lastname,$email,$password,$country,$address1,$address2,$city,$state,$zip,$contact) {
  // sql query, insert data
  $sql = "INSERT INTO ultimember(fname, lname, email, pass, country, address1, address2, city, state, zip, contact)
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"; // Insert input variables as placeholder
  // Initialize a statement for prepare statement
  $stmt = mysqli_stmt_init($handler);
  // If prepare statement fails
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    // Redirect user back to register page
    header("location: register.php?error=stmtfailed");
    exit();
  }

  // Variable to hash the passwordMatch
  // Secure password, impossible to read
  $hashpass = password_hash($password, PASSWORD_DEFAULT);

  // Binds variables as parameters to prepared statement
  mysqli_stmt_bind_param($stmt, "sssssssssss", $firstname, $lastname, $email, $hashpass, $country, $address1, $address2, $city, $state, $zip, $contact);
  // Execute prepare statement
  mysqli_stmt_execute($stmt);
  // Close prepare statement
  mysqli_stmt_close($stmt);
  // Direct user to signup complete page after registration
  header("location: signup-success.php");
  exit();
}


// LOG IN FUNCTIONS

// Function: Check empty login fields
function emptySignin($email, $password) {
 // Create variable for error checking.
 $errorCheck;
 // If fields are empty
 if (empty($email) || empty($password)) {
   $errorCheck = true;
 }
 else {
   $errorCheck = false;
 }
 return $errorCheck;
}

// Function: Login
function login($handler, $email, $password) {
  // Check if email exist
  $dataexist = emailExist($handler, $email);

  // If email does not exist
  if ($dataexist === false) {
    // Redirect user to login page
    header("location: login.php?error=incorrectlogin");
    exit();
  }

  // If email exist
  // Returns the data in row as an associate array
  // Fetch hashed password from database
  $hashpass = $dataexist["pass"];
  // Check if password and hashed password are matched
  $checkpass = password_verify($password, $hashpass);
  // If password and confirm password do not match
  if ($checkpass === false) {
    header("location: login.php?error=incorrectlogin");
    exit();
  }
  // If password and confirm password are matched
  else if ($checkpass === true) {
    // Start a session to store variables so it can be used in different pages
    // Like displaying account name in pages
    // Grab data and insert into variables
    session_start();
    $_SESSION["memberid"] = $dataexist["memberid"];
    $_SESSION["firstname"] = $dataexist["fname"];
    $_SESSION["lastname"] = $dataexist["lname"];
    $_SESSION["Email"] = $dataexist["email"];
    $_SESSION["add1"] = $dataexist["address1"];
    $_SESSION["add2"] = $dataexist["address2"];
    $_SESSION["City"] = $dataexist["city"];
    $_SESSION["State"] = $dataexist["state"];
    $_SESSION["post"] = $dataexist["zip"];
    $_SESSION["phone"] = $dataexist["contact"];
    // Direct user to home page
    header("location: profile.php");
    exit();
  }
}

function addcartitem($handler, $customerName, $productID, $productName, $productPrice, $prodQuantity, $prodSize, $prodImg) {
  $addSQL = "INSERT INTO cart (custName, productID, productName, productPrice, quantity, size, productImage)
  VALUES(?,?,?,?,?,?,?);";
  $stmt = mysqli_stmt_init($handler);
  if (!mysqli_stmt_prepare($stmt, $addSQL)) {
    header("location: error-display2.php");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sssssss", $customerName, $productID, $productName, $productPrice, $prodQuantity, $prodSize, $prodImg);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: cart.php");
  exit();
}


 ?>
