<?php


include "./vue/vueDashboardPatient.php";

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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['suivant'])) {
    // Vérifiez si chaque case à cocher a été cochée et récupérez les valeurs
    $checkboxHematologie = isset($_POST['checkboxHematologie']) ? $_POST['checkboxHematologie'] : null;
    $checkboxHemogramme = isset($_POST['checkboxHemogramme']) ? $_POST['checkboxHemogramme'] : null;
    $checkboxFormuleLeucocytaire = isset($_POST['checkboxFormuleLeucocytaire']) ? $_POST['checkboxFormuleLeucocytaire'] : null;
    $checkboxNumerationPlaquettaire = isset($_POST['checkboxNumerationPlaquettaire']) ? $_POST['checkboxNumerationPlaquettaire'] : null;
    $checkboxIonogrammeSanguin = isset($_POST['checkboxIonogrammeSanguin']) ? $_POST['checkboxIonogrammeSanguin'] : null;
    $checkboxBiochimie = isset($_POST['checkboxBiochimie']) ? $_POST['checkboxBiochimie'] : null;

    // Utilisez les valeurs récupérées comme nécessaire
    // ...

    // Par exemple, afficher les valeurs pour le débogage
    var_dump($checkboxHematologie);
    var_dump($checkboxHemogramme);
    var_dump($checkboxFormuleLeucocytaire);
    var_dump($checkboxNumerationPlaquettaire);
    var_dump($checkboxIonogrammeSanguin);
    var_dump($checkboxBiochimie);

    


    

    if(isset($_POST['valider'])){

        if($checkboxHematologie == "hematologie"){ //si la checkbox est cochée

            if($checkboxHemogramme == "hemogramme"){
                $csvHemogramme = fopen("data/Analyses/hematologie.csv", "r");

                $newId = 1; // Valeur par défaut si le fichier est vide

                // Parcourir chaque ligne du fichier
                while ($row = fgetcsv($csvHemogramme)) {
                    // $row est un tableau représentant une ligne du CSV
                    // La première colonne (index 0) contient l'ID

                    // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
                    $newId = intval($row[0]);
                }
                $newId++;

            
                $hematocrite=$_POST['hematocrite'];
                $hemoglobine=$_POST['hemoglobine'];
                $hematie=$_POST['hematie'];
                $VGM=$_POST['VGM'];
                $TCMH=$_POST['TCMH'];
                $CCMH=$_POST['CCMH'];
                $RDW=$_POST['RDW'];
                $user=$_SESSION['username'];

                //saisie dans le fichier csv
                $fichierHemogramme = fopen("data/Analyses/hemogramme.csv", "a");

                fputcsv($fichierHemogramme, [
                    $newId,
                    $hematocrite,
                    $hemoglobine,
                    $hematie,
                    $VGM,
                    $TCMH,
                    $CCMH,
                    $RDW,
                    $user,
                ]);

                //fermeture du fichier csv
                fclose($fichierHemogramme); 
            }

            if($checkboxFormuleLeucocytaire == "formuleLeucocytaire"){
                $csvFormuleLeucocytaire = fopen("data/Analyses/hematologie.csv", "r");

                $newId = 1; // Valeur par défaut si le fichier est vide

                // Parcourir chaque ligne du fichier
                while ($row = fgetcsv($csvFormuleLeucocytaire)) {
                    // $row est un tableau représentant une ligne du CSV
                    // La première colonne (index 0) contient l'ID

                    // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
                    $newId = intval($row[0]);
                }
                $newId++;

            
                $leucocytes=$_POST['leucocytes'];
                $eosinophiles=$_POST['eosinophiles'];
                $basophiles=$_POST['basophiles'];
                $lymphocytes=$_POST['lymphocytes'];
                $monocytes=$_POST['monocytes'];
                $user=$_SESSION['username'];

                //saisie dans le fichier csv
                $fichierFormuleLeucocytaire = fopen("data/Analyses/formuleLeucocytaire.csv", "a");

                fputcsv($fichierFormuleLeucocytaire, [
                    $newId,
                    $leucocytes,
                    $eosinophiles,
                    $basophiles,
                    $lymphocytes,
                    $monocytes,
                    $user,
                ]);

                //fermeture du fichier csv
                fclose($fichierFormuleLeucocytaire); 
            }

            if($checkboxNumerationPlaquettaire == "numerationPlaquettaire"){
                $csvNumerationPlaquettaire = fopen("data/Analyses/hematologie.csv", "r");

                $newId = 1; // Valeur par défaut si le fichier est vide

                // Parcourir chaque ligne du fichier
                while ($row = fgetcsv($csvNumerationPlaquettaire)) {
                    // $row est un tableau représentant une ligne du CSV
                    // La première colonne (index 0) contient l'ID

                    // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
                    $newId = intval($row[0]);
                }
                $newId++;

            
                $plaquettes=$_POST['plaquette'];
                $volumePlaquettaireMoyen=$_POST['volumePlaquettaireMoyen'];
                $user=$_SESSION['username'];

                //saisie dans le fichier csv
                $fichierNumerationPlaquettaire = fopen("data/Analyses/numerationPlaquettaire.csv", "a");

                fputcsv($fichierNumerationPlaquettaire, [
                    $newId,
                    $plaquettes,
                    $volumePlaquettaireMoyen,
                    $user,
                ]);

                //fermeture du fichier csv
                fclose($fichierNumerationPlaquettaire); 
            }
        }

        if($checkboxBiochimie == "biochimie") {
            $csvBiochimie = fopen("data/Analyses/biochimieSanguine.csv", "r");

                $newId = 1; // Valeur par défaut si le fichier est vide

                // Parcourir chaque ligne du fichier
                while ($row = fgetcsv($csvBiochimie)) {
                    // $row est un tableau représentant une ligne du CSV
                    // La première colonne (index 0) contient l'ID

                    // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
                    $newId = intval($row[0]);
                }
                $newId++;

            
                $uree=$_POST['uree'];
                $creatinine=$_POST['creatinine'];
                $poidsCalcul=$_POST['poidsCalcul'];
                $clairanceMDRD=$_POST['clairanceMDRD'];
                $estimationClairance=$_POST['estimationClairance'];
                $user=$_SESSION['username'];

                



                //insertion dans le fichier csv
                $fichier = fopen("data/Analyses/biochimieSanguine.csv", "a");

                //ecriture dans le fichier csv
                fputcsv($fichier, [
                    $newId,
                    $uree,
                    $creatinine,
                    $poidsCalcul,
                    $clairanceMDRD,
                    $estimationClairance,
                    $user,
                ]);

            //fermeture du fichier csv
            fclose($fichier);  
        }

        if($checkboxIonogrammeSanguin == "ionogrammeSanguin") {
            $csvIonogramme = fopen("data/Analyses/ionogrammeSanguin.csv", "r");

                $newId = 1; // Valeur par défaut si le fichier est vide

                // Parcourir chaque ligne du fichier
                while ($row = fgetcsv($csvIonogramme)) {
                    // $row est un tableau représentant une ligne du CSV
                    // La première colonne (index 0) contient l'ID

                    // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
                    $newId = intval($row[0]);
                }
                $newId++;

            
                $sodium=$_POST['sodium'];
                $potassium=$_POST['potassium'];
                $reserveAlcaline=$_POST['reserveAlcaline'];
                $proteinesTotales=$_POST['proteineTotal'];
                $user=$_SESSION['username'];

                //saisie dans le fichier csv
                $fichierIonogramme = fopen("data/Analyses/ionogrammeSanguin.csv", "a");

                fputcsv($fichierIonogramme, [
                    $newId,
                    $sodium,
                    $potassium,
                    $chlore,
                    $bicarbonate,
                    $user,
                ]);

            //fermeture du fichier csv
            fclose($fichierIonogramme); 
        }

        

        

    

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
    }
}


?>