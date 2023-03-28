<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = hash("sha256", $_POST['password'], false);

    $sql = "SELECT * FROM user WHERE email = :email";

    $query = $dbh->prepare($sql);
    $query->bindParam(":email", $email, PDO::PARAM_STR);

    $query->execute();

    // L'utilisateur correspondant à l'email
    $user = $query->fetch(PDO::FETCH_OBJ);

    if ($user) {
        if ($password == $user->pass) {
            $message = "Connexion effectué";
            $_SESSION['login'] = $user->email;
            $_SESSION['user-id'] = $user->ID;
            if ($user->role == "ROLE_USER" || $user->role == "ROLE_ENTREPRISE") {
                redirectNotification($message, getRoute("compte/compte"));
            } else {
                redirectNotification($message, getRoute("administration/gestion-utilisateurs"));
            }
        } else {
            $message = "Identifiants incorrect";
            redirectNotification($message, getRoute('connexion'));
        }
    } else {
        redirectNotification("Aucun compte ne correspond à cet email", getRoute('connexion'));
    }

}