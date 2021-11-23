<?php
$id = getClientId();
$sql = "SELECT * FROM account WHERE user_id = :id";
$query = $dbh->prepare($sql);
$query->bindParam(":id", $id, PDO::PARAM_INT);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);

if ($result) {
    foreach ($result as $data) { ?>
        <a href="<?= $routes['comptes/compte'] ?>?account=<?= $data->id ?>" class="account">
            <p>compte : <?= $data->name ?></p>
            <p>Balance : <?= $data->balance ?></p>
        </a>
<?php }
} else {
    echo "NO ACCOUNT FOR ID: $id";
}
