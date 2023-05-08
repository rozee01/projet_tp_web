<?php  function uploadImage($imageField) {
    // Retrieve form data
    $imagePath = $_FILES[$imageField]['tmp_name'];
  
    // Get file extension
    $extension = strtolower(pathinfo($_FILES[$imageField]['name'], PATHINFO_EXTENSION));
  
    // Generate unique file name
    $fileName = uniqid() . '.' . $extension;
  
    // Set destination path
    $destination = '../pics/' . $fileName;
    
    // Move file to destination path
    if (move_uploaded_file($imagePath, $destination)) {
        // Update image path in $_POST
        return $destination;
    } else {
        // Return null if upload failed
        return null;
    }
}

       ?>
