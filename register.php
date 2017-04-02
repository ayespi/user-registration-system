<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration Page</title>
  </head>
  <body>
    <h1>Register</h1>
    <form action="./processregistration.php" method="POST" style="width:30%;">
      <fieldset>
        <legend>Enter Registration Details:</legend>
        <p>
          <label for="registration_email">Email Address</label><br>
          <input id="registration_email" type="text" name="registration_email">
        </p>
        <p>
          <label for="registration_firstname">First Name</label><br>
          <input id="registration_firstname" type="text" name="registration_firstname">
        </p>
        <p>
          <label for="registration_lastname">Last Name</label><br>
          <input id="registration_lastname" type="text" name="registration_lastname">
        </p>
        <p>
          <label for="registration_password">Password</label><br>
          <input id="registration_password" type="password" name="registration_password">
        </p>
        <p>
          <label for="registration_password2">Confirm Password</label><br>
          <input id="registration_password2" type="password" name="registration_password2">
        </p>
        <p>
          <input type="submit" name="register" value="Submit Registration">
        </p>
      </fieldset>
    </form>
    <p>
      <a href="./index.php">Home</a> |
      <a href="./login.php">Login</a>
    </p>
    <script type="text/javascript">
      
    </script>
  </body>
</html>
