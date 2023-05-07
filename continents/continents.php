<?php
$continentName = $_GET['name'];
include_once('../CountriesRepository.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $continentName ?></title>
    <?php include_once('../dependancies.php') ?>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once('../continents/header2.php') ?>

    <!--top destinations start-->

    <div class="container">
        <h1 class="text-center mt-5">Top Destinations to explore in <?= $continentName ?> </h1>
        <div class="row">
            <?php
            $Continent = new CountriesRepository();
            $countries = $Continent->findAll(['continent' => $continentName]);
            foreach ($countries as $country) {
                $country_elements = [
                    'continent',
                    'name', 'description', 'image'
                ];
                foreach ($country_elements as $element) {
                    ${$element} = $country->{$element};
                }
            ?>

                <div class="col-lg-4 col-md-6">
                    <div class="destination-box">
                        <div class="card">
                            <img src=<?= $image ?> class="img-fluid" id="animation-img">
                            <div class="descriptions bg-light">
                                <h1><?= $name ?></h1>
                                <p>
                                    <?= $description ?>
                                </p>

                                <button style="margin-left: 10%;">
                                    <i class="fab fa-youtube"></i>
                                    <a class="nav-link" style="text-decoration:none; color: light; " href=<?php $reference = "../pays/pays.php?name=" . $name;
                                                                                                            echo $reference; ?>> Know more about <?php if ($name == 'The Great Barrier Reef') {
                                                                                                                                                        echo 'this country';
                                                                                                                                                    } else {
                                                                                                                                                        echo $name;
                                                                                                                                                    } ?></a>
                                </button>
                                <div class="button-verif-container">
                                    <button>
                                        <img src="../pics/verify-icon.png" alt="verify">
                                    </button>
                                    <button>
                                        <img src="../pics/cancel-icon.png" alt="cancel">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            <?php };
            include_once('Suggestion.php'); ?>


        </div>

        <button type="button" class="lien">
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