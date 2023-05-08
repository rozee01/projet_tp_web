<?php 
session_start() ;
$name=$_POST['name'];


      // acceder a la table de demande de countries (la page de continents)
include_once('../Repositories/DemandeRepository.php');
$DemandeRepository= new DemandeRepository();
$Demande = $DemandeRepository->findbyName($name);
$continent=$Demande['continent'];


      // acceder a la table DemandeCountryDetails (places Images and food Images )
      include_once('../Repositories/DemandeDetailsRepository.php');
$DemandeCountryDetails = new DemandeDetailsRepository();
$DemandeDetails = $DemandeCountryDetails->findbyName($name);



      // acceder a la table DemandeCountryTips (Quick facts and tips )
      include_once('../Repositories/DemandeTipsRepository.php');
$DemandeCountryTips = new DemandeTipsRepository() ; 
$DemandeTips = $DemandeCountryTips->findbyName($name);



if (isset($_POST['validate'])) {
          // acceder aux 3 tables Countries , CountryDetails , CountryTips
          include_once('../Repositories/CountriesRepository.php'); 
          include_once('../Repositories/CountryTipsRepository.php'); 
          include_once('../Repositories/CountryDetailsRepository.php'); 

    $Country= new CountriesRepository();
    $CountryDetails = new CountryDetailsRepository() ;
    $CountryTips = new CountryTipsRepository ();
          // Ajouteur aux 3 tables les données approuvés 
    $Country->create($Demande) ;
    $CountryDetails->create($DemandeDetails) ;
    $CountryTips->create($DemandeTips) ; 
    $_SESSION['message'] = 'SUGGESTION VALIDATED ! ';
} else { $_SESSION['message'] = 'SUGGESTION REFUSED !';
}

        // Supprimer les lignes des 3 tables de demandes
      
    $DemandeRepository->delete($name) ;
    $DemandeCountryDetails->delete($name) ;
    $DemandeCountryTips->delete($name) ;
    
    $location="location:/continents/continents.php?name=".$continent ;
    header($location) ;

