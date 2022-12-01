<?php include("functions/administration/edit-user.php"); ?>

<?php isGranted(true, ["ROLE_ADMIN", "ROLE_CONSEILLER"]); ?>

<div class="py-5"></div>

<div class="container my-5">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Éditer un utilisateur</h1>
        </div>
        <div class="card-body w-100">
            <form method="post">
                    <?php if (isGranted(false, ["ROLE_CONSEILLER"])) { ?>
                        <div style="display: none">
                    <?php } ?>

                    <label for="can_pay">Autoriser les virements</label>
                    <input type="checkbox" name="can_pay" <?php if ($user["can_pay"] == 1) echo "checked"; ?>><br><br>

                    <?php if (isGranted(false, ["ROLE_CONSEILLER"])) { ?>
                        </div>
                    <?php } ?>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" value="<?= $user["firstname"] ?>" class="form-control"><br>
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" value="<?= $user["lastname"] ?>" id="" class="form-control"><br><br>
                <input type="submit" value="Modifier" class="btn btn-outline-primary" name="edit">
            </form>
        </div>
    </div>
</div>