<?php

isGranted(true, ["ROLE_ADMIN", "ROLE_CONSEILLER"]);

$sql = "SELECT * FROM user";

$query = $dbh->prepare($sql);
$query->execute();

$users = $query->fetchAll(PDO::FETCH_OBJ);

if(isset($_GET["deleteuser"])){
    $sql = "DELETE FROM user WHERE ID = :id";
    $query = $dbh->prepare($sql);
    $query->bindParam(":id", $_GET["deleteuser"], PDO::PARAM_INT);
    $query->execute();

    $name = str_replace("--", " ", $_GET["name"]);

    redirectNotification("Utilisateur <b>$name</b> supprimé !", getRoute("administration/gestion-utilisateurs"), "success");
}

if(isset($_GET["changevisibility"])){
    $user = getUser($_GET["changevisibility"]);

    $active = ($user["active"] == 0) ? 1 : 0;

    $sql = "UPDATE user SET active = :active WHERE ID = :userid";
    $query = $dbh->prepare($sql);
    $query->bindParam(":active", $active, PDO::PARAM_BOOL);
    $query->bindParam(":userid", $user["ID"], PDO::PARAM_INT);
    $query->execute();
    redirectNotification("Visibilité de l'utilisateur <b>$user[firstname] $user[lastname] </b> modifié !", getRoute("administration/gestion-utilisateurs"), "success");
}