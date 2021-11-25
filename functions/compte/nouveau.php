<?php

if(isset($_POST['account_type'])){
    $type = $_POST['account_type'];
    $userId = getUser()["ID"];

    $sql = "UPDATE user SET type = :type WHERE id = :userId";
    $query = $dbh->prepare($sql);
    $query->bindParam(":type", $type, PDO::PARAM_STR);
    $query->bindParam(":userId", $userId, PDO::PARAM_STR);
    $query->execute();

    $sql = "INSERT INTO account (id, user, balance) VALUES (NULL, :userId, 0)";
    $query = $dbh->prepare($sql);
    $query->bindParam(":userId", $userId, PDO::PARAM_STR);
    $query->execute();

    redirectNotification("Votre compte à bien été crée !", getRoute("home"));
}