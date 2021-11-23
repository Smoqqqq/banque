<?php

    $routes = array(
        "home" => "",
        "inscription" => "inscription",
        "connexion" => "connexion",
        "carte" => "carte",
        "compte/compte" => "compte/compte",
        "mescartes" => "mescartes",
        "logout" => "deconnexion",
        "compte/dashboard" => "compte/dashboard",
        "compte/compte" => "compte/compte",
    );

    $description_default = "";
    $keyword_default = "";
    $metas = array(
        //page => meta title, meta description, meta keywords
        "home" => array("Accueil - Fortnua banque", "Accueil - Fortnua banque", "Accueil - Fortnua banque"),
        "inscription" => array("Inscription", "Ouvrez votre compte", ""),
        "connexion" => array("Connexion", "Connectez vous !", ""),
        "carte" => array("carte", "Obtenir une carte bancaire", ""),
        "compte/compte" => array("compte", "Afficher les informations de votre compte", ""),
        "mescartes" => array("compte", "Afficher mes cartes", ""),
        "deconnexion" => array("Se déconnecter", "Déconnectez vous de votre compte", ""),
        "compte/dashboard" => array("Gérez votre compte", "Gérez votre compte", ""),
        "compte/dashboard" => array("Gérez votre compte", "Gérez votre compte", ""),
        "compte/virements/nouveau" => array("Effectuer un nouveau virement", "Effectuer un nouveau virement", "nouveau virement")
    );
