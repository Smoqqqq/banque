<nav id="navbar">
    <div class="row">
        <div class="col-3 header-left">
            <a href="<?= getRoute('home') ?>"><img src="<?= asset("assets/img/logo.png"); ?>" alt="">
                <p>
                    <h3>
                        <e>Fortuna</e><br>Banque
                    </h3>
                </p>
            </a>
        </div>
        <div class="col-5  header-middle">
            <div class="col">
                <a href="<?= getRoute('compte/compte') ?>">Mon compte</a>
            </div>
            <div class="col">
                <a href="<?= getRoute('mescartes') ?>">Mes cartes</a>
            </div>
            <div class="col">
                <a href="<?= getRoute('trouver-mes-amis') ?>">Trouver mes amis</a>
            </div>
        </div>
        <div class="col-4  header-right">
            <?php if (isset($_SESSION['login'])) { ?>
                <a href="<?= getRoute('compte/compte') ?>">Mon compte</a>
                <a class="connexion" href="<?= getRoute("logout"); ?>">Déconnexion</a>
            <?php } else { ?>
                <a href="<?= getRoute('connexion') ?>">Déja client ?</a>
                <a class="connexion" href="<?= getRoute('inscription') ?>">Inscription</a>
            <?php } ?>
        </div>
    </div>
</nav>