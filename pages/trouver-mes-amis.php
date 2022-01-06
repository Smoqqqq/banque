<?php

$id = (isset($_SESSION['user-id'])) ? $_SESSION['user-id'] : 0;
$result = "";

if (isset($_POST['search'])) {
    $search = "%$_POST[search]%";
    $sql = "SELECT account_nb, firstname, lastname FROM user WHERE firstname LIKE :search OR lastname LIKE :search AND ID != :id LIMIT 10";
    $query = $dbh->prepare($sql);
    $query->bindParam(":search", $search, PDO::PARAM_STR);
    $query->bindParam(":id", $id, PDO::PARAM_INT);
    $query->execute();
    
    $result = $query->fetchAll(PDO::FETCH_OBJ);
} else {
    $sql = "SELECT account_nb, firstname, lastname FROM user WHERE ID != :id LIMIT 10";
    $query = $dbh->prepare($sql);
    $query->bindParam(":id", $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_OBJ);
}

?>

<div class="container my-5 py-5">
    <div class="card my-5">
        <form method="POST" style="display: flex; flex-direction: row; justify-content: flex-end; margin-bottom: 15px">
            <input type="text" class="form-control" name="search" style="width: fit-content; margin-right: 15px" placeholder="Nom / Prénom">
            <input type="submit" value="Chercher" class="btn btn-outline-primary">
        </form>
        <?php foreach ($result as $data) { ?>
            <div class="row">
                <div class="col-sm-4">
                    <p class='nom'><?= $data->firstname ?></p>
                </div>
                <div class="col-sm-4 text-center">
                    <p class='nom'><?= $data->lastname ?></p>
                </div>
                <div class="col-sm-4 text-right">
                    <p class="nb"><?= $data->account_nb ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>