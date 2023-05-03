<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>North America</title>
    <?php include_once('../dependancies.php') ?>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once('../header.php') ?>

    <!--top destinations start-->

    <div class="container">
        <h1 class="text-center mt-5">Top Destinations to explore in North America</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/us.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>United States</h1>
                            <p>The United States offers a plethora of diverse and captivating destinations to explore,
                                from the bustling streets of New York City to the natural wonders of Yosemite National Park.
                                With its rich cultural heritage, stunning landscapes, and vibrant cities, the U.S. is a
                                destination that offers something for every traveler to discover and experience.</p>

                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/unitedstates.php"> Know more about United States</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/canada.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Canada</h1>
                            <p>Canada, a vast and diverse country, offers a treasure trove of natural beauty and cultural
                                wonders to explore, from the breathtaking Rocky Mountains to the vibrant cities of Toronto,
                                Vancouver, and Montreal. With friendly locals, rich history, and an abundance of outdoor adventures,
                                Canada is a must-visit destination for those seeking unforgettable experiences.</p>

                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/canada.php"> Know more about Canada</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/mexico.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Mexico</h1>
                            <p>Mexico is a vibrant destination that offers a rich tapestry of culture, history, and natural beauty.
                                From exploring ancient ruins and indulging in delicious cuisine to relaxing on pristine beaches and
                                immersing in colorful festivals, Mexico is a treasure trove of experiences waiting to be discovered by
                                adventurous travelers..</p>
                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/mexico.php"> Know more about Mexico</a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <!--top destionations end-->


    <!--footer section-->
    <?php include_once('../footer.php') ?>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>