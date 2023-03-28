<?php

$userid = intval($_GET["userid"]);

$user = getUser($userid);

if(isset($_POST["edit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $can_pay = ($_POST["can_pay"] == "on") ? 1 : 0;
    
    $sql = "UPDATE user SET firstname = :firstname, lastname = :lastname, can_pay = :can_pay WHERE ID = :userid";

    $query = $dbh->prepare($sql);
    $query->bindParam(":firstname", $firstname, PDO::PARAM_STR);
    $query->bindParam(":lastname", $lastname, PDO::PARAM_STR);
    $query->bindParam(":can_pay", $can_pay, PDO::PARAM_STR);
    $query->bindParam(":userid", $userid, PDO::PARAM_INT);

    $query->execute();

    redirectNotification("Utilisateur modifié", getRoute("administration/gestion-utilisateurs"), "success");
}