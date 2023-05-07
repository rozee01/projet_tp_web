<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa</title>
    <?php include_once('../dependancies.php') ?>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <?php include_once('../continents/header2.php') ?>

    <!--top destinations start-->

    <div class="container">
        <h1 class="text-center mt-5">Top Destinations to explore in Africa </h1>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/morroco.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Morroco</h1>
                            <p>
                                Morocco is a vibrant destination that offers a rich tapestry of history, culture,
                                and natural beauty. From the bustling markets of Marrakech to the awe-inspiring Sahara desert,
                                Morocco is a treasure trove of exotic experiences waiting to be discovered by adventurous travelers. </p>
                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/Morroco.php?name=Morroco"> Know more about Morroco</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/southafrica.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>South Africa</h1>
                            <p>
                                South Africa is a diverse and captivating destination that offers a rich blend of cultures, landscapes,
                                and wildlife. From the iconic Table Mountain in Cape Town to the vast plains of Kruger National Park,
                                travelers can explore the country's stunning natural beauty, indulge in its renowned wine regions,
                                and experience its vibrant history and cultural heritage. </p>
                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=South Africa"> Know more about South Africa</a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="../pics/tanzania.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Tanzania</h1>
                            <p>
                                Tanzania is a treasure trove for adventure seekers and wildlife enthusiasts. With its world-famous
                                Serengeti National Park, majestic Mount Kilimanjaro, and pristine Zanzibar beaches, Tanzania offers a
                                unique blend of safari experiences, breathtaking landscapes, and vibrant Swahili culture that make it
                                an unforgettable destination for travelers to explore and discover.
                            </p>
                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=Tanzania"> Know more about Tanzania</a>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <button type="button" class="lien" >
            <i class="fab fa-youtube"></i>
            <a class="nav-item nav-link" style="text-decoration:none; color: light; " href="../index.php">
            Back to the continents 
            </a>
        </button>
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