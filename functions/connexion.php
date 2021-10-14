<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = hash("sha256", $_POST['password'], false);

    $sql = "SELECT * FROM users WHERE email = :email";

    $query = $dbh->prepare($sql);
    $query->bindParam(":email", $email, PDO::PARAM_STR);

    $query->execute();

    $result = $query->fetch(PDO::FETCH_OBJ);

    if($password == $result->pass){
        $message = "Connexion effectué";
        $_SESSION['login'] = $result->email;
        redirectNotification($message);
    } else {
        $message = "Identifiants incorrect";
        redirectNotification($message, $routes['connexion']);
    }

}