<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" id="navbar">
  <div class="container-fluid">
    <img src= "../pics/tour.png"  style="width:140px;">
    <a class="navbar-brand" href="../index.php" id="logo" style="font-family: 'Rubik', sans-serif;">TourBuddy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class="mx-auto">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown">Destinations</a>
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
            <a class="nav-link " href="../projet_tp_web/travel-advice.php" role="button">Travel Advice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../projet_tp_web/about_us/aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../projet_tp_web/Login.php" id="login">Log In</a>
          </li>
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
      nav.classList.add("bg-light","shadow");
    } else {
      nav.classList.remove("bg-light", "shadow");
    }
  });
</script>