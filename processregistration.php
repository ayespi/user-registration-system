<?php
echo('>>> Registration Script Initialized...<br>');
if(isset($_POST['register'])){
  //Set local variables
  echo('>>> Setting local variables...<br>');
  $reg_email      = $_POST['registration_email'];
  $reg_firstname  = ucfirst($_POST['registration_firstname']);
  $reg_lastname   = ucfirst($_POST['registration_lastname']);
  $reg_password   = $_POST['registration_password'];
  $reg_password2  = $_POST['registration_password2'];
  echo('>>> Local variables set...<br>');
  //Check for empty variables
  echo('>>> Checking for empty variables...<br>');
  if(empty($reg_email) || empty($reg_firstname) || empty($reg_lastname) || empty($reg_password) || empty($reg_password2)){
    echo('>>> You have empty fields... Please try again...<br>');
  }else{
    echo('>>> Checking for matching passwords...<br>');
    if($reg_password !== $reg_password2){
      echo('>>> Passwords do not match...<br>');
    }else{
      echo('>>> Passwords match...<br>');
      //Encrypt password
      echo('>>> Encrypting password...<br>');
      $reg_password = md5(md5($reg_password));
      echo('>>> Password encryption complete...<br>');
      echo('>>> Validation successful...<br>');
    }
  }
  //Create registration table
  echo('>>> Creating registration table...<br>');
  include('./dbconnect.php');
  include('./classes/RegistrationTable.php');
  new RegistrationTable($connection);
  echo('>>> Adding registration details to database...<br>');
  include('./classes/Registration.php');
  new Registration($connection, $reg_email, $reg_firstname, $reg_lastname, $reg_password);
  // echo('<pre>');
  // print_r($reg);
  // echo('</pre>');
  echo('>>> Registration process complete...<br>');
}
// include('../dbconnect.php');
// include('./classes/RegistrationTable.php');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Process Registration</title>
  </head>
  <body>
    <div class="container">
      <h2>Process Registration</h2>
      <ul>
        <li><?php if($_POST){echo($reg_email);} ?></li>
        <li><?php if($_POST){echo($reg_firstname);} ?></li>
        <li><?php if($_POST){echo($reg_lastname);} ?></li>
        <li><?php if($_POST){echo($reg_password);} ?></li>
        <li><?php if($_POST){echo($reg_password2);} ?></li>
      </ul>
      <p>
        <a href="./register.php">Register</a> |
        <a href="./login.php">Login</a>
      </p>
    </div>
  </body>
</html>
