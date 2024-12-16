<?php

// Charger le contenu du fichier CSV dans un tableau
$patients = lireCSV("data/patients.csv"); 
$medecins = lireCSV("data/medecins.csv");


$medecinsAssoc = [];
foreach ($medecins as $medecin) {
    $medecinsAssoc[$medecin[0]] = $medecin[10]; // Stocker les médecins par ID dans un tableau associatif
}
// Initialiser le compteur de patients associés au médecin actuel
$nombrePatientsAssocies = 0;

// Parcourir les données des patients
foreach ($patients as $patient) {
    $idMedecin = $patient[11]; // L'indice 11 correspond à l'ID du médecin dans vos données
    if (isset($medecinsAssoc[$idMedecin]) && $medecinsAssoc[$idMedecin] === $_SESSION["username"]) {
        // Vérifier si le médecin associé au patient correspond à l'utilisateur actuellement connecté
        $nombrePatientsAssocies++;
    }
}



?>
<style>
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw; /* Largeur en pourcentage de la largeur de la vue */
            height: 100vh; /* Hauteur en pourcentage de la hauteur de la vue */
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            display: none;
        }



    /* Styles pour le conteneur des détails du patient */
    #patientDetailsContainer, #patientContactEmailContainer{
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1000; /* Assure que le conteneur soit au-dessus de l'overlay */
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombre pour le conteneur */
        display: none; /* Par défaut, le conteneur est caché */
    }


</style>

