<?php 
$name=$_POST['name'];

      // acceder a la table de demande de countries (la page de continents)
$DemandeRepository= new DemandeRepository();
$Demande = $DemandeRepository->findbyName($name);



      // acceder a la table DemandeCountryDetails (places Images and food Images )
$DemandeCountryDetails = new PaysRepository();
$DemandeDetails = $DemandeCountryDetails->findbyName($name);



      // acceder a la table DemandeCountryTips (Quick facts and tips )
$DemandeCountryTips = new CountryTips() ; 
$DemandeTips = $DemandeCountryTips->findbyName($name);



if (isset($_POST['validate'])) {
          // acceder aux 3 tables Countries , CountryDetails , CountryTips 
    $Country= new CountriesRepository();
    $CountryDetails = new PaysRepository() ;
    $CountryTips = new PaysFactsTipsRepository ();
          // Ajouteur aux 3 tables les données approuvés 
    $Country->create($Demande) ;
    $CountryDetails->create($DemandeDetails) ;
    $CountryTips->create($DemandeTips) ; }

        // Supprimer les lignes des 3 tables de demandes
        
    $DemandeRepository->delete($name) ;
    $DemandeCountryDetails->delete($name) ;
    $DemandeCountryTips->delete($name) ;

