<?php include("functions/compte/virement.php"); ?>

<div class="container my-5">
    <h1 class="my-5">Virements</h1>
    <div class="card">
        <div class="row">
            <div class="col-sm-6">
                <h2>Nouveau virement</h2>
                <hr>
                <form action="" method="post">
                    <label for="amount" class="form-label">Montant</label>
                    <input type="text" name="amount" class="form-control">
                    <label for="to" class="form-label">Transférer à</label>
                    <input type="text" name="to" id="" class="form-control">
                    <div class="text-right mt-4">
                        <input type="submit" name="transfer" value="Envoyer l'argent" class="btn btn-outline-primary">
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <h2>Compte</h2>
                <hr>
                <p><b>Utilisateur:</b> <?= $user['firstname']; ?> <?= $user['lastname']; ?></p>
                <p><b>Type de compte:</b> <?= $user['type']; ?></p>
                <p><b>Créée le:</b> <?= $user['created_at']; ?></p>
                <p><b>Solde:</b> <?= $userAccount['balance']; ?> €</p>
            </div>
        </div>
    </div>
</div>