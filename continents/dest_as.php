<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asia</title>
    <?php include_once('../dependancies.php') ?>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once('../continents/header2.php') ?>

    <!--top destinations start-->

    <div class="container">
        <h1 class="text-center mt-5">Top Destinations to explore in Asia</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/japan.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Japan</h1>
                            <p> Japan is a captivating blend of ancient traditions and modern marvels that offer travelers a
                                unique cultural experience. It offers a world of striking contrasts from the serene temples of Kyoto
                                to cutting-edge technology, and timeless cultural treasures waiting to be explored and discovered.</p>

                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=Japan"> Know more about Japan</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/indua.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>India</h1>
                            <p>India, a land of diversity and contrasts, enthralls travelers with its rich history, culture,
                                and spirituality. From the iconic Taj Mahal in Agra to the bustling streets of Delhi,
                                India offers a sensory explosion of colors, flavors, and experiences where you can 
                                immerse in its vibrant tapestry of traditions.</p>

                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=India"> Know more about India</a>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div style="align-items: center;" class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="../pics/indonisia.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Indonisia</h1>
                            <p>Indonesia: a vibrant and diverse tropical paradise, boasting stunning beaches, lush rainforests,
                            and unique cultural experiences. Explore its rich heritage and indulge in its mouth-watering cuisine. 
                            From the bustling streets of Jakarta to the idyllic beaches of Bali, Indonesia offers something for everyone.</p>

                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=Indonesia"> Know more about Indonisia</a>
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

    <?php include_once('../footer.php') ?>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>