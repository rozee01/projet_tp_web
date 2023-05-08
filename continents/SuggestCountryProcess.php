<?php
if (!isset($_SESSION['user'])) {
  header('location:../Login.php');
}
else{
include_once('../Repositories/DemandeRepository.php');
include_once('uploadImage.php');

$Demandes = new DemandeRepository();


  $destination = uploadImage('image');

      // Update image path in $_POST
      $_POST['image'] = $destination;
    
      // Create country
      $Demande = $Demandes->Create($_POST);
      $CountryName=$_POST['name'];
      $location="Location:/continents/SuggestionDetails.php?name=".$CountryName."&continent=".$_POST['continent'] ;
      header($location );
}

    


