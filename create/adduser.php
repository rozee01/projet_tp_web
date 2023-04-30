<?php

include_once 'autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errorr = "";
    
    // if any field is empty
    if (
    empty($_POST['username']) || 
    empty($_POST['email']) ||
    empty($_POST['password']))
{
    header("Location:create.php");
       
} else {
        // Create client
        $client = new Client(
            null,
            $_POST['username'],
            $_POST['password'],
            $_POST['email'],
           
        );
        
        // Add to db
        $clientC = new clientC();
        $clientC->addclient($client);
        
        // Redirect 
        header("Location:index.php");
    }
}

?>