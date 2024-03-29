<nav id="navbar">
    <div class="row">
        <div class="col-2 header-left">
            <a href="<?= getRoute('home') ?>"><img src="<?= asset("assets/img/logo.png"); ?>" alt="">
                <p>
                    <h3>
                        <e>Fortuna</e><br>Banque
                    </h3>
                </p>
            </a>
        </div>
        <div class="col-7  header-middle">
            <?php if (!isGranted(false, ["ROLE_ADMIN", "ROLE_CONSEILLER"])) { ?>
                <?php if (isset($_SESSION['login'])) { ?>
                    <div class="col">
                        <?php if (isGranted(false, ["ROLE_USER"])) { ?>
                            <a href="<?= getRoute('compte/virements/nouveau') ?>">Virements</a>
                        <?php } ?>
                    </div>
                    <div class="col">
                        <a href="<?= getRoute('compte/virements/historique') ?>">Historique</a>
                    </div>
                    <div class="col">
                        <a href="<?= getRoute('compte/rechargement') ?>">Rechargement</a>
                    </div>
                <?php } ?>
                <div class="col">
                    <a href="<?= getRoute('trouver-mes-amis') ?>">Trouver mes amis</a>
                </div>
            <?php } ?>
        </div>
        <div class="col-3  header-right">
            <?php if (isGranted(false, ["ROLE_USER", "ROLE_ENTREPRISE"])) { ?>
                <a href="<?= getRoute('compte/compte') ?>">Mon compte</a>
                <a class="connexion" href="<?= getRoute("logout"); ?>">Déconnexion</a>
            <?php } else if (!isGranted(false, ["ROLE_ADMIN", "ROLE_CONSEILLER"])) { ?>
                <a href="<?= getRoute('connexion') ?>">Déja client ?</a>
                <a class="connexion" href="<?= getRoute('inscription') ?>">Inscription</a>
                <div class="guide">
                    <p>Vous êtes nouveau ici ?<br>Créez un compte ou connectez vous !</p>
                </div>
            <?php } else { ?>
                <a href="<?= getRoute("administration/gestion-utilisateurs"); ?>">Gestion des utilisateurs</a>
                <a class="connexion" href="<?= getRoute("logout"); ?>">Déconnexion</a>
            <?php } ?>
        </div>
    </div>
</nav>