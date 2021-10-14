<?php 

    $email = $_SESSION['login'];
    $sql = "SELECT * FROM users WHERE email = :email";
    $query = $dbh->prepare($sql);
    $query ->bindParam(":email", $email, PDO::PARAM_STR);

    $query->execute();

    $result = $query->fetch(PDO::FETCH_OBJ);
