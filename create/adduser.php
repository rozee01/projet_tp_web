<?php

include_once 'UserRepository.php';

$userRepository = new UserRepository();
$user = $userRepository->create($_POST);
header("Location:../index.php" );
?>