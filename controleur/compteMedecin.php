<?php

include "./vue/vueDashboardMedecin.php";
include "./vue/vueCompteMedecin.php";
include "./vue/vuePied.php";

if(isset($_POST['deconnexion'])){
    session_destroy();
    header("Location: ./?action=connexion");
    exit();
}

if (!isset($_SESSION["username"])) {
    header("Location: ./?action=connexion");
    exit();
}
?>