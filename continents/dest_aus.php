<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Australia</title>
    <?php include_once('../dependancies.php') ?>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once('../continents/header2.php') ?>

    <!--top destinations start-->

    <div class="container">
        <h1 class="text-center mt-5">Top Destinations to explore in Australia</h1>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/sydney.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Sydney</h1>
                            <p> Sydney, the jewel of Australia's east coast, is a vibrant city that beckons tourists with its
                                iconic landmarks and stunning natural beauty. From the world-famous Sydney Opera House, with its
                                distinctive sail-like design, to the sun-kissed beaches of Bondi and Manly, Sydney offers a captivating
                                blend of modernity and nature that promises an unforgettable experience for every traveler.
                               </p>
                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=Sydney"> Know more about Sydney</a>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="../pics/uluru.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>Uluru</h1>
                            <p>Uluru, the majestic red monolith rising out of the Australian outback in the Northern Territory,
                                is a destination like no other. Its awe-inspiring size and spiritual significance to the Aboriginal
                                people make it a captivating site to explore. A trip to Uluru promises a unique and unforgettable experience that will leave travelers with memories to cherish for a lifetime..</p>

                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=Uluru"> Know more about Uluru</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src="pics/Great Barrier Reef.jpg" class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1>The Great Barrier Reef</h1>
                            <p>The Great Barrier Reef, a natural wonder of the world, beckons adventurers and nature lovers alike to
                                its dazzling underwater paradise. Explore the mesmerizing beauty of this UNESCO World Heritage site, and discover why the Great Barrier Reef is
                                a bucket-list destination that will leave visitors in awe of its breathtaking diversity and ecological significance.</p>

                            <button style="margin-left: 10%;">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href="../pays/pays.php?name=The Great Barrier Reef"> Know more about this country</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--top destionations end-->
    <?php include_once('../footer.php') ?>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>