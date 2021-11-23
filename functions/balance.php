<?php

include "db.php";

$sql = "SELECT `account.balance`,`user.firstname` FROM `account` WHERE `users.id`=3 ";
$query = $dbh->prepare($sql);
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);
?>

<div> 
    <h2> <?= $result->firstname ?> <h2>
        <p>
            Votre solde est de : <?= $result->balance ?> 
        </p>
</div>



