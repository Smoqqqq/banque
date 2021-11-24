<?php include("functions/compte/nouveau.php"); ?>

<div class="container my-5">
    <div class="card">
        <div class="<?php if (getUserAccount()) { ?> blur<?php } ?>">
            <h1>Créer un compte</h1>
            <hr>
            <div class="row my-5">
                <div class="col-md-3 col-lg-4">
                    <img class="money_bag" src="<?= asset("assets/img/money_bag.png"); ?>" style="max-height: 300px; margin: auto; display: block">
                </div>
                <div class="col-md-6 col-lg-4">
                    <form method="post">
                        <h3>Je souhaite ouvrir un :</h3>
                        <label for="account_type" class="form-label">Type de compte</label>
                        <select name="account_type" id="account_type" class="form-control">
                            <option value="Compte individuel">Compte individuel</option>
                            <option value="Compte joint">Compte joint</option>
                        </select>
                        <div class="text-center mt-5">
                            <input type="submit" value="Ouvrir mon compte" name="create_account" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-lg-4">
                    <img class="money_bag" src="<?= asset("assets/img/money_bag.png"); ?>" style="max-height: 300px; margin: auto; display: block">
                </div>
            </div>
        </div>
        <?php if (getUserAccount()) { ?>
            <div class="shadow">
                <div class="text-center">
                    <h2 class="mb-5">Vous possédez déja un compte !</h2>
                    <div class="btn-center">
                        <a href="<?= getRoute("home"); ?>" class="btn btn-outline-secondary">Retour à l'accueil</a>
                        <a href="<?= getRoute("compte/compte"); ?>" class="btn btn-outline-primary">Mon compte</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>