<?php



class Medecin{
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

    function getMedecinDetails($Username) {
        $filename = 'medecins.csv';
    
        // Vérifier si le fichier CSV existe
        if (!file_exists($filename)) {
            return false;
        }
    
        // Ouvrir le fichier CSV en lecture
        $file = fopen($filename, 'r');
    
        // Parcourir les lignes du fichier
        while (($row = fgetcsv($file)) !== false) {
            // Vérifier si le nom d'utilisateur correspond
            if ($row[10] == $Username) {
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
}