<?php


function redirectNotification($message, $redirect = null, $class = "success"){
    global $routes;
    if(!$redirect) $redirect = $routes['home'];
    $message = base64_encode($message);
    header("Location: $redirect?message=$message&class=$class");
    echo "<script>location.href=$redirect?message=$message&class=$class</script>";
}

function printNotification(){
    if(isset($_GET['message'])){ 
        $message = base64_decode($_GET['message']);
        if(isset($_GET['class'])) $class = $_GET['class'];
        ?>
        <div class="notification <?= $class ?>">
            <p><?=$message?></p>
        </div>

        <script>
            history.replaceState(null, "", location.href.split("?")[0])
        </script>
    <?php }
}

function asset($asset){
    global $slug;
    $offset = "";
    $array = explode("/", $slug);
    $i = 0;
    foreach($array as $tab){
        if($i > 0) $offset .= "../";
        $i++;
    }   
    return $offset . $asset;
}

function getClientId(){
    global $dbh;
    $login = $_SESSION['login'];
    $sql = "SELECT id FROM user WHERE email = :email";
    $query = $dbh->prepare($sql);
    $query->bindParam(":email", $login, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    return intval($result->id);
}

function getRoute($route){
    global $base;
    global $routes;
    return $base . $routes[$route];
}

function getUser($userId = null){
    global $dbh;
    if(isset($_SESSION['user-id'])){
        $id = ($userId == null) ? intval($_SESSION['user-id']) : $userId;
        $sql = "SELECT * FROM user WHERE id = :id";
        $query = $dbh->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();

        $result = $query->fetchAll();
        if($result){
            return $result[0];
        }
    }
    return false;
}

function getUserAccount($userId = null){
    global $dbh;
    if(isset($_SESSION['user-id'])){
        $id = ($userId == null) ? intval($_SESSION['user-id']) : $userId;
        $sql = "SELECT * FROM account WHERE user = :id";
        $query = $dbh->prepare($sql);
        $query->bindParam(":id", $id, PDO::PARAM_INT);
        $query->execute();

        $result = $query->fetchAll();
        if($result){
            return $result[0];
        }
        return false;
    }
    return false;
}