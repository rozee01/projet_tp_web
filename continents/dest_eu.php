<!--head start-->
<?php $pageTitle="Europe"; $style2="styles.css" ;$style1="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" ; include_once ('../dependancies.php') ; ?>

<!--head ends-->
<body>
<?php include_once('../header.php')?>

    <!--top destinations start-->

    <div class="container">
        <h1 class="text-center mt-5">Top Destinations to explore in Europe </h1>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box" >
                    <img src="pics/italy.jpg" class="img-fluid" >
                    <h3>Italy</h3>
                    <p>Italy, the land of la dolce vita, beckons with its rich history, delicious cuisine, and 
                      breathtaking landscapes. From the iconic ancient ruins of Rome to the romantic canals of Venice,
                       and the stunning coastlines of the Amalfi Coast, Italy offers an unrivaled blend of art, culture,
                        and natural beauty that entices travelers to explore and discover its timeless charm. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="pics/spain.jpg" class="img-fluid">
                    <h3>Spain</h3>
                    <p>Spain is a captivating destination with its vibrant culture, rich history, and stunning landscapes. 
                      From the bustling streets of Barcelona to the Moorish palaces of Granada, and the sun-drenched beaches
                       of the Costa del Sol, Spain offers a tapestry of experiences that beckon travelers to immerse themselves 
                       in its lively traditions, flavorful cuisine, and warm hospitality.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="pics/france.jpg" class="img-fluid">
                    <h3>France</h3>
                    <p>France, a timeless and romantic destination, offers a world of exquisite cuisine, art, and culture. 
                      From the iconic Eiffel Tower in Paris to the picturesque vineyards of Bordeaux, and the historic chateaux 
                      of the Loire Valley, France is a treasure trove of landmarks and experiences that await travelers to discover 
                      its enchanting beauty and savoir-faire.</p>
                </div>
            </div>
        </div>
    </div>

    <!--top destionations end-->

    <?php include_once('../footer.php')?>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>