<?php 
include('functions/compte.php'); 
?>
<div class="container-fluid princCompte">
    <div class="contenue">
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
                    <td colspan="2">Rue :</td>
                    <td><?= $result->street ?> </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td colspan="2">Numéro Téléphone :</td>
                    <td><?= $result->number ?> </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td colspan="2">Ville :</td>
                    <td><?= $result->city ?> </td>
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
                    <td><?= $result->account_type ?> </td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td colspan="2">Date de création du compte:</td>
                    <td><?= $result->date ?> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

