<?php

// If submit button is declared
if (isset($_POST['submit'])) {

  // Input variables
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conpassword = $_POST['con_password'];
  $country = $_POST['country'];
  $address1 = $_POST['add1'];
  $address2 = $_POST['add2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $contact = $_POST['contact'];

  //Embed connection to database
  require_once 'connection.php';
  // Embed functions for error handling
  require_once 'functions.php';

  // If one of the form is empty
  if (emptySignup($firstname,$lastname,$email,$password,$conpassword,$address1,$address2,$city,$state,$zip,$contact) !== false){
    header("location: register.php?error=emptyinput");
    exit();
  }

  if (emptyPassword($password, $conpassword)) {
    header("location: register.php?error=emptypassword");
    exit();
  }

  // If first name is invalid
  if (invalidfname($firstname) !== false) {
    header("location: register.php?error=invalidfirstname");
  }
  // If lastname name is invalid
  if (invalidlname($lastname) !== false) {
    header("location: register.php?error=invalidlastname");
  }
  // If email is invalid
  if (invalidEmail($email) !== false){
    header("location: register.php?error=invalidemail");
    exit();
  }
  // If password and confirm password not match
  if (passwordMatch($password, $conpassword) !== false){
    header("location: register.php?error=passwordmismatch");
    exit();
  }
  // If email address is in used
  if (emailExist($handler, $email) !== false){
    header("location: register.php?error=emailused");
    exit();
  }

  // Sign up member if there is no error
  createMember($handler, $firstname,$lastname,$email,$password,$country,$address1,$address2,$city,$state,$zip,$contact);

}
// Else redirect to register page
else {
  header("location: register.php");
}

 ?>
