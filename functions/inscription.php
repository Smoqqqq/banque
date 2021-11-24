<?php

use ScssPhp\ScssPhp\Value\Value;

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $created_at = date("d/m/Y");
    $role = "ROLE_USER";
    $country = $_POST['country'];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $civility = $_POST['civility'];
    /* $type = $_POST['account_type']; */
    $type = "UNDEFINED_ACCOUNT_TYPE";
    $date_of_birth = $_POST['date_of_birth'];

    $password = $_POST['password'];
    $password_verify = $_POST['verify_password'];

    if ($password === $password_verify) {
        $password = hash("sha256", $_POST['password'], false);

        $address = $_POST['number'] . " " . $_POST['street'] . " " . $_POST['city'];

        $sql = "SELECT * FROM user WHERE email = :email";

        $query = $dbh->prepare($sql);
        $query->bindParam(":email", $email, PDO::PARAM_STR);

        $query->execute();

        $result = $query->fetch(PDO::FETCH_OBJ);

        if (!$result) {
            $sql = "INSERT INTO user VALUES (NULL, :email, :password, :role, :created_at, :type, :country, :address, :civility, :firstname, :lastname, :date_of_birth)";

            $query = $dbh->prepare($sql);
            $query->bindParam(":email", $email, PDO::PARAM_STR);
            $query->bindParam(":created_at", $created_at, PDO::PARAM_STR);
            $query->bindParam(":password", $password, PDO::PARAM_STR);
            $query->bindParam(":role", $role, PDO::PARAM_STR);
            $query->bindParam(":type", $type, PDO::PARAM_STR);
            $query->bindParam(":country", $country, PDO::PARAM_STR);
            $query->bindParam(":address", $address, PDO::PARAM_STR);
            $query->bindParam(":civility", $civility, PDO::PARAM_STR);
            $query->bindParam(":firstname", $firstname, PDO::PARAM_STR);
            $query->bindParam(":lastname", $lastname, PDO::PARAM_STR);
            $query->bindParam(":date_of_birth", $date_of_birth, PDO::PARAM_STR);

            $query->execute();

            $message = "Votre compte à bien été crée !";

            //redirectNotification($message);
        } else {
            $message = "Erreur: cette addresse email est déja utilisée !";
            $redirect = getRoute('inscription');

            redirectNotification($message, $redirect);
        }
    } else {
        $message = "Erreur: Les mots de passe ne correspondent pas !";
        $redirect = getRoute('inscription');

        redirectNotification($message, $redirect);
    }
}
