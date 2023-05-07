<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Europe</title>
    <?php include_once('../dependancies.php') ?>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once('../continents/header2.php') ?>

    <!--top destinations start-->

    <div class="container">
        <h1 class="text-center mt-5">Top Destinations to explore in Europe </h1>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/italy.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Italy</h1>
                            <p>
                                Italy, the land of la dolce vita, beckons with its rich history, delicious cuisine, and
                                breathtaking landscapes. From the iconic ancient ruins of Rome to the romantic canals of Venice,
                                and the stunning coastlines of the Amalfi Coast, Italy offers an unrivaled blend of art, culture,
                                and natural beauty that entices travelers to explore and discover its timeless charm. </p>

                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=Italy"> Know more about Italy</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="../pics/spain.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Spain</h1>
                            <p>Spain is a captivating destination with its vibrant culture, rich history, and stunning landscapes.
                                From the bustling streets of Barcelona to the Moorish palaces of Granada, and the sun-drenched beaches
                                of the Costa del Sol, Spain offers a tapestry of experiences that beckon travelers to immerse themselves
                                in its lively traditions, flavorful cuisine, and warm hospitality.</p>
                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=Spain"> Know more about Spain</a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/france.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>France</h1>
                            <p>France, a timeless and romantic destination, offers a world of exquisite cuisine, art, and culture.
                                From the iconic Eiffel Tower in Paris to the picturesque vineyards of Bordeaux, and the historic chateaux
                                of the Loire Valley, France is a treasure trove of landmarks and experiences that await travelers to discover
                                its enchanting beauty and savoir-faire.</p>
                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=France"> Know more about France</a>
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