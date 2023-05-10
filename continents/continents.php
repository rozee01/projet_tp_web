<?php 
// start the session 
session_start();
if(isset($_SESSION['user'])){
    
    $role=$_SESSION['role'];}
if (isset($_SESSION['message'])) {
    ?><div id="message"  class="alert alert-success alert-dismissible" role="alert">
    
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
    <?php
}

$continentName=$_GET['name'];
include_once('../Repositories/CountriesRepository.php')
?>
<?php $path='../';
include_once('../dependancies.php') ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $continentName ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Rubik:wght@300&display=swap" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../pics/logo.png">    <link rel="stylesheet" href="../styles/bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">



    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once('../header.php') ;$path='../';
    
    ?>

    <!--top destinations start-->

    <div class="container">
        <h1 class="text-center mt-5">Top Destinations to explore in <?= $continentName ?> </h1>
        <div class="row">
        <?php
    $Continent= new CountriesRepository();
    $countries = $Continent->findAll(['continent' => $continentName]);

    /* boucle sur les lignes de la table countries pour afficher countries de chaque continent */ 

    foreach ($countries as $country) {
    $country_elements = ['continent',
        'name', 'description', 'image'];
    foreach ($country_elements as $element) {
        ${$element} = $country->{$element};
    }
?>
       
            <div class="col-lg-4 col-md-6">
                <div class="destination-box">
                    <div class="card">
                        <img src=<?= $image ?> class="img-fluid">
                        <div class="descriptions bg-light">
                            <h1><?= $name ?></h1>
                            <p>
                                    <?= $description ?>
                                 </p>

                            <button style="bottom: 60px;" class="button-to-details">
                                <i class="fab fa-youtube"></i>
                                <a class="nav-link" style="text-decoration:none; color: light; " href=<?php 
    $name_encoded = urlencode($name);
    $reference = "../pays/pays.php?name=".$name_encoded."&demande=false";
    echo $reference;
?> > Know more about <?php if($name =='The Great Barrier Reef') {echo 'this country'; }else {echo $name ;}?></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }   
               // Si Admin on peut acceder a la des suggestion d'un pays et valider ou refuser
           
               if(isset($role)&&($role == "Admin")){
                
                
                    include_once('ListeSuggestions.php');
    
                }

            // Si !Admin on peut faire une suggestion d'un pays
        else 
             { 
             include_once('FaireSuggestion.php'); }?>
            
        </div>
            
       
   
        </div>
    
    <!--top destionations end-->

    <?php include_once('../footer.php') ?>

    <!-- Include Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
  // Get the message element
  var messageElement = document.getElementById('message');

  // Set the message from the session variable
  messageElement.innerHTML = '<?php echo $_SESSION['message']; ?>';

  // Hide the message after 5 seconds
  setTimeout(function() {
    messageElement.style.display = 'none';
  }, 5000); // 5000 milliseconds = 5 seconds

  // Clear the session variable after displaying the message
  setTimeout(function() {
    <?php unset($_SESSION['message']); ?>
  }, 5000); // 5000 milliseconds = 5 seconds
</script>

</body>

</html>