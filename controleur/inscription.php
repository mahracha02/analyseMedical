<?php
session_start();


if(isset($_POST['inscrire'])){

    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $newPrenom = $_POST['newPrenom'];
    $newUsername = $_POST['newUsername'];
    $newEmail = $_POST['newEmail'];
    $newTelephone = $_POST['newTelephone'];
    $newAdresse = $_POST['newAdresse'];
    $newVille = $_POST['newVille'];
    $newCodePostal = $_POST['newCodePostal'];
    $choixStatut = $_POST['choixStatut'];
    $id_medecin = $_POST['choixMedecin'];
    $dateNaissance = $_POST['dateNaissance'];
    $sexe = $_POST['sexe'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];


    // Ouvrir le fichier CSV en mode lecture
    if ($choixStatut == "medecin") {
        $csvFile = fopen('data/medecins.csv', 'r');
    }
    if ($choixStatut == "patient") {
        $csvFile = fopen('data/patients.csv', 'r');
    }

    // Vérifier si le fichier CSV existe
    if (!$csvFile) {
        // Rediriger vers une page d'erreur
        header("Location: ./?action=inscription&success=false");
        exit();
    }

    $newId = 1; // Valeur par défaut si le fichier est vide

    

    // Parcourir chaque ligne du fichier
    while ($row = fgetcsv($csvFile)) {
        // $row est un tableau représentant une ligne du CSV
        // La première colonne (index 0) contient l'ID

        // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
        $newId = intval($row[0]);
    }

    // Incrémenter $newId pour obtenir le nouvel ID
    $newId++;



    

    // Fermer le fichier CSV
    fclose($csvFile);


    // Ouvrir le fichier CSV en mode ajout (a)
    $csvMedecin = fopen('data/medecins.csv', 'a');
    $csvPatient = fopen('data/patients.csv', 'a');
    $connexionPatient = fopen('data/connexionPatient.csv', 'a');
    $connexionMedecin = fopen('data/connexionMedecin.csv', 'a');
    // Ouvrir le fichier CSV en mode lecture
    if ($choixStatut == "medecin") {
        $csvConnexion = fopen('data/connexionMedecin.csv', 'r');
    }
    if ($choixStatut == "patient") {
        $csvConnexion = fopen('data/connexionPatient.csv', 'r');
    }

    $existUsername = false;
    $existEmail = false;

    while (($row = fgetcsv($csvConnexion)) !== false) {
        // Comparer les informations de connexion avec les colonnes "username" et "password"
        foreach ($row as $key => $value) {
            if ($key == 0 && $value == $newUsername) {
                $existUsername = true;
            }
            if ($key == 1 && $value == $newEmail) {
                $existEmail = true;
            }
        }
    }



    if ($choixStatut == "medecin" && $existUsername==false && $existEmail==false) {


        // Écrire les données dans le fichier CSV
        fputcsv($csvMedecin, [
            $newId,
            $name,
            $newPrenom,
            $newEmail,
            $newTelephone,
            $newAdresse,
            $newVille,
            $newCodePostal,
            $dateNaissance,
            $sexe,
            $newUsername,
        ]);
        fputcsv($connexionMedecin, [
            $newUsername,
            $newEmail,
            $newPassword,
        ]);
        } 
    if ($choixStatut == "patient" && $existUsername==false && $existEmail==false) {
        // Écrire les données dans le fichier CSV
        fputcsv($csvPatient, [
            $newId,
            $name,
            $newPrenom,
            $newEmail,
            $newTelephone,
            $newAdresse,
            $newVille,
            $newCodePostal,
            $dateNaissance,
            $sexe,
            $newUsername,
            $id_medecin,
        ]);
        fputcsv($connexionPatient, [
            $newUsername,
            $newEmail,
            $newPassword,
        ]);
    }



        // Fermer le fichier CSV
        fclose($csvMedecin);
        fclose($csvPatient);
        fclose($connexionPatient);
        fclose($connexionMedecin);
        fclose($csvConnexion);

        if ($existUsername==true) {
            header("Location: ./?action=inscription&success=false"); 
            //echo "<script>alert('Le nom d\'utilisateur existe déjà.')</script>";
            // ajout de l'utilisateur échoué
            $_SESSION['message'] = 'Le nom d\'utilisateur existe déjà!';
            exit();
        }
        if ($existEmail==true) {
            header("Location: ./?action=inscription&success=false"); 
            //echo "<script>alert('L\'adresse email existe déjà.')</script>";
            // ajout de l'utilisateur échoué
            $_SESSION['message'] = 'L\'adresse email existe déjà! Si vous avez déjà un compte, veuillez vous connecter.';
            exit();
        }

        // Redirigez vers une page de succès ou d'échec
        if ($csvMedecin && $connexionMedecin) {
            header("Location: ./?action=inscription&success=true");
            //echo "<script>alert('Votre compte a été créé avec succès.')</script>"; 
            // Après avoir ajouté l'utilisateur avec succès
            $_SESSION['message'] = 'Le compte a été créé avec succès!';

            
            exit();
        }
        if ($csvPatient && $connexionPatient) {
            header("Location: ./?action=inscription&success=true"); 
            //echo "<script>alert('Votre compte a été créé avec succès.')</script>";

            // Après avoir ajouté l'utilisateur avec succès
            $_SESSION['message'] = 'Le compte a été créé avec succès!';
            exit();
        }
        else {
            header("Location: ./?action=inscription&success=false"); 
            //echo "<script>alert('Erreur lors de la création du compte.')</script>";
            // ajout de l'utilisateur échoué
            $_SESSION['message'] = 'Erreur lors de la création du compte!';
            exit();
        }
}

include "vue/vueEntete.php";

include "vue/vueInscription.php";

include "vue/vuePied.php";

include_once "class/patient.php";





?>