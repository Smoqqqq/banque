<?php


function redirectNotification($message, $redirect = null){
    global $routes;
    if(!$redirect) $redirect = $routes['home'];
    $message = base64_encode($message);
    header("Location: $redirect?message=$message");
}

function printNotification(){
    if(isset($_GET['message'])){ 
        $message = base64_decode($_GET['message']);
        ?>
        <div class="notification">
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