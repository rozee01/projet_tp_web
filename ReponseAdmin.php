<?php 
$DemandeRepository= new DemandeRepository();
$DemandeCountryDetails = new PaysRepository();
$DemandeCountryTips = new CountryTips() ; 
$name=$_POST['name'];
$Demande = $DemandeRepository->findbyName($name);
$DemandeDetails = $DemandeCountryDetails->findbyName($name);
$DemandeTips = $DemandeCountryTips->findbyName($name);
if (isset($_POST['validate'])) {
    $Country= new CountriesRepository();
    $CountryDetails = new PaysRepository() ;
    $CountryTips = new PaysFactsTipsRepository ();
    $Country->create($Demande) ;
    $CountryDetails->create($DemandeDetails) ;
    $CountryTips->create($DemandeTips) ;
} elseif (isset($_POST['refuse'])) {
    $DemandeRepository->delete($name) ;
    $DemandeCountryDetails->delete($name) ;
    $DemandeCountryTips->delete($name) ;
}
