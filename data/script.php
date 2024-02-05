<?php
// Fonction pour générer un fichier CSV avec des données
function generateCSV($filename, $data) {
    $fp = fopen($filename, 'w');

    // Écriture de l'en-tête
    fputcsv($fp, array_keys($data[0]));

    // Écriture des données
    foreach ($data as $row) {
        fputcsv($fp, $row);
    }

    fclose($fp);
}

// Données pour les tables
$patients = array(
    array('id', 'nom', 'prenom', 'mail', 'telephone', 'adresse', 'ville', 'zip', 'date_naissance', 'sexe'),
    array(1, 'Patient1', 'Nom1', 'patient1@example.com', '123456789', 'Adresse1', 'Ville1', '12345', '1990-01-01', 'M'),
    // Ajoutez d'autres patients si nécessaire
);

$medecins = array(
    array('id', 'nom', 'prenom', 'mail', 'telephone', 'adresse', 'ville', 'zip', 'date_naissance', 'sexe'),
    array(1, 'Medecin1', 'Nom1', 'medecin1@example.com', '987654321', 'Adresse2', 'Ville2', '54321', '1980-02-02', 'F'),
    // Ajoutez d'autres médecins si nécessaire
);

$connexionPatient = array(
    array('username', 'email', 'mot_de_passe'),
    array('patient1', 'patient1@example.com', 'password1'),
    // Ajoutez d'autres connexions patient si nécessaire
);

$connexionMedecin = array(
    array('username', 'email', 'mot_de_passe'),
    array('medecin1', 'medecin1@example.com', 'password2'),
    // Ajoutez d'autres connexions médecin si nécessaire
);

$statuts = array(
    array('id', 'type', 'idPatient', 'idMedecin'),
    array(1, 'Statut1', 1, 1),
    // Ajoutez d'autres statuts si nécessaire
);

// Génération des fichiers CSV
generateCSV('patients.csv', $patients);
generateCSV('medecins.csv', $medecins);
generateCSV('connexionPatient.csv', $connexionPatient);
generateCSV('connexionMedecin.csv', $connexionMedecin);
generateCSV('statuts.csv', $statuts);

echo "Fichiers CSV générés avec succès.";
?>
