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