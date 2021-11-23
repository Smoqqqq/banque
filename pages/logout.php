<?php 

$_SESSION['login'] = "";
session_unset();
session_destroy();

$message = "Vous avez été déconnecté !";

redirectNotification($message);