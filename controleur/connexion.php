<?php
session_start();


// Vérifier si le formulaire de connexion a été soumis


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["seConnecter"])) {
    $username = $_POST["login"];
    $password = $_POST["password"];

    if (checkLogin($username, $password)) {
        $_SESSION["username"] = $username;

        

        $csvFilePatient = 'data/connexionPatient.csv';
        $csvFileMedecin = 'data/connexionMedecin.csv';

        $filePatient = fopen($csvFilePatient, 'r');
        $fileMedecin = fopen($csvFileMedecin, 'r');

        if ($fileMedecin !== false && $filePatient !== false) {
            $csvDataPatient = array();
            $csvDataMedecin = array();

            while (($row = fgetcsv($filePatient)) !== false) {
                $csvDataPatient[] = $row;
            }

            while (($row = fgetcsv($fileMedecin)) !== false) {
                $csvDataMedecin[] = $row;
            }

            fclose($filePatient);
            fclose($fileMedecin);

            if (isUserInCSV($csvDataPatient, $username)) {
                header("Location: ./?action=dashboardPrincipalPatient");
                $userDetailsPatient = getPatientDetails($username);
                if ($userDetailsPatient !== false) {
                    $_SESSION['patient_details'] = $userDetailsPatient;
                } else {
                    $_SESSION['medecin_details'] = [
                        'nom' => 'Informations introuvables',
                        'prenom' => 'Informations introuvables',
                        'mail' => 'Informations introuvables',
                        'tel' => 'Informations introuvables'
                    ];
                }

            } elseif (isUserInCSV($csvDataMedecin, $username)) {
                header("Location: ./?action=dashboardMedecin");
                $userDetailsMedecin = getMedecinDetails($username);
                if ($userDetailsMedecin !== false) {
                    $_SESSION['medecin_details'] = $userDetailsMedecin;
                } else {
                    $_SESSION['medecin_details'] = [
                        'nom' => 'Informations introuvables',
                        'prenom' => 'Informations introuvables',
                        'mail' => 'Informations introuvables',
                        'tel' => 'Informations introuvables'
                    ];
                }
            } else {
                header("Location: ./?action=connexion&alert=1");
            }
        } else {
            echo "Erreur lors de l'ouverture du fichier CSV.";
        }
    } else {
        header("Location: ./?action=connexion&error=1");
    }
}

//recupere les données de username connecté
        





// Vérifier si l'utilisateur est déjà connecté, si oui, rediriger vers la page dashboard appropriée
if (isset($_SESSION["username"]) ){

    // Lire le fichier CSV de connexionPatient
    $csvFilePatient = 'data/connexionPatient.csv';
    $filePatient = fopen($csvFilePatient, 'r');

    // Lire le fichier CSV de connexionMedecin
    $csvFileMedecin = 'data/connexionMedecin.csv';
    $fileMedecin = fopen($csvFileMedecin, 'r');

    // Vérifier si le fichier est ouvert avec succès
    if ($fileMedecin !== false && $filePatient !== false) {
        $csvDataPatient = array();
        $csvDataMedecin = array();

        // Lire le fichier ligne par ligne pour les patients
        while (($row = fgetcsv($filePatient)) !== false) {
            $csvDataPatient[] = $row;
        }

        // Lire le fichier ligne par ligne pour les médecins
        while (($row = fgetcsv($fileMedecin)) !== false) {
            $csvDataMedecin[] = $row;
        }

        // Fermer les fichiers
        fclose($filePatient);
        fclose($fileMedecin);

        if(isUserInCSV($csvDataPatient, $username)){
            header("Location: ./?action=dashboardPrincipalPatient");
            exit();
        }
        elseif(isUserInCSV($csvDataMedecin, $username)){
            header("Location: ./?action=dashboardMedecin");
            exit();
        }
        
    }
}











//Les fonctions

// Fonction pour vérifier les informations de connexion dans le fichier CSV
function checkLogin($username, $password) {
    // Chemin vers les 2 fichiers CSV
    $csvFilePatient = 'data/connexionPatient.csv';
    $csvFileMedecin = 'data/connexionMedecin.csv';

    // Vérifier si le fichier CSV existe
    if (!file_exists($csvFilePatient) && !file_exists($csvFileMedecin)) {
        die("Le fichier CSV n'existe pas.");
    }
    
    // Ouvrir le fichier en mode lecture
    $filePatient = fopen($csvFilePatient, 'r');
    $fileMedecin = fopen($csvFileMedecin, 'r');
    ;
    if ($filePatient === false && $fileMedecin === false) {
        die("Impossible d'ouvrir le fichier CSV.");
    }

    while (($row = fgetcsv($fileMedecin)) !== false || ($row = fgetcsv($filePatient)) !== false) {
        // Comparer les informations de connexion avec les colonnes "username" et "password"
        if ($row[0] === $username || $row[1] === $username && $row[2] === $password) {
            fclose($fileMedecin);
            fclose($filePatient);
            return true;
        }
    }

    fclose($filePatient);
    fclose($fileMedecin);
    return false;
}

// Fonction pour vérifier si l'utilisateur est dans le fichier CSV
function isUserInCSV($csvData, $username) {
    foreach ($csvData as $row) {
        if ($row[0] === $username || $row[1] === $username) {
            return true; // Si l'utilisateur est trouvé
        }
    }
    return false; // Si l'utilisateur n'est pas trouvé
}

// Fonction pour récupérer les informations du médecin à partir du fichier CSV
function getMedecinDetails($Username) {
    $filename = 'data/medecins.csv';

    // Vérifier si le fichier CSV existe
    if (!file_exists($filename)) {
        return false;
    }

    // Ouvrir le fichier CSV en lecture
    $file = fopen($filename, 'r');

    // Parcourir les lignes du fichier
    while (($row = fgetcsv($file)) !== false) {
        // Vérifier si le nom d'utilisateur correspond
        if ($row[10] == $Username || $row[3] == $Username) {
            // Fermer le fichier et retourner les informations du médecin
            fclose($file);
            return [
                'nom' => $row[1],
                'prenom' => $row[2],
                'mail' => $row[3],
                'tel' => $row[4],
                'adresse' => $row[5],
                'ville' => $row[6],
                'codePostal' => $row[7],
                'dateNaissance' => $row[8],
                'sexe' => $row[9],
            
            ];
        }


    }

    // Fermer le fichier si le médecin n'est pas trouvé
    fclose($file);

    return false;
}

// Fonction pour récupérer les informations du patient à partir du fichier CSV

function getPatientDetails($Username) {
    $filename = 'data/patients.csv';

    // Vérifier si le fichier CSV existe
    if (!file_exists($filename)) {
        return false;
    }

    // Ouvrir le fichier CSV en lecture
    $file = fopen($filename, 'r');

    // Parcourir les lignes du fichier
    while (($row = fgetcsv($file)) !== false) {
        // Vérifier si le nom d'utilisateur correspond
        if ($row[10] == $Username || $row[3] == $Username) {
            // Fermer le fichier et retourner les informations du patient
            fclose($file);
            return [
                'nom' => $row[1],
                'prenom' => $row[2],
                'mail' => $row[3],
                'tel' => $row[4],
                'adresse' => $row[5],
                'ville' => $row[6],
                'codePostal' => $row[7],
                'dateNaissance' => $row[8],
                'sexe' => $row[9],
            
            ];
        }
    }

    // Fermer le fichier si le patient n'est pas trouvé
    fclose($file);

    return false;
}



include "vue/vueEntete.php";

include "vue/vueConnexion.php";

include "vue/vuePied.php";

include_once "class/patient.php";



    
        
    

?>