<div id="dashboardContent" class="content-fluid  mr-4" style="height:100vh" >
        <div class="row">
            <div class="container mt-4 ">
                <!-- Ajoutez ces balises à l'intérieur de votre tableau de bord -->
                <div class="row h-15">
                    <!-- Card - Nombre total des patients -->
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h5 class="card-title">Nombre total des patients</h5>
                                <p class="card-text">
                                    <div class="card text-center bg-white">
                                        <div class="card-body">
                                            <p class="card-text text-lg"><b><?php echo $nombrePatientsAssocies; ?></b></p>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Patients analysés ce mois -->
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h5 class="card-title">Patients analysés ce mois</h5>
                                <p class="card-text">
                                    <div class="card text-center bg-white">
                                        <div class="card-body">
                                            <p class="card-text text-lg"><b>1</b></p>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Patients non analysés ce mois -->
                    <div class="col-md-3">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h5 class="card-title">Patients non analysés ce mois </h5>
                                <p class="card-text">
                                    <div class="card text-center bg-white">
                                        <div class="card-body">
                                            <p class="card-text text-lg"><b>1</b></p>
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
                                <h5 class="card-title">Patients ajoutés ce mois</h5>
                                <p class="card-text">
                                    <div class="card text-center bg-white">
                                        <div class="card-body">
                                            <p class="card-text text-lg"><b>0</b></p>
                                        </div>
                                    </div>
                                </p> 
                            </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row h-30" >
                    <!-- Tableau des 12 mois -->
                    <h2 style="margin-top: 10px;">Analyses des 12 mois :</h2>
                    <div class="col-md-6 table-responsive " style="max-height: 400px; overflow-y: auto; margin-top:10px" >
                        
                        <table class="table table-bordered" style="margin-top: 5px;" >
                            <thead>
                                <tr>
                                    <th>Mois</th>
                                    <th>Action</th>
                                    <th>Nombre d'analyses</th>
                                    <th>statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Boucle pour afficher les 12 mois -->
                                <?php
                                $mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
                                foreach ($mois as $moisItem) {
                                    echo '<tr>';
                                    echo '<td>' . $moisItem . '</td>';
                                    echo '<td class="text-center">';
                                    echo '<button class="btn btn-primary mr-14 ml-14">Consulter</button>';
                                    echo '</td>';
                                    echo '<td>';
                                    echo'<div>';
                                    echo'<span class="text-success">' . rand(0, 10) .'</span>';
                                    echo'</div>';
                                    echo '<td>';
                                    echo'<div class="d-flex align-items-center">';
                                    echo'<span class="text-success">Bien</span>';
                                    echo'</div>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <div class="card bg-light" style="height: 400px;">
                            <div class="card-body">
                                <canvas id="donutChartMedecin" style="max-width: 100%; height: 100%;"></canvas>
                            </div>
                        </div>
                    </div>






                    


                    
                    <script>
                   
                        // Données du graphique
                        var data = {
                            labels: ["Patients analysés ce mois", "Patients non analysés ce mois", "Patients ajoutés ce mois"], // Libellés
                            datasets: [{
                                data: [30, 50, 20], // Valeurs
                                backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"] // Couleurs
                            }]
                        };

                        // Configuration du graphique
                        var options = {
                            cutoutPercentage: 70, // Taille du trou intérieur en pourcentage
                            responsive: false, // Réactivité
                            maintainAspectRatio: false // Conserver le rapport d'aspect
                        };

                        // Dessiner le graphique
                        var ctx = document.getElementById("donutChartMedecin").getContext("2d");
                        var donutChart = new Chart(ctx, {
                            type: 'doughnut', // Type de graphique
                            data: data,
                            options: options
                        });
                    </script>  

                    

                    
                  
                    <!-- Coordonnées de l'utilisateur (20%) -->
                    <div class="col-md-3">
                        <div class="card bg-info text-white  " style="height: 450px; max-width:580px; margin-top:-30px; margin-left:20px">
                            <div class="card-body text-center  ">
                                <!-- Contenu des coordonnées de l'utilisateur ici -->
                                <img src="photo/logo.png" alt="Photo de profil" class="img-fluid mx-auto rounded-circle mb-2" style="max-width: 150px;">
                                <h2 class="card-title mb-4">Bienvenue, <?php echo $_SESSION['medecin_details']['nom']; ?> !</h2>
                                <!-- Ajoutez les détails de l'utilisateur ici (nom, prénom, email, téléphone) -->
                                <div class="text-left">
                                    <p class="mb-2"><strong>Nom:</strong> <?php echo $_SESSION['medecin_details']['nom']; ?></p>
                                    <p class="mb-2"><strong>Prénom:</strong> <?php echo $_SESSION['medecin_details']['prenom']; ?></p>
                                    <p class="mb-2"><strong>Email:</strong> <?php echo $_SESSION['medecin_details']['mail']; ?></p>
                                    <p class="mb-2"><strong>Téléphone:</strong> <?php echo $_SESSION['medecin_details']['tel']; ?></p>
                                </div>
                                <!-- Ajoutez un bouton pour modifier les coordonnées de l'utilisateur -->
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                    <i class="bi bi-pencil h2 text-white mr-2"></i>
                                    <button class="btn btn-light">
                                        <a href="./?action=compteMedecin" style="text-decoration: none; color:black">Modifier Mes Coordonnées</a> 
                                    </button>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row h-10 ">
                    <!-- Tableau des patients -->
                    <h2 style="margin-top: 20px; margin-bottom:-5px;">Patients associés :</h2>
                    <div class="col-md-6 table-responsive" style="max-height: 200px; overflow-y: auto; ">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> Nom </th>
                                    <th> Prénom </th>
                                    <th> Nombre d'analyses </th>
                                    <th> Analyses Bien </th>
                                    <th> Analyses Moyen </th>
                                    <th> Analyses Mauvais </th>
                                    <th> Consulter </th>
                                    <th> Contacter </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                
                                // Parcourir les données des patients
                                foreach ($patients as $patient) {
                                    $idMedecin = $patient[11]; // L'indice 11 correspond à l'ID du médecin dans vos données
                                    if (isset($medecinsAssoc[$idMedecin]) && $medecinsAssoc[$idMedecin] === $_SESSION["username"]) {
                                        // Vérifier si le médecin associé au patient correspond à l'utilisateur actuellement connecté
                                        echo '<tr>';
                                        echo '<td>' . $patient[1] . '</td>';
                                        echo '<td>' . $patient[2] . '</td>';
                                        echo '<td>' . rand(0, 10) . '</td>';
                                        echo '<td>' . rand(0, 5) . '</td>';
                                        echo '<td>' . rand(0, 3) . '</td>';
                                        echo '<td>' . rand(0, 2) . '</td>';
                                        echo '<td class="text-center">';
                                        echo '<button class="btn btn-primary mr-14 ml-14">Consulter</button>';
                                        echo '</td>';
                                        echo '<td class="text-center">';
                                        echo'<div class="d-flex justify-content-center align-items-center">';
                                        echo '  <button class="btn btn-success mr-14 ml-14" onclick="showPatientDetails(\'' . $patient[4] . '\')">
                                                    <i class="bi bi-telephone"></i>
                                                </button>';
                                                echo '<button class="btn btn-info mr-14 ml-14" onclick="showEmailModal(\'' . $patient[3] . '\')">
                                                <i class="bi bi-envelope"></i>
                                            </button>';
                                      
                                        echo '<a href="./?action=messageMedecin" style="text-decoration: none; color: white;">';
                                        echo '    <button class="btn btn-warning mr-14 ml-14">';
                                        echo '        <i class="bi bi-chat-dots"></i>';
                                        echo '    </button>';
                                        echo '</a>';
                                            
                                        echo'</div>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                }
                                //tableau de patients associés vide
                                if ($nombrePatientsAssocies === 0) {
                                    echo '<tr><td colspan="6" class="text-center">Aucun patient associé trouvé</td></tr>';
                                }
                                
                                ?>
                            </tbody>

                        </table>    
                    </div>
                   

                    

                    
                    <!-- Overlay pour superposer la page -->
                    <div class="overlay" id="overlay"></div>

                    <!-- Conteneur pour contact par telephone -->
                    <div id="patientDetailsContainer" class="card mx-auto" style="width: 400px; display: none; z-index: 1050;">
                        <h5 class="card-title">Contact:</h5>
                        <p>Numéro de téléphone : <strong id="phoneNumber"></strong></p>
                        <!-- Ajoutez ici d'autres informations sur le patient si nécessaire -->
                        <button class="btn btn-primary" onclick="hidePatientDetails()">Fermer</button>
                    </div>

                    <!-- contact par email -->
                    <div id="patientContactEmailContainer" class="card mx-auto" style="width: 400px; display: none; z-index: 1050;">
                        <h5 class="card-title">Contact:</h5>
                        <p>Adresse email : <strong id="emailAddress"></strong></p>
                        <!-- Ajoutez ici d'autres informations sur le patient si nécessaire -->
                        <button class="btn btn-primary" onclick="hideEmailModal()">Fermer</button>
                    </div>


                    <script>
                        function showPatientDetails(phoneNumber) {
                            // Mettre à jour le numéro de téléphone dans le conteneur des détails du patient
                            document.getElementById('phoneNumber').textContent = phoneNumber;
                            // Afficher l'overlay
                            document.getElementById('overlay').style.display = 'block';
                            // Afficher le conteneur des détails du patient
                            document.getElementById('patientDetailsContainer').style.display = 'block';
                        }
                        function showEmailModal(emailAddress) {
                            // Mettre à jour l'adresse email dans le conteneur des détails du patient
                            document.getElementById('emailAddress').textContent = emailAddress;
                            // Afficher l'overlay
                            document.getElementById('overlay').style.display = 'block';
                            // Afficher le conteneur des détails du patient
                            document.getElementById('patientContactEmailContainer').style.display = 'block';
                        }

                        function hidePatientDetails() {
                            // Cacher l'overlay
                            document.getElementById('overlay').style.display = 'none';
                            // Cacher le conteneur des détails du patient
                            document.getElementById('patientDetailsContainer').style.display = 'none';
                        }
                        function hideEmailModal() {
                            // Cacher l'overlay
                            document.getElementById('overlay').style.display = 'none';
                            // Cacher le conteneur des détails du patient
                            document.getElementById('patientContactEmailContainer').style.display = 'none';
                        }

                    </script>


                    <div class="col-md-12 col-lg-3" >
                        <canvas id="analyseChart" width="400" height="200"></canvas>
                    </div>
                    <script>
                        // Données du graphique
                        var mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
                        var analyses = [15, 20, 18, 25, 30, 22, 28, 35, 40, 32, 28, 20]; // Exemple de données pour chaque mois

                        // Configuration du graphique
                        var config = {
                            type: 'bar',
                            data: {
                                labels: mois,
                                datasets: [{
                                    label: 'Nombre total des patients',
                                    data: analyses,
                                    backgroundColor: 'rgba(54, 162, 235, 0.5)', // Couleur de fond des barres
                                    borderColor: 'rgba(54, 162, 235, 1)', // Couleur de bordure des barres
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        };

                        // Dessiner le graphique
                        var ctx = document.getElementById('analyseChart').getContext('2d');
                        new Chart(ctx, config);
                    </script>

                    <!-- Carte avec les options -->
                    
                    <div class="col-md-3">
                        <div class="card" style="margin-top: -30px;">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Choisir une option pour analyser vos résultats :</h5>
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <i class="bi bi-file-earmark-text h2 text-success mr-2"></i>
                                    <button >
                                        <a href="./?action=AnalyseSaisieMedecin" class="btn btn-success" style="text-decoration: none;">
                                            Saisir Manuellement
                                        </a>
                                    </button>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <i class="bi bi-cloud-download h2 text-info mr-2"></i>
                                    <button class="btn btn-info" >
                                        <a href="./?action=AnalyseSaisieMedecin" style="text-decoration: none;">
                                            Télécharger un Scan
                                        </a>
                                    </button> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        

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

        
        $(document).ready(function() {
            // Lorsque l'icône de stylo est cliquée
            $('.edit-icon').click(function() {
                // Trouvez le champ de texte associé
                var textField = $(this).closest('.input-group').find('input[type="text"]');
                
                // Vérifiez si le champ de texte est désactivé
                if (textField.prop('disabled')) {
                    // Activer le champ de texte pour permettre la modification
                    textField.prop('disabled', false);
                } else {
                    // Désactiver le champ de texte pour empêcher la modification
                    textField.prop('disabled', true);
                }
            });
        });

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