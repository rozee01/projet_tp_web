<?php
session_start();
 include_once('uploadImage.php') ;
include_once('../Repositories/DemandeTipsRepository.php');
include_once('../Repositories/DemandeDetailsRepository.php');
$DemandesTips = new DemandeTipsRepository();
$DemandesDetails = new DemandeDetailsRepository();
$DemandeDetails = array_slice($_POST, 1,13, true) + array_slice($_POST, -1, 2, true);;
$DemandeTips = array_slice($_POST,14, -1, true); 
var_dump($DemandeDetails);
var_dump($DemandeTips);

for ($i = 0; $i < 7; $i++) {
 $file = $i>0 ? 'place'.$i : 'image' ;
  $destination = uploadImage($file);
 // Update image path in $_POST
  $DemandeDetails[$file] = $destination;
  if(($i<5))
  { $nbre=$i+1 ;
    $file2 = 'food' . $nbre;
  $destination = uploadImage($file2);

 // Update image path in $_POST
  $DemandeDetails[$file2] = $destination;
  }
}

$DemandeTips['name']=$_POST['name'];

$DemandeDetailsRow = $DemandesDetails->Create($DemandeDetails);
$DemandeTipsRow = $DemandesTips->Create($DemandeTips);

$_SESSION['message'] = 'SUGGESTION SUBMITTED ! THANK YOU FOR THE CONTRIBUTION !';
$continent=$_POST['continent'];
$location="location:/continents/continents.php?name=".$continent ;
header($location);
?>

