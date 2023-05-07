<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION['user'])) {
  header('location:index.php');

}
include_once './create/access.php';

?>


<!DOCTYPE html>
<html>

<head>
  <title>TourBuddy Login</title>
  <link rel="stylesheet" type="text/css" href="Login.css" />
  <?php include_once('dependancies.php') ?>
</head>

<body>
  <?php include_once('header.php') ?>
  <div class="login-box">
    <img src="pics/output-onlinepngtools.png" class="avatar" />
    <h1>Sign In</h1>
    <form method="post">
      <label for="username">Username </label>
      <input type="text" id="username" name="username" placeholder="Enter your username or email" />
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" />
      
      <input type="submit" value="Log in" name="envoi" />
    </form>
    <p>don't have an account? Create one !<br> <a href="create/create.php">create a new account</a></p>

  </div>
  <?php include_once('footer.php') ?>
  <!--<script src="home_demo.js"></script> -->
</body>

</html>