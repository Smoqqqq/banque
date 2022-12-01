<?php
include("functions/compte/virements/historique.php");
isGranted(true, ["ROLE_USER", "ROLE_ENTREPRISE"]);
?>

<div class="container my-5">
    <div style="height:100px"></div>
    <h1 class="my-5">Historique des virements</h1>
    <?php if(isGranted(false, ["ROLE_USER"])){ ?>
        <div class="alert alert-info">
            <div class="text-info">En tant que particulier, vous n'avez accès qu'aux virements des 7 derniers jours.</div>
        </div>
    <?php } ?>
    <div class="card">
        <div class="text-left my-4">
            <a href="<?= getRoute('compte/compte'); ?>" class="btn btn-outline-primary">Retour au compte</a>
        </div>
        <div class="row">
            <div class="col-4">
                <h3>Destinataire</h3>
            </div>
            <div class="col-4 text-center">
                <h3>Date</h3>
            </div>
            <div class="col-4 text-right">
                <h3>Montant</h3>
            </div>
        </div>
        <hr>
        <?php foreach ($transactions as $transaction) { ?>
            <div class="row">
                <div class="col-4">
                    <p><?= $transaction->to_account; ?></p>
                </div>
                <div class="col-4 text-center">
                    <p><?= $transaction->created_at; ?></p>
                </div>
                <div class="col-4 text-right">
                    <p><?= $transaction->amount; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>