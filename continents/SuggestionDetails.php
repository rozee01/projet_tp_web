<?php
$name=$_GET['name'];
$continent=$_GET['continent'];
?>
<html>

<head>
    <title>Suggestion Details</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../pays/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
    <script src="readmore.js"></script>
    <link rel="stylesheet" href="style-sugg.css">
    <link rel="stylesheet" href="../pays/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../pics/logo.png">

    <style>
        .background {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.2));
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            width: 100%;
            height: 750px;
            margin-bottom: 180px;
        }
    </style>
    <link rel="stylesheet" href="../comment_section/comment.css" />

</head>

<body>

    <!--navbar start-->
    <?php
    // include_once('../header.php'); 
    ?>
    <!--navbar end-->


<form action="DetailsProcess.php" method="POST" enctype="multipart/form-data" >
<input type="hidden" name="continent" value="<?php echo $continent; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">
    <div class="background">
        <!-- <h1 id="titre-suggetion">Suggestion Details</h1> -->
        <div class="container-de-titre">
            <h1 id="titre-suggetion"><?=$name?> </h1>
        </div>
        <div class="contparagraphe1" style="text-align: center">
            <textarea name="paragraph" placeholder="Describe <?=$name?> here" class="field" cols="30" rows="10"></textarea>
            <br />
            <br />
            <br />

            <input type="file" name="image" id="bg-input" style="display:none">
            <button style="height:5%" type="button" class="btn-upload" onclick="document.getElementById('bg-input').click()">Select background imgage</button>

        </div>
    </div>

    <!-- Section Packages must visit  Start -->
    <div class="container" id="container1">
        <div class="main-txt">
            <p><span>M</span>ust Visit IN <?=$name?> -> </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Destination1" style="display:none" src="" alt="Destination 1">

                    <div class="image-caption"><input name="titlePlace1" class="field" placeholder="Write the name of this place" type="text"></div>
                </div>
                <input type="file" name="place1" id="image1-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image1-upload').click()">Select Image</button>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Destination2" src="" style="display: none;" alt="Destination 2">

                    <div class="image-caption"><input name="titlePlace2" class="field" placeholder="Write the name of this place" type="text"></div>
                </div>
                <input type="file" name="place2" id="image2-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image2-upload').click()">Select Image</button>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Destination3" src="" style="display: none;" alt="Destination 3">

                    <div class="image-caption"><input  name="titlePlace3" class="field" placeholder="Write the name of this place" type="text"></div>
                </div>
                <input type="file" name="place3" id="image3-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image3-upload').click()">Select Image</button>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Destination4" src="" style="display: none;" alt="Destination 4">

                    <div class="image-caption"><input name="titlePlace4" class="field" placeholder="Write the name of this place" type="text"></div>
                </div>
                <input type="file" name="place4" id="image4-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image4-upload').click()">Select Image</button>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Destination5" src="" style="display: none;" alt="Destination 5">

                    <div class="image-caption"><input name="titlePlace5" class="field" placeholder="Write the name of this place" type="text"></div>
                </div>
                <input type="file" name="place5" id="image5-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image5-upload').click()">Select Image</button>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Destination6" src="" style="display: none;" alt="Destination 6">

                    <div class="image-caption"><input name="titlePlace6"  class="field" placeholder="Write the name of this place" type="text"></div>
                </div>
                <input type="file" name="place6" id="image6-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image6-upload').click()">Select Image</button>

            </div>
        </div>
    </div>
    <!-- Section Packages must visit  ends -->



    <!--section food you shoud try start-->
    <div class="container" id="container">
        <div class="main-txt">
            <p><span>F</span>ood You Should Try-&gt; </p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Food1" src="" style="display: none;" alt="Food1">

                    <div class="image-caption"><input name="titleFood1" class="field" placeholder="Write the name of this food" type="text"></div>
                </div>
                <input type="file" name="food1" id="image1f-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image1f-upload').click()">Select Image</button>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Food2" src="" style="display: none;" alt="Food2">

                    <div class="image-caption"><input name="titleFood2"  class="field" placeholder="Write the name of this food" type="text"></div>
                </div>
                <input type="file" name="food2" id="image2f-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image2f-upload').click()">Select Image</button>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Food3" src="" style="display: none;" alt="Food3">

                    <div class="image-caption"><input  name="titleFood3" class="field" placeholder="Write the name of this food" type="text"></div>
                </div>
                <input type="file" name="food3" id="image3f-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image3f-upload').click()">Select Image</button>

            </div>

        </div>
        <div class="row">



            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Food4" src="" style="display: none;" alt="Food4">

                    <div class="image-caption"><input name="titleFood4"  class="field" placeholder="Write the name of this food" type="text"></div>
                </div>
                <input type="file" name="food4" id="image4f-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image4f-upload').click()">Select Image</button>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img id="Food5" src="" style="display: none;" alt="Food5">

                    <div class="image-caption"><input name="titleFood5"  class="field" placeholder="Write the name of this food" type="text"></div>
                </div>
                <input type="file" name="food5" id="image5f-upload" style="display:none">
                <button style="margin-left: 33%;" type="button" class="btn-upload" onclick="document.getElementById('image5f-upload').click()">Select Image</button>

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
                            <div class="info">
                                <span>Language</span>
                                <br>
                                <input class="field" name="language"  placeholder="Write the Language" type="text">
                            </div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-praying-hands"></i></div>
                            <div class="info"><span>Religion</span><br><input class="field" name="religion"  placeholder="Write the Religion" type="text"><br></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-money-bill-alt"></i></div>
                            <div class="info"><span>Currency</span><br><input class="field"  name="currency" placeholder="Write the Currency" type="text"></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-city"></i></div>
                            <div class="info"><span>Capital</span><br><input class="field"  name="capital" placeholder="Write the Capital" type="text"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="fact">
                            <div class="circle"><i class="fas fa-passport"></i></div>
                            <div class="info"><span>Visa</span><br><input class="field"  name="visa" placeholder="Write the Visa" type="text"></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-thermometer-half"></i></div>
                            <div class="info"><span>Climate</span><br><input class="field"  name="climate" placeholder="Write the Climate" type="text"></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fas fa-plug"></i></div>
                            <div class="info"><span>Power Plugs</span><br><input  name="power_plugs" class="field" placeholder="Write the Power Plugs" type="text"></div>
                        </div>
                        <div class="fact">
                            <div class="circle"><i class="fab fa-uber"></i></div>
                            <div class="info"><span>Apps</span><br><input class="field"  name="apps" placeholder="Write the Apps" type="text"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



            <div class="right">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <img id="myImagechange1" src="../pics/image-file-icon.png" alt="Image 1" class="gray">
                </div>
                <div class="col-lg-4">
                    <img id="myImagechange2" src="../pics/image-file-icon.png" alt="Image 2" class="gray">
                </div>
                <div class="col-lg-4">
                    <img id="myImagechange3" src="../pics/image-file-icon.png" alt="Image 3" class="gray">
                </div>

            </div>
            <p><span>S</span>elect 3 more images of this country</p>
            <input type="file"  id="myInputchange1" style="display:none">
            <button style="width: 15%;margin-left: 27.5%;" type="button" class="btn-upload" onclick="document.getElementById('myInputchange1').click()">1</button>
            <input type="file"  id="myInputchange2" style="display:none">
            <button style="width: 15%;" type="button" class="btn-upload" onclick="document.getElementById('myInputchange2').click()">2</button>
            <input type="file" id="myInputchange3" style="display:none">
            <button style="width: 15%;" type="button" class="btn-upload" onclick="document.getElementById('myInputchange3').click()">3</button>

        </div> 
    </div>

    <!--quick facts et image end -->


    <!--information start-->
    <div id="last-information" class="container">
        <div class="titree">
            <h2>Flights </h2>
        </div>
        <p><br>
            <textarea class="field" name="flights" id="Flights" cols="80" rows="2" placeholder="Write about Flights here"></textarea>
        </p>
        <div class="titree">
            <h2>Safety </h2>
        </div>
        <p><br>
            <textarea class="field" name="safety" id="Safety" cols="80" rows="2" placeholder="Write about Safety here"></textarea>
        </p>
        <div class="titree">
            <h2>Budget</h2>
        </div>
        <p><br>
            <textarea class="field" name="budget" id="Budget" cols="80" rows="2" placeholder="Write about Budget here"></textarea>
        </p>
    </div>
    <!--information end-->


    <!--video-->
    

        <div style="margin-top: 50px !important;margin-bottom:200px;" class="container" id="vid">
        <textarea class="field" name="Video" id="video" cols="80" rows="2" placeholder="Insert an embed url of the video here"></textarea>
        

    </div>
    <!--video end-->
    <button style="margin-left: 41%;margin-top: 5%;width:18%;height:5%" type="submit" class="btn-sub">Submit Suggestion</button>
    </form>
    <!--footer section-->

    <?php include_once('../footer.php'); ?>



    <script src="script.js"></script>
</body>

</html>