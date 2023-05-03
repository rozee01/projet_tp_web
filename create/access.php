<?php

include_once './autoload.php';

try {
    $bd = CnxDB::getInstance();
} catch (PDOException $e) {
    print "Erreur : " . $e->getMessage();
}

if (isset($_POST['envoi'])) {
    if ((!empty($_POST['username'])) && (!empty($_POST['password']))) {
        $user = rtrim($_POST['username']);
        $pass = $_POST['password'];
        $query = "SELECT * FROM user WHERE( username = ? or email=? ) and  password=?";
        $stmt = $bd->prepare($query);
        $stmt->execute(array($user, $user, $pass));

        if ($stmt->rowCount() > 0) {
            header('location:index.php');
        }
    }
}
