<?php

include_once 'UserRepository.php';

$userRepository = new UserRepository();
$_POST['role']="User" ;
$user = $userRepository->create($_POST);
header("Location:../index.php" );
?>