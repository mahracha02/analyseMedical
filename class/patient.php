<?php


class Patient {
    private $id;
    private $nom;
    private $prenom;
    private $mail;
    private $telephone;
    private $adresse;
    private $ville;
    private $zip;
    private $date_naissance;
    private $sexe;

    public function __construct($id=0, $nom=0, $prenom=0, $mail=0, $telephone=0, $adresse=0, $ville=0, $zip=0, $date_naissance='', $sexe=0){
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->zip = $zip;
        $this->date_naissance = $date_naissance;
        $this->sexe = $sexe;
    }

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getTelephone(){
        return $this->telephone;
    }
    public function getAdresse(){
        return $this->adresse;
    }
    public function getVille(){
        return $this->ville;
    }
    public function getZip(){
        return $this->zip;
    }
    public function getDate_naissance(){
        return $this->date_naissance;
    }
    public function getSexe(){
        return $this->sexe;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setMail($mail){
        $this->mail = $mail;
    }
    public function setTelephone($telephone){
        $this->telephone = $telephone;
    }
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }
    public function setVille($ville){
        $this->ville = $ville;
    }
    public function setZip($zip){
        $this->zip = $zip;
    }
    public function setDate_naissance($date_naissance){
        $this->date_naissance = $date_naissance;
    }
    public function setSexe($sexe){
        $this->sexe = $sexe;
    }

    public function addPatient() {
        // Créer une ligne CSV avec les propriétés du patient
        $newPatient = [
            $this->nom,
            $this->prenom,
            $this->mail,
            $this->telephone,
            $this->adresse,
            $this->ville,
            $this->zip,
            $this->date_naissance,
            $this->sexe
        ];

        // Ajouter la ligne au fichier CSV
        $csvFile = 'data/patients.csv';

        // Vérifier si le fichier CSV existe
        if (!file_exists($csvFile)) {
            // Gérer l'erreur ou créer le fichier si nécessaire
            die("Le fichier CSV n'existe pas.");
        }

        // Ajouter la ligne au tableau des patients
        $patientsData = [];

        /*
        // Lire les données existantes du fichier CSV
        $existingData = array_map('str_getcsv', file($csvFile));
        foreach ($existingData as $row) {
            $patientsData[] = $row;
        } */

        // Ajouter la nouvelle ligne au tableau
        $patientsData[] = $newPatient;

        // Écrire le tableau mis à jour dans le fichier CSV
        $file = fopen($csvFile, 'w');
        foreach ($patientsData as $patient) {
            fputcsv($file, $patient);
        }
        fclose($file);
    }
    public function loginVerif($username, $password) {
        // Chemin vers le fichier CSV
        $csvFile = 'data/connexionPatient.csv';

        // Vérifier si le fichier CSV existe
        if (!file_exists($csvFile)) {
            die("Le fichier CSV n'existe pas.");
        }

        // Ouvrir le fichier en mode lecture
        $file = fopen($csvFile, 'r');

        // Vérifier si l'ouverture du fichier a réussi
        if ($file === false) {
            die("Impossible d'ouvrir le fichier CSV.");
        }

        // Parcourir les lignes du fichier CSV
        while (($row = fgetcsv($file)) !== false) {
            // Comparer les informations de connexion
            if ($row[0] === $username && $row[2] === $password) {
                // Les informations de connexion sont correctes
                fclose($file);
                return true;
            }
            else{
            // Les informations de connexion ne correspondent à aucun utilisateur
            fclose($file);
            return false;
            }
        }

        
    }

    public function getInfoPatient($username) {
        // Chemin vers le fichier CSV
        $csvFile = 'data/patients.csv';

        $sql = "SELECT * FROM $csvFile ";
        

    }



}