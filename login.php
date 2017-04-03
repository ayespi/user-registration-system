<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="./processlogin.php" method="POST" style="width:30%;">
      <fieldset>
        <legend>Enter Login Details:</legend>
        <p>
          <label for="login_email">Email Address</label><br>
          <input id="login_email" type="text" name="login_email">
        </p>
        <p>
          <label for="login_password">Password</label><br>
          <input id="login_password" type="password" name="login_password">
        </p>
        <p>
          <input type="submit" name="login" value="Login">
        </p>
      </fieldset>
    </form>
    <p>
      <a href="./index.php">Home</a> |
      <a href="./register.php">Register</a>
    </p>
    <script type="text/javascript">

    </script>
  </body>
</html>
