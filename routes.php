<?php

    $routes = array(
        "home" => "",
        "inscription" => "inscription",
        "connexion" => "connexion",
        "carte" => "carte",
        "compte/compte" => "compte/compte",
        "compte/nouveau" => "compte/nouveau",
        "mescartes" => "mescartes",
        "logout" => "deconnexion",
        "compte/compte" => "compte/compte",
        "compte/virements/nouveau" => "compte/virements/nouveau",
        "404" => "404"
    );

    $description_default = "";
    $keyword_default = "";
    $metas = array(
        //page => meta title, meta description, meta keywords
        "home" => array("Accueil - Fortnua banque", "Accueil - Fortnua banque", "Accueil - Fortnua banque"),
        "inscription" => array("Inscription", "Ouvrez votre compte", ""),
        "logout" => array("Déconnexion", "Déconnexion", ""),
        "connexion" => array("Connexion", "Connectez vous !", ""),
        "carte" => array("carte", "Obtenir une carte bancaire", ""),
        "compte/compte" => array("compte", "Afficher les informations de votre compte", ""),
        "mescartes" => array("compte", "Afficher mes cartes", ""),
        "deconnexion" => array("Se déconnecter", "Déconnectez vous de votre compte", ""),
        "compte/nouveau" => array("Créez votre compte", "Créez votre compte", ""),
        "compte/virements/nouveau" => array("Effectuer un nouveau virement", "Effectuer un nouveau virement", "nouveau virement"),
        "404" => array("Erreur 404", "Erreur 404", "")
    );
