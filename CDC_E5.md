# ROLES :
    - ROLE_ADMIN :
        - Accès au pages de gestion des utilisateurs :
            - Suppression
            - Édition
            - Rendre un compte invisible
            - Bloquer les virements
    - ROLE_CONSEILLER :
        - Accès au page de gestion des utilisateurs :
            - Édition
            - Rendre un compte invisible

    - ROLE_USER :
        - Accès à l'historique des virements de la semaine précédente
        - Accès à son compte personnel
        - Accès au pages "client" du site
        - Droit de modification de ses informations personnelles

    - ROLE_ENTREPRISE :
        - Accès à l'historique de tous les virements 
        - Gestion de plusieurs comptes
        - Interface de gestion


## Définir un profil ADMIN :
- Créer une page listant les utilisateurs, proposant la modification ou la suppression des comptes
- Limiter son accès à L'administrateur


## Définir un profil CONSEILLER :
- Accorder un accès limité à la page de gestion des utilisateurs au conseiller :
    - Autoriser la modification / visibilité
    - bloquer la suppression


## Afficher l'historique des virements de la dernière semaine (ROLE_USER uniquement)
- Ajouter une condition dans la page existante d'historique des virements, en fonction du rôle, pour n'afficher que les virements récents.


## Définir un profil USER :
- Bloquer l'accès au pages d'administration
- Limiter la visibilité des virements à la dernière semaine
- Nombre de comptes limités à 1


## Définir un profil ENTREPRISE :
// - Proposer la création de multiples comptes pour l'entreprise
// - Différents comptes avec différents droits pour l'entreprise :
       - Lecture seule
//     - Lecture et écriture des informations
//     - Virements uniquement
//     - Lecture et écriture + Virements
//     - Rechargement Uniquement
//     - Rechargement et Virements
//     - Gestion complète du compte