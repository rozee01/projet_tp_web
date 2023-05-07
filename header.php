<?php if (session_status() === PHP_SESSION_NONE) {
  session_start();
} ?>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" id="navbar">
  <div class="container-fluid">
    <img src="../pics/tour.png" style="width:140px;">

    <a class="navbar-brand" href="index.php" id="logo" style="font-family: 'Rubik', sans-serif;">TourBuddy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class="mx-auto">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Destinations</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="continents/dest_africa.php">Africa</a></li>
              <li><a class="dropdown-item" href="continents/dest_as.php">Asia</a></li>
              <li><a class="dropdown-item" href="continents/dest_eu.php">Australia</a></li>
              <li><a class="dropdown-item" href="continents/dest_eu.php">Europe</a></li>
              <li><a class="dropdown-item" href="continents/dest_amn.php">North America</a></li>
              <li><a class="dropdown-item" href="continents/dest_ams.php">South America</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="travel-advice.php" role="button">Travel Advice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about_us/aboutus.php">About Us</a>
          </li>
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Compte</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Login.php">Log In</a></li>
              <li><a class="dropdown-item" href="create/create.php">Sign In</a></li>
            </ul>
          </li>     
          <li class="nav-item">
            <?php

            if (!isset($_SESSION['user'])) {
              echo '<a class="nav-link" href="Login.php" id="login">Login';
            } else {
              echo '<a class="nav-link" >', $_SESSION['user'];
            } ?></a>
          </li>
          <?php
          if (isset($_SESSION['user'])) {
            echo '<li class="nav-item">
            <a class="nav-link" href="logout.php" id="login"> LogOut </a> </li>';
          }
          ?>

          </li>


        </ul>
      </div>

    </div>
  </div>
</nav>
<script type="text/javascript">
  var nav = document.querySelector("nav");
  window.addEventListener("scroll", function() {
    if (window.pageYOffset > 100) {
      nav.classList.add("bg-light", "shadow");
    } else {
      nav.classList.remove("bg-light", "shadow");
    }
  });
</script>