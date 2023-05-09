<?php if(session_status() === PHP_SESSION_NONE){
    session_start(); 
}?><nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <img src=<?= "../pics/tour.png" ?> style="width:140px;">
    <a class="navbar-brand" href="../index.php" id="logo" style="font-family: 'Rubik', sans-serif;">TourBuddy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class="mx-auto">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Destinations</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../continents/continents.php?name=Africa">Africa</a></li>
              <li><a class="dropdown-item" href="../continents/continents.php?name=Asia">Asia</a></li>
              <li><a class="dropdown-item" href="../continents/continents.php?name=Australia">Australia</a></li>
              <li><a class="dropdown-item" href="../continents/continents.php?name=Europe">Europe</a></li>
              <li><a class="dropdown-item" href="../continents/continents.php?name=North America">North America</a></li>
              <li><a class="dropdown-item" href="../continents/continents.php?name=South America">South America</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link " href="../travel-advice.php" role="button">Travel Advice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../about_us/aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <?php

            if (!isset($_SESSION['user'])) {
              echo '<a class="nav-link" href="../Login.php" id="login">Login';
            } else {
              echo '<a class="nav-link" >', $_SESSION['user'];
            } ?></a>
          </li>
          <?php
          if (isset($_SESSION['user'])) {
            echo '<li class="nav-item">
            <a class="nav-link" href="../logout.php" id="login"> LogOut </a> </li>';
          }
          ?>
          </li>

        </ul>
      </div>
    </div>
  </div>
</nav>
