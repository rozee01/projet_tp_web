<!--head start-->
<?php $pageTitle="Asia"; $style2="styles.css" ;$style1="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" ; include_once ('../dependancies.php') ; ?>

<!--head ends-->
<body>
<?php include_once('../header.php')?>

    <!--top destinations start-->

    <div class="container">
        <h1 class="text-center mt-5">Top Destinations to explore in Asia</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box" >
                    <img src="pics/japan.jpg" class="img-fluid" >
                    <h3>Japan</h3>
                    <p> Japan is a captivating blend of ancient traditions and modern marvels that offer travelers a 
                      unique cultural experience. From the serene temples of Kyoto to the bustling streets of Tokyo, 
                      and the breathtaking cherry blossoms in spring, Japan offers a world of striking contrasts, 
                      cutting-edge technology, and timeless cultural treasures waiting to be explored and discovered.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="pics/indua.jpg" class="img-fluid">
                    <h3>India</h3>
                    <p>India, a land of diversity and contrasts, enthralls travelers with its rich history, culture, 
                      and spirituality. From the iconic Taj Mahal in Agra to the bustling streets of Delhi, and the 
                      serene backwaters of Kerala, India offers a sensory explosion of colors, flavors, and experiences
                       that invite travelers to immerse themselves in its vibrant tapestry of traditions and discover
                        its captivating allure.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <img src="pics/thailand.jpg" class="img-fluid">
                    <h3>Thailand</h3>
                    <p>India, a land of diversity and contrasts, enthralls travelers with its rich history, culture, 
                      and spirituality. From the iconic Taj Mahal in Agra to the bustling streets of Delhi, and the serene 
                      backwaters of Kerala, India offers a sensory explosion of colors, flavors, and experiences that invite
                       travelers to immerse themselves in its vibrant tapestry of traditions and discover its captivating allure.</p>
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