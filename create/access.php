<?php

include_once './autoload.php';

try {
    $bd = CnxDB::getInstance();
} catch (PDOException $e) {
    print "Erreur : " . $e->getMessage();
}
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
$isAuthenticated = false;
if (isset($_POST['envoi'])) {
    if ((!empty($_POST['username'])) && (!empty($_POST['password']))) {
        $user = rtrim($_POST['username']);
        $pass = $_POST['password'];
        $query = "SELECT * FROM user WHERE username = ?  and  password=?";

        $stmt = $bd->prepare($query);
        $stmt->execute(array($user,  $pass));



        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['user'] = ucfirst($user);
            $_SESSION['role'] = $result['role'] ;
            $isAuthenticated = true;
            header('location:index.php');
        }
        if (!$isAuthenticated)
            header('Location:login.php?error=Veuillez vérifiez vos credentials');
    }
}
