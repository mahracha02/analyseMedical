<?php
session_start();


session_destroy();
header("Location: index.php");

//si l'utilisateur est deconnecté, on le redirige vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: ./?action=connexion");
    exit();
}

exit();
?>