<?php

$user = getUser();
$userAccount = getUserAccount();

if(isset($_POST['transfer'])){
    if(!isset($_POST['amount']) || empty($_POST['amount']) || !isset($_POST['to']) || empty($_POST['to'])){
        redirectNotification("Veuillez remplir les champs du formulaire !", getRoute("compte/virements/nouveau"), "error");
    } else {
        $to = $_POST['to'];
        $amount = $_POST['amount'];

        makeTransfer($user, $to, $amount);
    }
}

function makeTransfer($user, $to, $amount){
    global $dbh;
    $userId = $user['ID'];
    $userBalance = intval($user['balance']);
    $userBalance -= intval($amount);
    $date = date("d/m/Y H:m");

    $sql = "INSERT INTO `transaction` (`id`, `to_account`, `from_account`, `amount`, `creation_date`) VALUES (NULL, :to_account, :from_account, :amount, :creation_date)";
    $query = $dbh->prepare($sql);
    $query->bindParam(":to_account", $to, PDO::PARAM_INT);
    $query->bindParam(":from_account", $userId, PDO::PARAM_INT);
    $query->bindParam(":amount", $amount, PDO::PARAM_STR);
    $query->bindParam(":creation_date", $date, PDO::PARAM_STR);

    $query->execute();

    $balanceSql = "UPDATE account WHERE user = :userId";
}