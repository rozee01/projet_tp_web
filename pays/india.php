<!DOCTYPE html>
<html>

<head>
    <title>let's visit India</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <script src="readmore.js"></script>
    <link rel="stylesheet" href="pays.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Rubik:wght@300&display=swap"
        rel="stylesheet">
    <style>
        .background {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2)), url(./pictures/india_.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 100%;
            height: 100%;
        }
    </style>
    <link rel="stylesheet" href="../comment_section/comment.css" />

</head>

<body>
    <!--navbar start-->
<?php include_once('../header.php') ; ?>
  <!--navbar end-->


  <?php
require_once ('../CnxDB.php');
require_once('../Repository.php');
require_once('../PaysRepository.php');

$paysRepository = new PaysRepository();

$pays = $paysRepository->findByName('India');

$title = $pays->name;
$paragraph = $pays->description;
$url1 = $pays->url1;
$title1 = $pays->title_of_url1;
$url2 = $pays->url2;
$title2 = $pays->title_of_url2;
$url3 = $pays->url3;
$title3 = $pays->title_of_url3;
$url4 = $pays->url4;
$title4 = $pays->title_of_url4;
$url5 = $pays->url5;
$title5 = $pays->title_of_url5;
$url6 = $pays->url6;
$title6 = $pays->title_of_url6;

?>

<div class="background">
    <div class="container-de-titre">
        <h1 id="titre"><?= $title ?>  </h1>
    </div>
    <div class="contparagraphe1" style="text-align: center">
        <p id="paragraphe1">
        <?= $paragraph ?>
        </p>
        <p onclick="readMore()" id="myBtn">Read more</p>
        <br />
        <br />
        <br />
        </p>
    </div>
</div>

<!-- Section Packages must visit  Start -->
<div class="container" id="container1">
    <div class="main-txt">
        <p><span>M</span>ust Visit IN INDIA-> </p>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="destination-box">
                <img id="myImage" src="<?= $url1 ?>" alt="Destination 1">

                <div class="image-caption"><?= $title1 ?></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="destination-box">
                <img src="<?= $url2 ?>" alt="Destination 2">
                <div class="image-caption"><?= $title2 ?></div>



            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="destination-box">
                <img src="<?= $url3 ?>" alt="Destination 3">
                <div class="image-caption"><?= $title3?></div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="destination-box">
                <img src="<?= $url4 ?>" alt="Destination 1">
                <div class="image-caption"><?= $title4 ?></div>

            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="destination-box">
                <img src="<?= $url5 ?>" alt="Destination 2">
                <div class="image-caption"><?= $title5 ?></div>

            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="destination-box">
                <img src="<?= $url6 ?>" alt="Destination 3">
                <div class="image-caption"><?= $title6 ?></div>


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
                    <img src="./pictures/butter-chicken-4.jpg" alt="Destination 1">
                    <div class="image-caption">Butter chicken</div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="./pictures/Biryani.jpeg" alt="Destination 2">
                    <div class="image-caption">Biryani</div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="./pictures/Panipuri.jpg" alt="Destination 3">
                    <div class="image-caption">Golgappa/Pani Puri</div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="./pictures/Samosa-2-3.jpg" alt="Destination 1">
                    <div class="image-caption"> Samosa</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="./pictures/Dhokla.jfif" alt="Destination 2">
                    <div class="image-caption">Dhokla</div>


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
                            <div class="info"><span>Language</span><br> Hindi & English, with many other local
                                languages<br></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-praying-hands"></i></div>
                            <div class="info"><span>Religion</span><br>Hinduism<br></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-money-bill-alt"></i></div>
                            <div class="info"><span>Currency</span><br>Indian Rupee (INR)<br><br></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-city"></i></div>
                            <div class="info"><span>Capital</span><br>New Delhi<br></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="fact">
                            <div class="circle"><i class="fas fa-passport"></i></div>
                            <div class="info"><span>Visa</span><br>eVisa available for 160+ countries</div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-thermometer-half"></i></div>
                            <div class="info"><span>Climate</span><br>Varies by altitude & geography</div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-plug"></i></div>
                            <div class="info"><span>Power Plugs</span><br>Type C / D / M</div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fab fa-uber"></i></div>
                            <div class="info"><span>Apps</span><br>Uber</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <div class="right">
            <br>
            <br>
            <img id="myImagechange" src="./pictures/India_1.jpg" alt="Image 1" class="gray">
            <script>
                let images = ["./pictures/india.webp", "./pictures/india2.jpg","./pictures/India_1.jpg"]; 
                let currentIndex = 0; 
                setInterval(function () {
                    let myImage = document.getElementById("myImagechange");
                    myImage.src = images[currentIndex];
                    currentIndex = (currentIndex + 1) % images.length; 
                }, 3000); 
            </script>
        </div>
    </div>

    <!--quick facts et image end -->


    <!--information start-->
    <div class="container">
        <div class="titree">
            <h2>Flights </h2>
        </div>
        <p><br>As a tourist, your main airports in India will be New Delhi (code: DEL) and Jaipur
            (code: JAI). These have lots of direct flights from other countries around the
            world.
        </p>
        <div class="titree">
            <h2>Safety </h2>
        </div>
        <p><br>India is a relatively safe travel destination, with a low homicide rate of 3.2 per 100k inhabitants
            (48% lower than the global average). Still, sexual assaults are common in India, so women traveling
            alone may want to join a shared tour or other group if possible. Road safety can be an issue too,
            because the driving and traffic in India can be chaotic and dangerous; taking the train is a safer bet
            whenever it's an option.
        </p>
        <div class="titree">
            <h2>Budget</h2>
        </div>
        <p><br>India is a very budget friendly place to travel, with hostels available from $3 and private rooms
            starting from $6, but this is one place in Asia where you get what you pay for. Meals are also cheap,
            costing about $1 to $5 depending on location. Transportation in India is generally by tuk-tuk or car, but
            the train is better for long distance trips. Short distance trips can be done with the Uber transportation
            app.
        </p>
    </div>
    <!--information end-->


    <!--video-->
    <div class="container" id="vid">
        <h3>VIDEO</h3>
        <video controls>
            <source src="./video/A Year in My Life_ 10 Countries, 4000 Photos, and Me Alone - BucketListly.mp4" />
        </video>
    </div>
    <!--video end-->


    <?php include_once('../comment_section/comment.php') ; ?>



    <!--footer section-->

    <?php include_once('../footer.php') ; ?>




</body>

</html>