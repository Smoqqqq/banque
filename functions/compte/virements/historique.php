<?php

$user = getUser()["account_nb"];
$today = date_create(Date("Y-m-d"));
$lastWeek = date_sub($today, date_interval_create_from_date_string('10 days'));
$lastWeek = $lastWeek->format('Y-m-d H:i:s');
/* dd($lastWeek); */

if (getUser()["role"] === "ROLE_USER") {
    $sql = "SELECT * FROM `transaction` WHERE `from_account` = '$user' AND `created_at` > '$lastWeek'";
    $query = $dbh->prepare($sql);
    $query->execute();

    $transactions = $query->fetchAll(PDO::FETCH_OBJ);
} else {
    $sql = "SELECT * FROM transaction WHERE from_account = :user";

    $query = $dbh->prepare($sql);

    $query->bindParam(":user", $user, PDO::PARAM_STR);
    $query->execute();

    $transactions = $query->fetchAll(PDO::FETCH_OBJ);
}
