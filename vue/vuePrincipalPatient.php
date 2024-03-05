<?php
// Tableaux contenant les chemins vers les fichiers CSV
$cheminsCSV = [
    'data/Analyses/ionogrammeSanguin.csv',
    'data/Analyses/marqueursTumoraux.csv',
    'data/Analyses/bilanHepatique.csv',
    'data/Analyses/biochimieSanguine.csv',
    'data/Analyses/endocrinologie.csv',
    'data/Analyses/hemogramme.csv',
    'data/Analyses/formuleLeucocytaire.csv',
    'data/Analyses/numerationPlaquettaire.csv',
    'data/Analyses/infectiologie.csv'
];

// Tableau pour stocker toutes les dates
$datesUniques = [];
$analyseBien = 0;
$analysePasBien = 0;

// Parcourir tous les fichiers CSV
foreach ($cheminsCSV as $chemin) {
    // Lire le contenu du fichier CSV
    $contenuCSV = lireCSV($chemin);

    // Extraire les dates du contenu du fichier
    foreach ($contenuCSV as $ligne) {
        // Assumant que la date est à la troisième colonne (indice 2)
        $date = $ligne[2];
        $statut=$ligne[4];

        // Stocker la date uniquement si elle n'est pas déjà présente
        if (!in_array($date, $datesUniques)) {
            $datesUniques[] = $date;
        }

        //Compteur pour les analyses bien 
        if($statut == "bien"){
            $analyseBien++;
        }
        if($statut == "pas bien"){
            $analysePasBien++;
        }
    }
}
?>
<div id="dashboardContent" class="content-fluid fixed  " style="height:100vh; width:100%" >
        <div class="row">
            <div class="container mt-4 ">
                <!-- Ajoutez ces balises à l'intérieur de votre tableau de bord -->
                <div class="row h-15" style="margin-bottom: 10px;">
                    <!-- Card - Nombre total d'analyses -->
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h5 class="card-title">Nombre total d'analyses</h5>
                                <p class="card-text">
                                    <?php
                                    $nombreTotalAnalyses = count($datesUniques);
                                    ?>
                                    <div class="card text-center bg-white">
                                        <div class="card-body">
                                            <p class="card-text text-lg"><b><?php echo $nombreTotalAnalyses; ?></b></p>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card - Nombre d'analyses bien -->
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h5 class="card-title">Nombre d'analyses bien</h5>
                                <p class="card-text">
                                    <div class="card text-center bg-white">
                                        <div class="card-body">
                                            <p class="card-text text-lg"><b><?php echo $analyseBien; ?></b></p>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card - Nombre d'analyses pas bien -->
                    <div class="col-md-3">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h5 class="card-title">Nombre d'analyses pas bien</h5>
                                <p class="card-text">
                                    <div class="card text-center bg-white">
                                        <div class="card-body">
                                            <p class="card-text text-lg"><b><?php echo $analysePasBien; ?></b></p>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card - Date de la dernière analyse -->
                    <div class="col-md-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h5 class="card-title">Date de la dernière analyse</h5>
                                <p class="card-text">
                                    <?php
                                    

                                    // Trouver la date la plus récente
                                    $derniereDate = max($datesUniques);
                                    ?>
                                    <div class="card text-center bg-white">
                                        <div class="card-body">
                                            <p class="card-text text-lg"><b><?php echo $derniereDate; ?></b></p>
                                        </div>
                                    </div>


                                    
                                </p> 
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row h-30" >
                    <!-- Tableau des 5 dernières analyses -->
                    <h2 class="col-md-12">5 dernières analyses :</h2>
                    <div class="col-md-6 table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Boucle pour afficher les 5 dernières analyses -->
                                <?php
                                
                                // Lisez le fichier CSV
                                $analyseIonogramme = lireCSV('data/Analyses/ionogrammeSanguin.csv');
                                $analyseMarqueursTumoraux = lireCSV('data/Analyses/marqueursTumoraux.csv');
                                $bilanHepatique = lireCSV('data/Analyses/bilanHepatique.csv');
                                $analyseBiochimie = lireCSV('data/Analyses/biochimieSanguine.csv');
                                $analyseEndocrinologie = lireCSV('data/Analyses/endocrinologie.csv');
                                $analyseHemogramme = lireCSV('data/Analyses/hemogramme.csv');
                                $analyseFormuleLeucocytaire = lireCSV('data/Analyses/formuleLeucocytaire.csv');
                                $analyseNumerationPlaquettaire = lireCSV('data/Analyses/numerationPlaquettaire.csv');
                                $analyseInfectiologie = lireCSV('data/Analyses/infectiologie.csv');


                                // Fusionner toutes les analyses dans un seul tableau
                                $allAnalyses = array_merge(
                                    $analyseIonogramme,
                                    $analyseMarqueursTumoraux,
                                    $bilanHepatique,
                                    $analyseBiochimie,
                                    $analyseEndocrinologie,
                                    $analyseHemogramme,
                                    $analyseFormuleLeucocytaire,
                                    $analyseNumerationPlaquettaire,
                                    $analyseInfectiologie
                                );

                                // Tableau associatif pour stocker le nombre d'analyses bien et pas bien pour chaque jour
                                    // Créer un tableau associatif pour regrouper les analyses par date
                                    $groupedAnalyses = [];
                                    foreach ($allAnalyses as $analyse) {
                                        $date = $analyse[2]; 
                                        $groupedAnalyses[$date][] = $analyse;
                                    }

                                    // Tri des analyses par date de la plus récente à la plus ancienne
                                    krsort($groupedAnalyses);
                                    // Initialiser les compteurs
                                    $stats = ['bien' => 0, 'pasBien' => 0];
                                    $counter = 0;
                                    // Parcourir les analyses regroupées par date
                                    foreach ($groupedAnalyses as $date => $analyses) {
                                        // Compter le nombre d'analyses "bien" et "pas bien"
                                        foreach ($analyses as $analyse) {
                                            if ($analyse[4] === 'bien') {
                                                $stats['bien']++;
                                            } elseif ($analyse[4] === 'pas bien') {
                                                $stats['pasBien']++;
                                            }
                                        }
                                        // Générer les boutons "Consulter" uniquement pour les cinq dernières analyses
                                        if ($counter >= 5) {
                                            break; // Sortir de la boucle une fois que les 5 dernières analyses ont été affichées
                                        }
                                        $counter++;

                                        //index pour garder la position de la date dans le tableau
                                        if($counter == 1){
                                            $index = $counter -1 ; 
                                        }
                                        if($counter == 2){
                                            $index = $counter -2 ; 
                                        }
                                        if($counter == 3){
                                            $index = $counter -3 ; 
                                        }
                                        if($counter == 4){
                                            $index = $counter -4 ; 
                                        }
                                        if($counter == 5){
                                            $index = $counter -5 ; 
                                        }

                                        
                                        
                                        ?>
                                        <tr>
                                            <td class="text-center align-middle"><b><?= $date ?></b></td> <!-- Date -->
                                            <td>
                                                <div class="card">
                                                    <h5 class="card-title text-white bg-success p-2"><?= $stats['bien'] ?> bien</h5>
                                                    <p class="card-text text-white bg-danger p-2"><?= $stats['pasBien'] ?> pas bien</p>
                                                </div>
                                            </td>
                                            <td style="height: 100px; vertical-align: middle;">
                                                <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                                                    <i class="bi bi-eye h2 text-primary mr-2"></i>
                                                    <button class="btn btn-primary" onclick="afficherDetailsAnalyse('<?= $date ?>', <?= $index ?>)">Consulter</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        // Réinitialiser les compteurs pour la prochaine date
                                        $stats['bien'] = 0;
                                        $stats['pasBien'] = 0;
                                        
                                    }
                                    
                                    
                                    ?>
                            </tbody>
                        </table>    
                    </div>
                   

                     <!-- Graphique en forme de donut -->
                     <div class="col-md-3" >
                        <canvas id="donutChart" width="100" height="100"></canvas>
                    </div>
                    
                  
                    <!-- Coordonnées de l'utilisateur (20%) -->
                    <div class="col-md-3">
                        <div class="card bg-info text-white  " style="max-height: 420px; margin-top:-10px ">
                            <div class="card-body text-center  ">
                                <!-- Contenu des coordonnées de l'utilisateur ici -->
                                <img src="photo/logo.png" alt="Photo de profil" class="img-fluid mx-auto rounded-circle mb-2" style="max-width: 150px;">
                                <h2 class="card-title mb-2">Bienvenue, <strong><?php echo $_SESSION['patient_details']['nom']; ?> !</strong></h2>
                                <!-- Ajoutez les détails de l'utilisateur ici (nom, prénom, email, téléphone) -->
                                <div class="text-left">
                                    <p class="mb-2"><strong style="color:#f2f2f2;">Nom:</strong> <?php echo $_SESSION['patient_details']['nom']; ?></p>
                                    <p class="mb-2"><strong style="color: #f2f2f2;">Prénom:</strong> <?php echo $_SESSION['patient_details']['prenom']; ?></p>
                                    <p class="mb-2"><strong style="color: #f2f2f2;">Email:</strong> <?php echo $_SESSION['patient_details']['mail']; ?></p>
                                    <p class="mb-2"><strong style="color: #f2f2f2;">Téléphone:</strong> <?php echo $_SESSION['patient_details']['tel']; ?></p>
                                </div>
                                <!-- Ajoutez un bouton pour modifier les coordonnées de l'utilisateur -->
                                <div class="d-flex justify-content-center align-items-center mt-2">
                                    <i class="bi bi-pencil h2 text-white mr-2"></i>
                                    <button class="btn btn-light">Modifier Mes Coordonnées</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row h-10 ">
                    <!-- Tableau des 12 mois -->
                    <h2 style="margin-top: -10px;">Analyses des 12 mois :</h2>
                    <div class="col-md-6 table-responsive" style="max-height: 200px; overflow-y: auto; margin-top:5px" >
                        
                        <table class="table table-bordered" style="margin-top: 15px;" >
                            <thead>
                                <tr>
                                    <th>Mois</th>
                                    <th>Nombre d'analyses</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <!-- Boucle pour afficher les 12 mois -->
                                <?php
                                $mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
                                foreach ($mois as $moisItem) {
                                    echo '<tr>';
                                    echo '<td>' . $moisItem . '</td>';
                                    echo '<td>' . rand(0, 10) . '</td>';
                                    echo '<td>';
                                    echo '<div class="d-flex justify-content-center align-items-center" style="height: 100%;">';
                                    echo '<button class="btn btn-primary mr-14 ml-14" onclick="afficherDetailsAnalyse()">Consulter</button>';
                                    echo '<button class="btn btn-warning mr-14">Corriger</button>';
                                    echo '<button class="btn btn-danger">Supprimer</button>';
                                    echo '</div>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                   

                    <!-- Carte avec les options -->
                    <div class="col-md-6">
                        <div class="card " >
                            <div class="card-body text-center" style="height: 200px;">
                                <h5 class="card-title mb-4">Choisir une option pour analyser vos résultats :</h5>
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <i class="bi bi-file-earmark-text h2 text-success mr-2"></i>
                                    <button >
                                        <a href="./?action=AnalyseSaisie" class="btn btn-success" style="text-decoration: none;">
                                            Saisir Manuellement
                                        </a>
                                    </button>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <i class="bi bi-cloud-download h2 text-info mr-2"></i>
                                    <button class="btn btn-info" onclick="diminuerLuminositeSaisieScan()">Télécharger Un Scan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    
                    
                    
                </div>
            </div>

        </div>
    </div>

    <!-- Formulaire pour telecharger un scan -->

    <div id="saisieScanForm" class="card animate__animated animate__fadeIn" style="width: 450px; height:300px;">
        <div class="card-body">
            <h5 class="card-title">Formulaire de Téléchargement d'un Scan</h5>
            <form>
                <div class="mb-3">
                    <label for="FichierScan" class="form-label"> Vueillez choisir un fichier :</label>
                    <input type="file" class="form-control" id="FichierScan">
                    <span class="text-muted">Formats acceptés: .jpg, .png, .pdf</span>
                </div>
                <div class="mb-3 mt-6 text-center">
                    <button type="submit" class="btn btn-primary" name="analyseScan">Analyser</button>
                </div>
                
            </form>
            <div class="mb-3 mt-6 text-center">
                <button class="btn btn-danger mt-2" onclick="revenirLuminositeNormaleSaisieScan()">Fermer</button>
            </div>
        </div>
    </div>


    <!-- formulaire pour afficher les details d'une analyse -->

    <div id="detailsAnalyse" class="card animate__animated animate__fadeIn" style=" max-height:800px; width:1000px; overflow-y: auto;">
        <div class="container mt-4">
            <h5 class="card-title text-center mb-3" style="color: blueviolet;"><b>Details de l'analyse</b></h5><br><br>
            <div class="row">
                <div class="col-md-6">
                    <label for="date" class="form-label"><b>Date de l'analyse :</b></label>
                    <input type="date" class="form-control" id="date" name="dateAnalyse"  disabled>
                </div>
                <div class="col-md-6">
                    <label for="statut" class="form-label"><b>Statut de l'analyse :</b></label>
                    <input type="text" class="form-control" id="statut" name="statutAnalyse"  disabled>
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-md-12">
                    <label for="type" class="form-label"><b>Type d'analyse :</b></label>
                    <input type="text" class="form-control" id="type" name="typeAnalyse"  disabled>
                </div>
                
            </div>

        
        <form class="formulaire-resultat" data-date="<?= $date ?>">                       
            <div class="row mt-2 mb-4"  >
                <div class="col-md-12">
                    <div id="hematologie">
                        <div id="hemogramme">
                            <h4><strong>HEMOGRAMME</strong></h4>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="Hématies" class="form-label">Hématies :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="hematie" name="hematie" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">T/L</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(3.84 - 5.12)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="Hémoglobine" class="form-label">Hémoglobine :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="hemoglobine" name="hemoglobine" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">g/dl</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(11.8 - 15.0)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="Hématocrite" class="form-label">Hématocrite :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="hematocrite" name="hematocrite" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">%</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(35.0 - 45.0)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="vgm" class="form-label">V.G.M :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="vgm" name="vgm" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">fL</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(83 - 97)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tcmh" class="form-label">T.C.M.H :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="tcmh" name="tcmh" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">pg</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(27.5 - 33.2)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="ccmh" class="form-label">C.C.M.H :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="ccmh" name="ccmh" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">g/dl</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(31.9 - 35.9)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="idr" class="form-label">I.D.R :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="idr" name="idr" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">%</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(11.2 - 15.9)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="Leucocytes" class="form-label">Leucocytes :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="Leucocytes" name="Leucocytes" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">G/L</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(3.80 - 9.10)</small>
                                </div>
                            </div>   
                        </div>

                        <div id="formuleLeucocytaire" >
                            <h4><strong>FORMULE LEUCOCYTAIRE</strong></h4>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="polynucléairesNeutrophiles" class="form-label">Polynucléaires Neutrophiles :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="polynucléairesNeutrophiles" name="leucocytes" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">%</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(1.90 - 5.70)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Polynucléaires Eosinophiles :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="eosinophiles" name="eosinophiles" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">G/L</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(0.04 - 0.52)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Polynucléaires Basophiles :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="basophiles" name="basophiles" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">G/L</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(0.0 - 0.09)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Lymphocytes :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="lymphocytes" name="lymphocytes" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">G/L</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(1.07 - 3.90)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Monocytes :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="monocytes" name="monocytes" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">G/L</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(0.17 - 0.56)</small>
                                </div>
                            </div>
                        </div>

                        <div id="numerationPlaquettaire">
                            <h4><strong>NUMERATION PLAQUETTAIRE</strong></h4>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Plaquettes :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="plaquette" name="plaquette" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">G/L</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(150 - 400)</small>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Volume Plaquettaire Moyen :</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" id="volumePlaquettaireMoyen" name="volumePlaquettaireMoyen" disabled>
                                </div>
                                <div class="col-md-1">
                                    <small class="form-text text-muted">fL</small>
                                </div>
                                <div class="col-md-3">
                                    <small class="form-text text-muted">(7.2 - 11.1)</small>
                                </div>
                            </div>
                                                      
                        </div>
                    </div>
                    <div id="ionogramme" >
                        <div class="row mt-5">
                            <div class="col-md-12 text-center"> <!-- Utilisation de la classe text-center pour centrer horizontalement -->
                                <h4 class="my-0 mx-0 py-2 mb-4" style="border: 2px solid black; border-radius: 10px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"> <!-- Utilisation de la classe my-0 pour supprimer les marges par défaut -->
                                    <strong>IONOGRAMME SANGUIN</strong>
                                </h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Sodium plasmatique:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="sodium" name="sodium" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mmol/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(136.0 - 145.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Potassium plasmatique:</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="potassium" name="potassium" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mmol/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(3.4 - 4.5)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Reserve alcaline :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="reserveAlcaline" name="reserveAlcaline" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mmol/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(22.0 - 29.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Protéines Totales :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="proteineTotal" name="proteineTotal" disabled>  
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">g/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(64.0- 83.0)</small>
                            </div>
                        </div>
                    </div>

                    <div id="biochimie">
                        <div class="row mt-5">
                            <div class="col-md-12 text-center"> <!-- Utilisation de la classe text-center pour centrer horizontalement -->
                                <h4 class="my-0 mx-0 py-2 mb-4" style="border: 2px solid black; border-radius: 10px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"> <!-- Utilisation de la classe my-0 pour supprimer les marges par défaut -->
                                    <strong>BIOCHIMIE</strong>
                                </h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Urée :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="uree" name="uree" disabled>  
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">g/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.17 - 0.48)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Créatinine :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="creatinine" name="creatinine" disabled>  
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">umol/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(45.0 - 84.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Poids utilisé dans le calcul :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="poidsCalcul" name="poidsCalcul" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">Kg</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(< 150)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Clairance MDRD (caucasien) :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="clairanceMDRD" name="clairanceMDRD" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mL/min</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(1.73m2)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Estimation de la clairance de la céatinine :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="estimationClairance" name="estimationClairance" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mL/min</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(>60.0 )</small>
                            </div>
                        </div>
                    </div>

                    <div id="endocrinologie">
                        <div class="row mt-5">
                            <div class="col-md-12 text-center"> <!-- Utilisation de la classe text-center pour centrer horizontalement -->
                                <h4 class="my-0 mx-0 py-2 mb-4" style="border: 2px solid black; border-radius: 10px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"> <!-- Utilisation de la classe my-0 pour supprimer les marges par défaut -->
                                    <strong>ENDOCRINOLOGIE</strong>
                                </h4>
                            </div>
                        </div>

                        <h4><strong>Bilan Glycémique</strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Glycémie :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="glycemie" name="glycemie" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">g/L</small>
                            </div>  
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.70 - 1.10)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Glycémie à jeun :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="glycemieAJean" name="glycemieAJean" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">g/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.70 - 1.10)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">hemoglobine glyquée (HbA1c):</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="hemoglobineGlyquee" name="hemoglobineGlyquee" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">%</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(4.0 - 6.0)</small>
                            </div>
                        </div>
                        <h4><strong>Thyroïde</strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">TSH ultra sensible :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="TSHUltraSensible" name="TSHUltraSensible" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mUI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.27 - 4.20)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">T3 libre :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="T3Libre" name="T3Libre" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">pmol/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(3.10 - 6.80)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">T4 libre :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="T4Libre" name="T4Libre" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">pmol/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(12.0 - 22.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Anticorps anti-TSH :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="anticorpsAntiTSH" name="anticorpsAntiTSH" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 4.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Anticorps anti-TPO :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="anticorpsAntiTPO" name="anticorpsAntiTPO" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 9.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Anticorps anti-Thyroglobuline :</label>
                            </div>  
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="anticorpsAntiThyroglobuline" name="anticorpsAntiThyroglobuline" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 4.0)</small>
                            </div>
                        </div>
                    </div>

                    <div id="infectiologie">
                        <div class="row mt-5">
                            <div class="col-md-12 text-center"> <!-- Utilisation de la classe text-center pour centrer horizontalement -->
                                <h4 class="my-0 mx-0 py-2 mb-4" style="border: 2px solid black; border-radius: 10px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"> <!-- Utilisation de la classe my-0 pour supprimer les marges par défaut -->
                                    <strong>INFECTIOLOGIE</strong>
                                </h4>
                            </div>
                        </div>
                        <h4><strong>Sérologie HIV</strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-HIV1+2 et Ag P24 :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiHIV1+2AgP24" name="acAntiHIV1+2AgP24" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-HIV1+2 :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiHIV1+2" name="acAntiHIV1+2" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ag P24 :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="agP24" name="agP24" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Western Blot :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="westernBlot" name="westernBlot" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">ARN HIV :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="arnHIV" name="arnHIV" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <h4><strong>Sérologie de l'hépatite virale A </strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">IgM anti-HAV :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="IgMAntiHAV" name="IgMAntiHAV" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <h4><strong>Sérologie de l'hépatite virale B </strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ag HBs :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="agHBs" name="agHBs" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-HBs :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiHBs" name="acAntiHBs" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-HBc Total :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiHBcTotal" name="acAntiHBcTotal" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <h4><strong>Sérologie de l'hépatite virale C </strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-HCV :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiHCV" name="acAntiHCV" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <h4><strong>Sérologie de la syphilis </strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">TPHA :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="TPHA" name="TPHA" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">VDRL :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="VDRL" name="VDRL" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>  
                        </div>
                        <h4><strong>Sérologie Mononucléose infectieuse </strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">MINI test :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="MINITest" name="MINITest" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-VCA IgM :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiVCAIgM" name="acAntiVCAIgM" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-EBNA IgG :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiEBNAIgG" name="acAntiEBNAIgG" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <h4><strong>Sérologie CMV </strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-CMV IgM :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiCMVIgM" name="acAntiCMVIgM" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-CMV IgG :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiCMVIgG" name="acAntiCMVIgG" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <h4><strong>Sérologie Toxoplasmose </strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-Toxoplasme IgM :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiToxoplasmeIgM" name="acAntiToxoplasmeIgM" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-Toxoplasme IgG :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiToxoplasmeIgG" name="acAntiToxoplasmeIgG" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <h4><strong>Sérologie Rubéole </strong></h4>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-Rubéole IgM :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiRubeoleIgM" name="acAntiRubeoleIgM" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ac anti-Rubéole IgG :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="acAntiRubeoleIgG" name="acAntiRubeoleIgG" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                    </div>

                    <div id="marqueursTumoraux">
                        <div class="row mt-5">
                            <div class="col-md-12 text-center"> <!-- Utilisation de la classe text-center pour centrer horizontalement -->
                                <h4 class="my-0 mx-0 py-2 mb-4" style="border: 2px solid black; border-radius: 10px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"> <!-- Utilisation de la classe my-0 pour supprimer les marges par défaut -->
                                    <strong>MARQUEURS TUMORAUX</strong>
                                </h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Calcitonine :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="calcitonine" name="calcitonine" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">pg/mL</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 5.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">CA 15-3 :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="CA15-3" name="CA15-3" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 30.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">CA 125 :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="CA125" name="CA125" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 35.0)</small>
                            </div>  
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">CA 19-9 :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="CA19-9" name="CA19-9" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 37.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">AFP :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="AFP" name="AFP" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">ng/mL</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 10.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">HCG :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="HCG" name="HCG" disabled> 
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 5.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">PSA Total :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="PSATotal" name="PSATotal" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">ng/mL</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 4.0)</small>
                            </div>
                        </div>
                    </div>

                    <div id="bilanHepatique">
                        <div class="row mt-5">
                            <div class="col-md-12 text-center"> <!-- Utilisation de la classe text-center pour centrer horizontalement -->
                                <h4 class="my-0 mx-0 py-2 mb-4" style="border: 2px solid black; border-radius: 10px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"> <!-- Utilisation de la classe my-0 pour supprimer les marges par défaut -->
                                    <strong>BILAN HEPATIQUE</strong>
                                </h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">ASAT (Transaminases SGOT) :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="ASAT" name="ASAT" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0 - 40)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">ALAT (Transaminases SGPT) :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="ALAT" name="ALAT" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0 - 40)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Gamma-GT :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="gammaGT" name="gammaGT" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(8 - 61)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">PAL (Phosphatases alcalines) :</label>
                            </div>
                            <div class="col-md-2"> 
                                <input type="text" class="form-control" id="PAL" name="PAL" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(30 - 120)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">5’NT (5’Nucléotidase) :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="5NT" name="5NT" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(5 - 70)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Bilirubines Libres :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="bilirubinesLibres" name="bilirubinesLibres" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mg/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0 - 17)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Bilirubines Conjugées :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="bilirubinesConjuguees" name="bilirubinesConjuguees" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mg/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0 - 5)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Bilirubine totale :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="bilirubineTotale" name="bilirubineTotale" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mg/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(5 - 21)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">TP (Temps de Prothrombine) :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="TP" name="TP" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">%</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(70 - 120)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Facteur V :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="facteurV" name="facteurV" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">%</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(70 - 120)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Albumine :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="albumine" name="albumine" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">g/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(35 - 50)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Alpha-1-Antitrypsine :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="alpha1Antitrypsine" name="alpha1Antitrypsine" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">g/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(2.8 - 4.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Anticorps Antimichondriaux :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="anticorpsAntimichondriaux" name="anticorpsAntimichondriaux" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0 - 20)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Ceruleoplasmine :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="ceruleoplasmine" name="ceruleoplasmine" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">g/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.2 - 0.6)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Cuprurie 24h :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="cuprurie24h" name="cuprurie24h" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">umol/24h</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.0 - 1.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">TSH us :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="TSHus" name="TSHus" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">mUI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.3 - 4.2)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">T3 Libre :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="T3Libre" name="T3Libre" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">ng/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(2.6 - 5.7)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">T4 Libre :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="T4Libre" name="T4Libre" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">ng/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(9.0 - 19.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Hb :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="Hb" name="Hb" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">g/dL</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(120 - 160)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Reticulocytes :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="reticulocytes" name="reticulocytes" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">G/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.5 - 1.5)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Schizocytes :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="schizocytes" name="schizocytes" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">/mm3</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0 - 1)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Haptoglobine :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="haptoglobine" name="haptoglobine" disabled> 
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">g/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0.3 - 2.0)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">IgA anti-Glutamases :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="IgAantiGlutamases" name="IgAantiGlutamases" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0 - 10)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">IgM anti-VCA :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="IgMantiVCA" name="IgMantiVCA" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0 - 10)</small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">ARN V :</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" id="ARNV" name="ARNV" disabled>
                            </div>
                            <div class="col-md-1">
                                <small class="form-text text-muted">UI/L</small>
                            </div>
                            <div class="col-md-3">
                                <small class="form-text text-muted">(0 - 10)</small>
                            </div>
                        </div>
                    </div>


                    
                                        
                    
                </div>
            </div>
        </form>
            <div class="row mt-4 text-center">
                <div class="col-md-6 mx-auto d-flex justify-content-center">
                    <button class="btn btn-danger w-40 mr-4" onclick="revenirLuminositeNormaleDetailsAnalyse()">Fermer</button>
                </div>
            </div>
            <div class="row mt-4 text-center mb-4">
                <div class="col-md-6 mx-auto d-flex justify-content-center">
                    <button class="btn btn-warning w-40 mr-4">Corriger</button>
                    <button class="btn btn-danger w-40">Supprimer</button>
                    <button class="btn btn-primary w-40 ml-4">Télécharger le PDF</button>
                </div>
            </div>
        </div>
    </div>

    <!-- mode saisie -->
    <div id="overlay"></div>

    <script>
        // Données du graphique
        var data = {
            labels: ['Bien', 'Pas bien', 'À refaire'],
            datasets: [{
                data: [13, 3, 2], // Remplacez ces valeurs par les données réelles
                backgroundColor: ['#28a745', '#dc3545', '#ffc107'], // Couleurs pour chaque section
                hoverOffset: 4
            }]
        };

        // Configuration du graphique
        var options = {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%', // Ajustez le pourcentage du trou intérieur
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        };

        // Créer le graphique en forme de donut
        var ctx = document.getElementById('donutChart').getContext('2d');
        var donutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
        }); 

        // Fonction pour basculer entre les modes clair et sombre
        function toggleDarkMode() {
            // Sélectionnez le corps de la page
            var body = document.body;

            // Basculez entre la classe 'dark-mode'
            body.classList.toggle('dark-mode');
        }


        // Ajoutez un gestionnaire d'événements au bouton de bascule
        document.getElementById('darkModeToggle').addEventListener('click', toggleDarkMode);

        
        function diminuerLuminositeSaisieScan() {
            $('body').addClass('saisie-mode'); // Ajoute la classe pour diminuer la luminosité et activer l'overlay
            $('#saisieScanForm').show().addClass('animate__fadeIn');
        }
        function revenirLuminositeNormaleSaisieScan() {
            $('body').removeClass('saisie-mode'); // Supprime la classe pour revenir à la luminosité normale et désactiver l'overlay
            $('#saisieScanForm').hide();
        }

        // Fonction pour revenir à la luminosité normale après avoir affiché les détails de l'analyse
        function revenirLuminositeNormaleDetailsAnalyse() {
            document.getElementById('detailsAnalyse').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }

        
        
        function afficherDetailsAnalyse(date, index) {

            var analyseIonogramme = <?= json_encode($analyseIonogramme) ?>[index];
            var analyseBiochimie = <?= json_encode($analyseBiochimie) ?>[index];
            var analyseEndocrinologie = <?= json_encode($analyseEndocrinologie) ?>[index];
            var analyseHemogramme = <?= json_encode($analyseHemogramme) ?>[index];
            var analyseFormuleLeucocytaire = <?= json_encode($analyseFormuleLeucocytaire) ?>[index];
            var analyseNumerationPlaquettaire = <?= json_encode($analyseNumerationPlaquettaire) ?>[index];
            var analyseInfectiologie = <?= json_encode($analyseInfectiologie) ?>[index];
            var bilanHepatique = <?= json_encode($bilanHepatique) ?>[index];
            var analyseMarqueursTumoraux = <?= json_encode($analyseMarqueursTumoraux) ?>[index];
            
            //date de tous les analyses a partir de la base de données
            var datesParType = {
                ionogramme: [],
                biochimie: [],
                hepatique: [],
                endocrinologie: [],
                hemogramme: [],
                formuleLeucocytaire: [],
                numerationPlaquettaire: [],
                infectiologie: [],
                marqueursTumoraux: []
            };

            // Remplir les tableaux avec les dates correspondantes
            for (var i = 0; i < <?= json_encode($analyseIonogramme) ?>.length; i++) {
                datesParType.ionogramme.push(<?= json_encode($analyseIonogramme) ?>[i][2]);
            }

            for (var i = 0; i < <?= json_encode($analyseBiochimie) ?>.length; i++) {
                datesParType.biochimie.push(<?= json_encode($analyseBiochimie) ?>[i][2]);
            }

            for (var i = 0; i < <?= json_encode($bilanHepatique) ?>.length; i++) {
                datesParType.hepatique.push(<?= json_encode($bilanHepatique) ?>[i][2]);
            }
            for (var i = 0; i < <?= json_encode($analyseEndocrinologie) ?>.length; i++) {
                datesParType.endocrinologie.push(<?= json_encode($analyseEndocrinologie) ?>[i][2]);
            }
            for (var i = 0; i < <?= json_encode($analyseHemogramme) ?>.length; i++) {
                datesParType.hemogramme.push(<?= json_encode($analyseHemogramme) ?>[i][2]);
            }
            for (var i = 0; i < <?= json_encode($analyseFormuleLeucocytaire) ?>.length; i++) {
                datesParType.formuleLeucocytaire.push(<?= json_encode($analyseFormuleLeucocytaire) ?>[i][2]);
            }
            for (var i = 0; i < <?= json_encode($analyseNumerationPlaquettaire) ?>.length; i++) {
                datesParType.numerationPlaquettaire.push(<?= json_encode($analyseNumerationPlaquettaire) ?>[i][2]);
            }
            for (var i = 0; i < <?= json_encode($analyseInfectiologie) ?>.length; i++) {
                datesParType.infectiologie.push(<?= json_encode($analyseInfectiologie) ?>[i][2]);
            }
            for (var i = 0; i < <?= json_encode($analyseMarqueursTumoraux) ?>.length; i++) {
                datesParType.marqueursTumoraux.push(<?= json_encode($analyseMarqueursTumoraux) ?>[i][2]);
            }

            console.log(datesParType);

            var types = ''; // Variable pour stocker les types

            //afficher date selectionnée
            $('#date').val(date);
            $('#statut').val(bilanHepatique[4]);

            //afficher les valeurs des analyses
            if(datesParType.hemogramme.includes(date) || datesParType.formuleLeucocytaire.includes(date) || datesParType.numerationPlaquettaire.includes(date)){ 
                types += 'Hematologie, '; 
            }  
            if(datesParType.hemogramme.includes(date)){
                $('#hematie').val(analyseHemogramme[5]);
                $('#hemoglobine').val(analyseHemogramme[6]);
                $('#hematocrite').val(analyseHemogramme[7]);
                $('#vgm').val(analyseHemogramme[8]);
                $('#tcmh').val(analyseHemogramme[9]);
                $('#ccmh').val(analyseHemogramme[10]);
                $('#idr').val(analyseHemogramme[11]);
                $('#Leucocytes').val(analyseHemogramme[12]);
            }
            if(datesParType.formuleLeucocytaire.includes(date)){
                $('#polynucléairesNeutrophiles').val(analyseFormuleLeucocytaire[5]);
                $('#eosinophiles').val(analyseFormuleLeucocytaire[6]);
                $('#basophiles').val(analyseFormuleLeucocytaire[7]);
                $('#lymphocytes').val(analyseFormuleLeucocytaire[8]);
                $('#monocytes').val(analyseFormuleLeucocytaire[9]);
            }
            if(datesParType.numerationPlaquettaire.includes(date)){
                $('#plaquette').val(analyseNumerationPlaquettaire[5]);
                $('#volumePlaquettaireMoyen').val(analyseNumerationPlaquettaire[6]);
            }

            if(datesParType.biochimie.includes(date)){ 
                types += analyseBiochimie[3] + ', ';
                $('#uree').val(analyseBiochimie[5]);
                $('#creatinine').val(analyseBiochimie[6]);
                $('#poidsCalcul').val(analyseBiochimie[7]);
                $('#clairanceMDRD').val(analyseBiochimie[8]);
                $('#estimationClairance').val(analyseBiochimie[9]);
            }
            if(datesParType.infectiologie.includes(date)){
                types += analyseInfectiologie[3] + ', ';
                $('#acAntiHIV1+2AgP24').val(analyseInfectiologie[5]);
                $('#acAntiHIV1+2').val(analyseInfectiologie[6]);
                $('#agP24').val(analyseInfectiologie[7]);
                $('#westernBlot').val(analyseInfectiologie[8]);
                $('#arnHIV').val(analyseInfectiologie[9]);
                $('#IgMAntiHAV').val(analyseInfectiologie[10]);
                $('#agHBs').val(analyseInfectiologie[11]);
                $('#acAntiHBs').val(analyseInfectiologie[12]);
                $('#acAntiHBcTotal').val(analyseInfectiologie[13]);
                $('#acAntiHCV').val(analyseInfectiologie[14]);
                $('#TPHA').val(analyseInfectiologie[15]);
                $('#VDRL').val(analyseInfectiologie[16]);
                $('#MINITest').val(analyseInfectiologie[17]);
                $('#acAntiVCAIgM').val(analyseInfectiologie[18]);
                $('#acAntiEBNAIgG').val(analyseInfectiologie[19]);
                $('#acAntiCMVIgM').val(analyseInfectiologie[20]);
                $('#acAntiCMVIgG').val(analyseInfectiologie[21]);
                $('#acAntiToxoplasmoseIgM').val(analyseInfectiologie[22]);
                $('#acAntiToxoplasmoseIgG').val(analyseInfectiologie[23]);
                $('#acAntiRubeoleIgM').val(analyseInfectiologie[24]);
                $('#acAntiRubeoleIgG').val(analyseInfectiologie[25]);
            }
            if(datesParType.ionogramme.includes(date)){
                types += analyseIonogramme[3] + ', ';
                $('#sodium').val(analyseIonogramme[5]);
                $('#potassium').val(analyseIonogramme[6]);
                $('#reserveAlcaline').val(analyseIonogramme[7]);
                $('#proteineTotal').val(analyseIonogramme[8]);
            }
            if(datesParType.endocrinologie.includes(date)){
                types += analyseEndocrinologie[3] + ', ';
                $('#glycemie').val(analyseEndocrinologie[5]);
                $('#glycemieAJean').val(analyseEndocrinologie[6]);
                $('#hemoglobineGlyquee').val(analyseEndocrinologie[7]);
                $('#TSHUltraSensible').val(analyseEndocrinologie[8]);
                $('#T3Libre').val(analyseEndocrinologie[9]);
                $('#T4Libre').val(analyseEndocrinologie[10]);
                $('#anticorpsAntiTSH').val(analyseEndocrinologie[11]);
                $('#anticorpsAntiTPO').val(analyseEndocrinologie[12]);
                $('#anticorpsAntiThyroglobuline').val(analyseEndocrinologie[13]);
            }
            if(datesParType.marqueursTumoraux.includes(date)){
                types += analyseMarqueursTumoraux[3] + ', ';
                $('#calcitonine').val(analyseMarqueursTumoraux[5]);
                $('#CA15-3').val(analyseMarqueursTumoraux[6]);
                $('#CA125').val(analyseMarqueursTumoraux[7]);
                $('#CA19-9').val(analyseMarqueursTumoraux[8]);
                $('#AFP').val(analyseMarqueursTumoraux[9]);
                $('#HCG').val(analyseMarqueursTumoraux[10]);
                $('#PSATotal').val(analyseMarqueursTumoraux[11]);
            }
            if(datesParType.hepatique.includes(date)){ 
                types += bilanHepatique[3] + ', ';
                $('#ASAT').val(bilanHepatique[5]);
                $('#ALAT').val(bilanHepatique[6]);
                $('#gammaGT').val(bilanHepatique[7]);
                $('#PAL').val(bilanHepatique[8]);
                $('#5NT').val(bilanHepatique[9]);
                $('#bilirubinesLibres').val(bilanHepatique[10]);
                $('#bilirubinesConjuguees').val(bilanHepatique[11]);
                $('#bilirubineTotale').val(bilanHepatique[12]);
                $('#TP').val(bilanHepatique[13]);
                $('#facteurV').val(bilanHepatique[14]);
                $('#albumine').val(bilanHepatique[15]);
                $('#alpha1Antitrypsine').val(bilanHepatique[16]);
                $('#anticorpsAntimichondriaux').val(bilanHepatique[17]);
                $('#ceruleoplasmine').val(bilanHepatique[18]);
                $('#cuprurie24h').val(bilanHepatique[19]);
                $('#TSHus').val(bilanHepatique[20]);
                $('#T3Libre').val(bilanHepatique[21]);
                $('#T4Libre').val(bilanHepatique[22]);
                $('#Hb').val(bilanHepatique[23]);
                $('#reticulocytes').val(bilanHepatique[24]);
                $('#schizocytes').val(bilanHepatique[25]);
                $('#haptoglobine').val(bilanHepatique[26]);
                $('#IgAantiGlutamases').val(bilanHepatique[27]);
                $('#IgMantiVCA').val(bilanHepatique[28]);
                $('#ARNV').val(bilanHepatique[29]);
            }

            if (datesParType.ionogramme.includes(date)==false) {
                $('#sodium').val('Null');
                $('#potassium').val('Null');
                $('#reserveAlcaline').val('Null');
                $('#proteineTotal').val('Null');
            }
            if (datesParType.biochimie.includes(date)==false) {
                $('#uree').val('Null');
                $('#creatinine').val('Null');
                $('#poidsCalcul').val('Null');
                $('#clairanceMDRD').val('Null');
                $('#estimationClairance').val('Null');
            }
            if (datesParType.endocrinologie.includes(date)==false) {
                $('#glycemie').val('Null');
                $('#glycemieAJean').val('Null');
                $('#hemoglobineGlyquee').val('Null');
                $('#TSHUltraSensible').val('Null');
                $('#T3Libre').val('Null');
                $('#T4Libre').val('Null');
                $('#anticorpsAntiTSH').val('Null');
                $('#anticorpsAntiTPO').val('Null');
                $('#anticorpsAntiThyroglobuline').val('Null');
            }
            if (datesParType.hemogramme.includes(date)==false) {
                $('#hematie').val('Null');
                $('#hemoglobine').val('Null');
                $('#hematocrite').val('Null');
                $('#vgm').val('Null');
                $('#tcmh').val('Null');
                $('#ccmh').val('Null');
                $('#idr').val('Null');
                $('#Leucocytes').val('Null');
            }
            if (datesParType.formuleLeucocytaire.includes(date)==false) {
                $('#polynucléairesNeutrophiles').val('Null');
                $('#eosinophiles').val('Null');
                $('#basophiles').val('Null');
                $('#lymphocytes').val('Null');
                $('#monocytes').val('Null');
            }
            if (datesParType.numerationPlaquettaire.includes(date)==false) {
                $('#plaquette').val('Null');
                $('#volumePlaquettaireMoyen').val('Null');
            }
            if (datesParType.infectiologie.includes(date)==false) {
                $('#acAntiHIV1+2AgP24').val('Null');
                $('#acAntiHIV1+2').val('Null');
                $('#agP24').val('Null');
                $('#westernBlot').val('Null');
                $('#arnHIV').val('Null');
                $('#IgMAntiHAV').val('Null');
                $('#agHBs').val('Null');
                $('#acAntiHBs').val('Null');
                $('#acAntiHBcTotal').val('Null');
                $('#acAntiHCV').val('Null');
                $('#TPHA').val('Null');
                $('#VDRL').val('Null');
                $('#MINITest').val('Null');
                $('#acAntiVCAIgM').val('Null');
                $('#acAntiEBNAIgG').val('Null');
                $('#acAntiCMVIgM').val('Null');
                $('#acAntiCMVIgG').val('Null');
                $('#acAntiToxoplasmoseIgM').val('Null');
                $('#acAntiToxoplasmoseIgG').val('Null');
                $('#acAntiRubeoleIgM').val('Null');
                $('#acAntiRubeoleIgG').val('Null');
            }
            if (datesParType.marqueursTumoraux.includes(date)==false) {
                $('#calcitonine').val('Null');
                $('#CA15-3').val('Null');
                $('#CA125').val('Null');
                $('#CA19-9').val('Null');
                $('#AFP').val('Null');
                $('#HCG').val('Null');
                $('#PSATotal').val('Null');
            }
            if (datesParType.hepatique.includes(date)==false) {
                $('#ASAT').val('Null');
                $('#ALAT').val('Null');
                $('#gammaGT').val('Null');
                $('#PAL').val('Null');
                $('#5NT').val('Null');
                $('#bilirubinesLibres').val('Null');
                $('#bilirubinesConjuguees').val('Null');
                $('#bilirubineTotale').val('Null');
                $('#TP').val('Null');
                $('#facteurV').val('Null');
                $('#albumine').val('Null');
                $('#alpha1Antitrypsine').val('Null');
                $('#anticorpsAntimichondriaux').val('Null');
                $('#ceruleoplasmine').val('Null');
                $('#cuprurie24h').val('Null');
                $('#TSHus').val('Null');
                $('#T3Libre').val('Null');
                $('#T4Libre').val('Null');
                $('#Hb').val('Null');
                $('#reticulocytes').val('Null');
                $('#schizocytes').val('Null');
                $('#haptoglobine').val('Null');
                $('#IgAantiGlutamases').val('Null');
                $('#IgMantiVCA').val('Null');
                $('#ARNV').val('Null');
            }


             


            // Supprimez la virgule supplémentaire à la fin de la liste des types
            if (types !== '') {
                types = types.slice(0, -2);
            }

            // Attribuez les types concaténés à la valeur du champ #type
            $('#type').val(types);

            document.getElementById('detailsAnalyse').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        
        }

        
        

    </script>

    <?php
        function lireCSV($fichier)
        {
            $handle = fopen($fichier, "r");
            $data = [];
            $premiereLigne = false; // Variable pour suivre si la première ligne a été sautée
            while (($row = fgetcsv($handle, 0, ",")) !== false) {
                if (!$premiereLigne) {
                    $premiereLigne = true; // Marquer que la première ligne a été sautée
                    continue; // Ignorer cette itération
                }
                $data[] = $row;
            }
            fclose($handle);
            return $data;
            var_dump($data);
        }

        
        function verifierDonnees($username, $date, $fichier)
        {
            // Charger les données du fichier CSV
            $donnees = lireCSV($fichier);

            // Parcourir les données pour rechercher l'utilisateur avec la date spécifique
            foreach ($donnees as $ligne) {
                // Si l'utilisateur et la date correspondent, retourner vrai
                if ($ligne[1] === $username && $ligne[2] === $date) {
                    return true;
                }
            }

            // Si aucun utilisateur correspondant n'est trouvé, retourner faux
            return false;
        }
    

    


    
    
    ?>
