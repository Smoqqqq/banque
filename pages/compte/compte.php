<?php
include('functions/compte.php');
?>
<div class="container-fluid princCompte py-5">
    <div class="card my-5">
        <div class="text-left my-4">
            <a href="<?= getRoute('compte/virements/nouveau'); ?>" class="btn btn-outline-primary">Faire un virement</a>
            <a href="<?= getRoute('compte/virements/historique'); ?>" class="btn btn-outline-primary">Historique des virements</a>
        </div>
        <h1>Mon compte :</h1>
        <h3>Information personnelles :</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Champ</th>
                    <th scope="col"></th>
                    <th scope="col">Informations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Nom :</td>
                    <td></td>
                    <td> <?= $result->firstname ?> </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Prénom :</td>
                    <td></td>
                    <td><?= $result->lastname ?> </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Civilité :</td>
                    <td><?= $result->civility ?> </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td colspan="2">Adresse E-mail : </td>
                    <td><?= $result->email ?> </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td colspan="2">Adresse :</td>
                    <td><?= $result->address ?> </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td colspan="2">Pays :</td>
                    <td><?= $result->country ?> </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td colspan="2">Date de naissance : </td>
                    <td><?= $result->date_of_birth ?> </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td colspan="2">Type de compte :</td>
                    <td><?= $result->type ?> </td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td colspan="2">Date de création du compte:</td>
                    <td><?= $result->created_at ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>