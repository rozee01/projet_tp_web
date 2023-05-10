<?php
$country = $_GET['name'];
//On doit savoir si la page concerne un pays deja validé ou un pays proposé pas encore validé (on prend cette information de l'url) 
if ($_GET['demande'] == "true") {
    require_once('../Repositories/DemandeDetailsRepository.php');
    $DetailsRepository = new DemandeDetailsRepository();
    require_once('../Repositories/DemandeTipsRepository.php');
    $TipsRepository = new DemandeTipsRepository();
} else {
    require_once('../Repositories/CountryDetailsRepository.php');
    $DetailsRepository = new CountryDetailsRepository();

require_once('../Repositories/CountryTipsRepository.php');
$TipsRepository = new CountryTipsRepository();
}
// Associer chaque element de la table CountryDetails a sa valeur dans la base de données selon le nom du pays 


$Details = $DetailsRepository->findByName($country);
$details = [
    'name', 'paragraph', 'place1', 'titlePlace1', 'place2', 'titlePlace2', 'place3', 'titlePlace3', 'place4', 'titlePlace4', 'place5', 'titlePlace5', 'place6', 'titlePlace6', 'food1', 'titleFood1', 'food2', 'titleFood2', 'food3', 'titleFood3', 'food4', 'titleFood4', 'food5', 'titleFood5', 'video', 'image'
];
foreach ($details as $detail) {
    ${$detail} = $Details["{$detail}"];
}


// Associer chaque element de la table CountryTips a sa valeur dans la base de données selon le nom du pays 

$Tips = $TipsRepository->findByName($country);
$tips = [
    'name', 'language', 'religion', 'visa', 'climate', 'currency', 'power_plugs', 'capital', 'apps', 'flights', 'safety', 'budget'
];
foreach ($tips as $tip) {
    ${$tip} = $Tips["{$tip}"];
}

$path = "../";

?>

<html>

<head>
    <title>let's visit <?= $country ?></title>
    <meta charset="UTF-8">
    <?php
    include_once('../dependancies.php'); ?>
    <link rel="stylesheet" href="../styles/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="pays.css">
    <style>
        .background {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)), url(<?= $image ?>);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 100%;
            height: 850px;
            margin-bottom: 180px;
        }
    </style>
    <link rel="stylesheet" href="../comment_section/comment.css" />

</head>

