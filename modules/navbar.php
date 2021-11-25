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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#16db16" class="bi bi-dash-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" fill="#000" />
                </svg>
            </div>
            <div class="col">
                <a href="<?= getRoute('compte/compte') ?>">Mon compte</a>
            </div>
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#16db16" class="bi bi-dash-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" fill="#000" />
                </svg>
            </div>
            <div class="col">
                <a href="<?= getRoute('mescartes') ?>">Mes cartes</a>
            </div>
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-dash-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z" fill="#000" />
                </svg>
            </div>
        </div>
        <div class="col-4  header-right">
            <?php if (isset($_SESSION['login'])) { ?>
                <a href="<?= getRoute('compte/compte') ?>">Mon compte</a>
                <a class="connexion" href="<?= $routes['logout'] ?>">Déconnexion</a>
            <?php } else { ?>
                <a href="<?= getRoute('connexion') ?>">Déja client ?</a>
                <a class="connexion" href="<?= getRoute('inscription') ?>">Inscription</a>
            <?php } ?>
        </div>
    </div>
</nav>