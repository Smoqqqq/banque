<?php

$userAccount = getUserAccount();
$userId = getUser()["ID"];
$userName = getUser()["firstname"];

if (isset($_POST['rechargement'])) {
    $raw = str_replace("-", "", $_POST['code_input']);

    $amount = explode("&", $raw)[1];
    $key = explode("&", $raw)[0];

    if ($key == $userId) {
        if (strlen($amount) == 6) {
            if (strtolower(substr($amount, 0, 1)) == strtolower(substr($userName, 0, 1))) {
                $amount = substr($amount, 1, 5);
                $balance = $userAccount["balance"] + $amount;

                $sql = "UPDATE account SET balance = :balance WHERE user = :userid";
                $query = $dbh->prepare($sql);
                $query->bindParam(":balance", $balance, PDO::PARAM_INT);
                $query->bindParam(":userid", $userId, PDO::PARAM_INT);
                $query->execute();

                $message = "Rechargement de $amount € effectué !";

                redirectNotification($message, getRoute("compte/compte"));
            } else {
                redirectNotification("Le code est partiel ou incorrect", getRoute("compte/rechargement"), "danger");
            }
        } else {
            redirectNotification("Le code est partiel ou incorrect", getRoute("compte/rechargement"), "danger");
        }
    } else {
        redirectNotification("Le code n'existe pas.", getRoute("compte/rechargement"), "danger");
    }
}
