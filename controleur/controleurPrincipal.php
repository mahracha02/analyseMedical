<?php
function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "connexion.php";
    $lesActions["dashboardMedecin"] = "dashboardMedecin.php";
    $lesActions["dashboardPatient"] = "dashboardPatient.php";
    $lesActions["dashboardPrincipalPatient"] = "dashboardPrincipalPatient.php";
    $lesActions["dashboardPrincipalMedecin"] = "dashboardPrincipalMedecin.php";
    $lesActions["AnalyseSaisiePatient"] = "analyseSaisiePatient.php";
    $lesActions["AnalyseSaisieMedecin"] = "analyseSaisieMedecin.php";
    $lesActions["messagePatient"] = "messagePatient.php";
    $lesActions["messageMedecin"] = "messageMedecin.php";
    $lesActions["comptePatient"] = "comptePatient.php";
    $lesActions["compteMedecin"] = "compteMedecin.php";
    $lesActions['aPropos'] = 'Apropos.php';
    $lesActions['contact'] = 'contact.php';
    $lesActions['connexion'] = 'connexion.php';
    $lesActions['login'] = 'processLogin.php';
    $lesActions['deconnexion'] = 'deConnexion.php';
    $lesActions['inscription'] = 'inscription.php';

    /*if (isset($_SESSION["estConnecte"])){
        $estConnecte = $_SESSION["estConnecte"];    
    }else{
        $estConnecte = false;
    }*/

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }

}
?>