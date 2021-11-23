<?php

    $routes = array(
        "home" => "",
        "inscription" => "inscription",
        "connexion" => "connexion",
        "carte" => "carte",
        "compte" => "compte",
        "mescartes" => "mescartes",
        "logout" => "deconnexion",
        "comptes/dashboard" => "compte/dashboard",
        "comptes/compte" => "compte/compte",
    );

    foreach($routes as $route){
        $route = $base . $route;
    }

    $description_default = "";
    $keyword_default = "";
    $metas = array(
        //page => meta title, meta description, meta keywords
        "home" => array("Accueil - Fortnua banque", "Accueil - Fortnua banque", "Accueil - Fortnua banque"),
        "inscription" => array("Inscription", "Ouvrez votre compte", ""),
        "connexion" => array("Connexion", "Connectez vous !", ""),
        "carte" => array("carte", "Obtenir une carte bancaire", ""),
        "compte" => array("compte", "Afficher les informations de votre compte", ""),
        "mescartes" => array("compte", "Afficher mes cartes", ""),
        "deconnexion" => array("Se déconnecter", "Déconnectez vous de votre compte", ""),
        "comptes/dashboard" => array("Gérez votre compte", "Gérez votre compte", ""),
        "comptes/dashboard" => array("Gérez votre compte", "Gérez votre compte", ""),
    );
