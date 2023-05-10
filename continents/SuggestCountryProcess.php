<?php
session_start();

// si connecté on fait le traitement

include_once('../Repositories/DemandeRepository.php');
include_once('uploadImage.php');

$Demandes = new DemandeRepository();

if (isset($_SESSION['form_data'])) {

  $Demande = $Demandes->Create($_SESSION['form_data']);
$CountryName=$_SESSION['form_data']['name'];
$location="Location:/continents/SuggestionDetails.php?name=".$CountryName."&continent=".$_SESSION['form_data']['continent'] ;
unset($_SESSION['form_data']);
header($location);
 }
  else {

  $destination = uploadImage('image');

      // Update image path in $_POST
      $_POST['image'] = $destination;
    


      // on vérifie s'il n'est pas connecté et on le redirecte vers log in  
if (!isset($_SESSION['user'])) {
  $continent=$_POST['continent'];
  $_SESSION['precedent']='Location:/continents/SuggestCountryProcess.php' ;
  $_SESSION['form_data'] = $_POST;
  header('location:../Login.php');
}
else {
      // Create country
      $Demande = $Demandes->Create($_POST);
      $CountryName=$_POST['name'];
      $location="Location:/continents/SuggestionDetails.php?name=".$CountryName."&continent=".$_POST['continent'] ;
      header($location );
  } }