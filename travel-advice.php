<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Advice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

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


    <section id="slider" class="pt-5">
  <div class="container">
    <br>
      <div class="slider">
        <div class="owl-carousel">
        <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img src="pics/packing.png" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>PACKING</b></h5>
            <p class="text-center p-4">Packing effectively can make your trip more comfortable and stress-free. Pack light and versatile clothing, bring necessary items like chargers and adapters, and keep important documents and valuables in a secure place. Don't forget to research any specific items you may need for your destination.
            <a href="#packing" class="btn btn-pink btn-sm mt-4 mb-2 mx-auto slide-btn"  data-target="#packing-collapse">
  <i class="fas fa-chevron-down"></i>
</a>
            </p>
          </div>
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img src="pics/Sustainability.png" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>SUSTAINABILITY</b></h5>
            <p class="text-center p-4">Traveling sustainably helps preserve the environment and local communities. Be mindful of your carbon footprint and avoid activities that harm the environment. Support local businesses and communities by purchasing from local vendors and learning about local cultures.
            <a href="#sustainability" class="btn btn-pink btn-sm mt-4 mb-2 mx-auto slide-btn" >
  <i class="fas fa-chevron-down"></i>
</a>
 </p>
          </div>
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img src="pics/budget.png" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>BUDGET</b></h5>
            <p class="text-center p-4">Managing your finances effectively while traveling is essential to avoid running out of money and cutting your trip short. It's important to research costs beforehand, look for affordable options, and avoid unnecessary expenses.<br> 
            <a href="#budget" class="btn btn-pink btn-sm mt-4 mb-2 mx-auto slide-btn" >
  <i class="fas fa-chevron-down"></i>
</a>
</p>        
          </div>
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img src="pics/safety.png" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>SAFETY</b></h5>
            <p class="text-center p-4">Staying safe while traveling should always be a top priority. Take precautions like staying aware of your surroundings, avoiding dangerous areas, and keeping your valuables secure. Research local customs and laws to avoid any cultural misunderstandings that could put you in danger.
            <a href="#safety" class="btn btn-pink btn-sm mt-4 mb-2 mx-auto slide-btn" >
  <i class="fas fa-chevron-down"></i>
</a> </p>
          </div>
          <div class="slider-card">
            <div class="d-flex justify-content-center align-items-center mb-4">
              <img src="pics/travel-health.png" alt="">
            </div>
            <h5 class="mb-0 text-center"><b>HEALTH</b></h5>
            <p class="text-center p-4">Maintaining your health while traveling is crucial to enjoy your trip to the fullest. Remember to stay hydrated, get enough sleep, and eat well. Pack any necessary medications or supplements, and research any health risks or precautions you should take before your trip.
            <a href="#health" class="btn btn-pink btn-sm mt-4 mb-2 mx-auto slide-btn" data-offset="150" >
  <i class="fas fa-chevron-down"></i>
</a></p>
            
          
        </div>
      </div>
  </div>
</section>
    <div class="container tips-body">
            
    <section id="packing" class="tips">
    <div class="card container tips-card">
    <div class="card-header">
        <h3>Packing Tips:</h3>
    </div>
    <div class="card-body">
        <ol>
            <li>Make a packing list of essential items, including clothing, toiletries, electronics, and any necessary documents.</li>
            <li>Use packing cubes or compression bags to organize your items and maximize space in your luggage.</li>
            <li>Pack versatile clothing items that can be dressed up or down and mixed and matched to create multiple outfits.</li>
            <li>Limit your carry-on luggage to avoid paying extra fees and to reduce your stress while navigating busy airports.</li>
            <li>Consider packing a portable charger to keep your electronic devices powered up during your travels.</li>
        </ol>
    </div>
</div>
    </section>
    <section id="budget" class="tips">
    <div class="card container tips-card">
    <div class="card-header">
        <h3>Budget Tips:</h3>
    </div>
    <div class="card-body">
        <ol>
            <li>Set a budget for your trip and track your expenses to avoid overspending.</li>
            <li>Use discount travel sites or apps to find the best deals on flights, accommodations, and activities.</li>
            <li>Research free or low-cost attractions and activities to explore your destination without breaking the bank.</li>
            <li>Eat like a local and explore street food markets or grocery stores to save money on meals.</li>
            <li>Travel during the off-season to take advantage of lower prices and fewer crowds.</li>
        </ol>
    </div>
</div>
    </section>
    <section id="safety" class="tips">
    <div class="card container tips-card">
    <div class="card-header">
        <h3>Safety Tips:</h3>
    </div>
    <div class="card-body">
        <ol id="safe">
            <li>Research your destination before you go to learn about any potential safety risks or travel advisories.</li>
            <li>Keep your belongings secure by using a money belt, locking your luggage, and being aware of your surroundings.</li>
            <li>Stay connected with family and friends by sharing your itinerary and staying in touch during your trip.</li>
            <li>Avoid walking alone at night or in unfamiliar areas and stay on well-lit streets with other people around.</li>
            <li>Trust your instincts and be aware of any suspicious or uncomfortable situations, and know how to contact local emergency services if necessary.</li>
        </ol>
    </div>
</div>

    </section>
    <section id="health" class="tips">
    <div class="card container tips-card">
    <div class="card-header">
        <h3>Health Tips:</h3>
    </div>
    <div class="card-body">
        <ol>
            <li>Get vaccinated before you travel to prevent any illnesses that may be present in the destination you're visiting.</li>
            <li>Carry hand sanitizer and disinfectant wipes to clean your hands and surfaces, especially in public spaces like airports, trains, and buses.</li>
            <li>Eat healthy foods and stay hydrated by drinking plenty of water to keep your body nourished and energized.</li>
            <li>Exercise regularly by taking a walk, practicing yoga, or using a hotel gym to keep your body active and avoid sitting for long periods.</li>
            <li>Get enough sleep by establishing a regular sleep schedule to help your body adjust to jet lag and stay refreshed.</li>
        </ol>
    </div>
</div>
    </section>
    <section id="sustainability" class="tips">
        <div class="card container tips-card">
    <div class="card-header">
        <h3>Sustainability Tips:</h3>
    </div>
        <div class="card-body">
        <ol>
            <li>Choose eco-friendly accommodations that prioritize sustainability and reduce their impact on the environment.</li>
            <li>Use public transportation, biking or walking whenever possible to reduce greenhouse gas emissions and improve air quality.</li>
            <li>Avoid single-use plastics by bringing your own reusable water bottle, shopping bag, and toiletries.</li>
            <li>Shop locally and eat at local restaurants that source ingredients locally to support the local economy and reduce transportation emissions.</li>
            <li>Be respectful of local customs, traditions, and cultures to minimize your impact on the environment and support the communities you visit.</li>
        </ol>
        </div>
    </div>
    </section>
    </div>
   

    <!--footer section-->

    <?php include_once('footer.php') ; ?>

    <!--footer section ends-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
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

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
      margin:10,
      nav:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      center: true,
      navText: [
          "<i class='fa fa-angle-left'></i>",
          "<i class='fa fa-angle-right'></i>"
      ],
      responsive:{
          0:{
              items:1
          },
          600:{
              items:1
          },
          1000:{
              items:3
          }
      }
    });
  });
  
  $(document).ready(function() {
  $('a.slide-btn').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top -($('.navbar').height() + 40 ) 
      },50);
    }
  });
});

</script>
</body>

</html>