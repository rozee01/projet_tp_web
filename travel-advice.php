<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Advice</title>

    <!-- including general dependancies -->
    <?php include_once ('dependancies.php') ; ?>

    <link rel="stylesheet" href="travel-advice/styles.css">
</head>

<body>
    <!--navbar start-->

    <?php include_once('header.php') ; ?>

    <!--navbar end-->

    <div class="home">
        <div class="content container ">
            <br>
            <div class="container">
                <h2 id="welcome">Travel Smarter: The Importance of Travel Tips</h2>
                <br> <br> <br>
                <p> Travel tips can make all the difference when it comes to having a smooth and enjoyable trip. From
                    packing smarter to staying safe, these insights can help you make the most of your journey and
                    create
                    unforgettable memories. So before you set off on your next adventure, take some time to gather some
                    travel tips and ensure a stress-free trip.</p>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4 ">
                <a href="#packing" class="no-decoration">
                    <div class="card btn btn-outline-success">
                        <img src="pics/packing.png" class="card-img-top" alt="Photo 1">
                        <div class="card-body">
                            <h5 class="card-title">Packing tips</h5>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4 mb-4">
                <a href="#budget" class="no-decoration">
                    <div class="card btn btn-outline-success">
                        <img src="pics/budget.png" class="card-img-top" alt="Photo 2">
                        <div class="card-body">
                            <h5 class="card-title">Budget tips</h5>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4 mb-4">
                <a href="#safety" class="no-decoration">
                    <div class="card btn btn-outline-success">
                        <img src="pics/safety.png" class="card-img-top" alt="Photo 3">
                        <div class="card-body">
                            <h5 class="card-title">Safety tips</h5>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-6 mb-6">
                <a href="#health" class="no-decoration">
                    <div class="card btn btn-outline-success">
                        <img src="pics/travel-health.png" class="card-img-top" alt="Photo 4">
                        <div class="card-body">
                            <h5 class="card-title">Health tips</h5>
                        </div>
                    </div>
                </a>
            </div>



            <div class="col-md-6 mb-6">
                <a href="#sustainability" class="no-decoration">
                    <div class="card btn btn-outline-success">
                        <img src="pics/Sustainability.png" class="card-img-top" alt="Photo 5">
                        <div class="card-body">
                            <h5 class="card-title">Sustainability tips</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <section id="packing">
        <!-- your section content goes here -->
        <p></p>
    </section>
    <section id="budget">
        <!-- your section content goes here -->
        <p></p>
    </section>
    <section id="safety">
        <!-- your section content goes here -->
        <p></p>
    </section>
    <section id="health">
        <!-- your section content goes here -->
        <p></p>
    </section>
    <section id="sustainability">
        <!-- your section content goes here -->
        <p></p>
    </section>

    <!--footer section-->

    <?php include_once('footer.php') ; ?>

    <!--footer section ends-->




    <script type="text/javascript">
  // Set the font size based on the width of the screen
  console.log(window.innerWidth);

     // Get the elements
var heading = document.querySelector('h1');
var paragraph = document.querySelector('p');

// Add a listener for window resize
window.addEventListener('resize', function(event){
  // Get the screen width
  var screenWidth = window.innerWidth;

  // Use media queries to set font size based on screen width
  if (screenWidth < 768) { // For screens smaller than 768px
    heading.style.fontSize = "24px";
    paragraph.style.fontSize = "12px";
  } else if (screenWidth >= 768 && screenWidth < 992) { // For screens between 768px and 992px
    heading.style.fontSize = "32px";
    paragraph.style.fontSize = "16px";
  } else { // For screens larger than 992px
    heading.style.fontSize = "48px";
    paragraph.style.fontSize = "20px";
  }
});

  
</script>
</body>

</html>