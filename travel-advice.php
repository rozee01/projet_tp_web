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
            <div class="col-md-4 mb-4">
                <div type="button" class="btn btn-outline-success card">
                    <img src="pics/packing.png" class="card-img-top" alt="Photo 1">
                    <div class="card-body">
                        <h5 class="card-title">Packing tips</h5>

                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div type="button" class="btn btn-outline-success card">
                    <img src="pics/budget.png" class="card-img-top" alt="Photo 2">
                    <div class=" card-body">
                        <h5 class=" card-title">Budget tips</h5>

                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div type="button" class="btn btn-outline-success card">
                    <img src="pics/safety.png" class="card-img-top" alt="Photo 3">
                    <div class="card-body">
                        <h5 class="card-title">Safety tips</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-6">
                <div type="button" class="btn btn-outline-success card">
                    <img src="pics/travel-health.png" class="card-img-top" alt="Photo 4">
                    <div class="card-body">
                        <h5 class="card-title">Health Tips</h5>

                    </div>
                </div>
            </div>


            <div class="col-md-6 mb-6">
                <div type="button" href="#sustainability.html" class="btn btn-outline-success card">
                    <img src="pics/Sustainability.png" class="card-img-top" alt="Photo 5">
                    <div class="card-body">
                        <h5 class="card-title">Sustainability Tips</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer section-->

    <?php include_once('footer.php') ; ?>

    <!--footer section ends-->
   



    <script type="text/javascript">
   // Set the font size based on the width of the screen
        window.addEventListener('resize', function () {
            var fontSize = window.innerWidth / 40; 
            document.querySelector('h2').style.fontSize = fontSize + 10 + 'px';
            document.querySelector('p').style.fontSize = fontSize + 'px';

        });

    </script>
</body>

</html>