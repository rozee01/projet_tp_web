<?php
include_once('../DemandeRepository.php');
$Demandes = new DemandeRepository();


    // Retrieve form data
    $imagePath = $_FILES['image']['tmp_name'];
    
    // Get file extension
    $extension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    
    // Generate unique file name
    $fileName = uniqid() . '.' . $extension;
    
    // Set destination path
    $destination = '../pics/' . $fileName;
    
    // Move file to destination path
    if (move_uploaded_file($imagePath, $destination)) {
      // Update image path in $_POST
      $_POST['image'] = $destination;
    
      // Create country
      $Demande = $Demandes->Create($_POST);
      header("Location:/index.php" );
    
      // Dump created country to check
      var_dump($countries);
    } else {
      // File upload failed
      echo "Failed to upload file.";
    }
    