<body>
    <!--navbar start-->
    <?php include_once('../header.php'); ?>
    <!--navbar end-->



    <div class="background">
        <div class="container-de-titre">
            <h1 id="titre"><?= $name ?> </h1>
        </div>
        <div class="contparagraphe1" style="text-align: center">
            <p id="paragraphe1">
                <?= $paragraph ?>
            </p>
            <br />
            <br />
            <br />
            </p>
        </div>
    </div>

    <!-- Section Packages must visit  Start -->
    <div class="container" id="container1">
        <div class="main-txt">
            <p><span>M</span>ust Visit IN <?= $name ?> -> </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="myImage" src="<?= $place1 ?>" alt="Destination 1">

                    <div class="image-caption"><?= $titlePlace1 ?></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $place2 ?>" alt="Destination 2">
                    <div class="image-caption"><?= $titlePlace2 ?></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $place3 ?>" alt="Destination 3">
                    <div class="image-caption"><?= $titlePlace3 ?></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $place4 ?>" alt="Destination 1">
                    <div class="image-caption"><?= $titlePlace4 ?></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $place5 ?>" alt="Destination 2">
                    <div class="image-caption"><?= $titlePlace5 ?></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $place6 ?>" alt="Destination 3">
                    <div class="image-caption"><?= $titlePlace6 ?></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Packages must visit  ends -->



    <!--section food you shoud try start-->
    <div class="container" id="container">
        <div class="main-txt">
            <p><span>F</span>ood You Should Try-> </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $food1 ?>" alt="Destination 1">
                    <div class="image-caption"><?= $titleFood1 ?></div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $food2 ?>" alt="Destination 2">
                    <div class="image-caption"><?= $titleFood2 ?></div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $food3 ?>" alt="Destination 3">
                    <div class="image-caption"><?= $titleFood3 ?></div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $food4 ?>" alt="Destination 1">
                    <div class="image-caption"> <?= $titleFood4 ?></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="<?= $food5 ?>" alt="Destination 2">
                    <div class="image-caption"><?= $titleFood5 ?></div>


                </div>
            </div>

        </div>
    </div>
    <!--section food you shoud try end-->

    <!--quick facts +image start -->
    <div class="container" id="information">
        <div class="left">
            <div class="titree">
                <h2>QUICK FACTS </h2>
            </div>
            <div class="facts">
                <div class="row">
                    <div class="col">
                        <div class="fact">
                            <div class="circle"><i class="fas fa-language"></i></div>
                            <div class="info"><span>Language</span><br> <?= $language ?><br></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-praying-hands"></i></div>
                            <div class="info"><span>Religion</span><br><?= $religion ?><br></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-money-bill-alt"></i></div>
                            <div class="info"><span>Currency</span><br><?= $currency ?><br><br></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-city"></i></div>
                            <div class="info"><span>Capital</span><br><?= $capital ?><br></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="fact">
                            <div class="circle"><i class="fas fa-passport"></i></div>
                            <div class="info"><span>Visa</span><br><?= $visa ?></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-thermometer-half"></i></div>
                            <div class="info"><span>Climate</span><br><?= $climate ?></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-plug"></i></div>
                            <div class="info"><span>Power Plugs</span><br><?= $power_plugs ?></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fab fa-uber"></i></div>
                            <div class="info"><span>Apps</span><br><?= $apps ?></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <div class="right">
            <br>
            <br>
            <img id="myImagechange" src="<?= $place4 ?>" alt="Image 1" class="gray">
            <script>
                let images = ["<?= $place3 ?>", "<?= $place6 ?>", "<?= $place4 ?>"];
                let currentIndex = 0;
                setInterval(function() {
                    let myImage = document.getElementById("myImagechange");
                    myImage.src = images[currentIndex];
                    currentIndex = (currentIndex + 1) % images.length;
                }, 3000);
            </script>
        </div>
    </div>

    <!--quick facts et image end -->


    <!--information start-->
    <div class="container" id="info">
        <div class="titree">
            <h2>Flights <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon src="https://cdn.lordicon.com/zeabctil.json" trigger="hover" colors="outline:#121331,primary:#4bb3fd,secondary:#ebe6ef" style="width:70px;height:70px ;padding-top: 20px;">
                </lord-icon>
            </h2>
        </div>
        <p><br><?= $flights ?>
        </p>
        <div class="titree">
            <h2>Safety
                <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon src="https://cdn.lordicon.com/cqgtrhpg.json" trigger="hover" colors="outline:#131432,primary:#606874,secondary:#4bb3fd,tertiary:#ebe6ef" style="width:80px;height:80px ;padding-top: 20px;">
                </lord-icon>
            </h2>
        </div>
        <p><br><?= $safety ?>
        </p>
        <div class="titree">
            <h2>Budget
                 <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                <lord-icon src="https://cdn.lordicon.com/ptzvfshs.json" trigger="hover" colors="outline:#121331,primary:#f28ba8,secondary:#ffc738" style="width:80px;height:80px ;padding-top: 20px;">
                </lord-icon>
            </h2>
        </div>
        <p><br><?= $budget ?>
        </p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <!--information end-->


    <!--video-->
    <div class="container" id="vid">
        <h3>VIDEO</h3>
        <iframe src=<?= $video ?> frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>

    <!--video end-->


    <?php include_once('../comment_section/comment.php'); ?>



    <!--footer section-->

    <?php include_once('../footer.php'); ?>




</body>

</html>