<?php

include "db.php";

$sql = "SELECT `balance` FROM `account` WHERE 1";
$query = $dbh->prepare($sql);
$query->execute();
$result = $query->fetch(PDO::FETCH_OBJ);

?>
