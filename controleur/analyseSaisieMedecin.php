<?php

include "./vue/vueDashboardMedecin.php";
include "./vue/vueAnalyseSaisieMedecin.php";
include "./vue/vuePied.php";

if(isset($_POST['deconnexion'])){
    session_destroy();
    header("Location: ./?action=connexion");
    exit();
}

if (!isset($_SESSION["username"])) {
    session_destroy();
    header("Location: ./?action=connexion");
    exit();
}
?>