<?php include "functions/scss.php"; ?>
<?php include "router.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="<?=$conf_description?>">
    <meta name="keywords" content="<?=$conf_keywords?>">
    <title><?=$conf_title?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include $page ?>
    
    <?php include "js-bottom.php" ?>
</body>

</html>