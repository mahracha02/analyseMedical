<div id="dashboardContent" class="content-fluid fixed mr-4" style="height:100vh" >
        <div class="row">
            <div class="container mt-4 ">
                <!-- Ajoutez ces balises à l'intérieur de votre tableau de bord -->
                <div class="row h-15" style="margin-bottom: 10px;">
                    <!-- Card - Nombre total d'analyses -->
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h5 class="card-title">Nombre total d'analyses</h5>
                                <p class="card-text">16</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card - Nombre d'analyses bien -->
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h5 class="card-title">Nombre d'analyses bien</h5>
                                <p class="card-text">13</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card - Nombre d'analyses pas bien -->
                    <div class="col-md-3">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h5 class="card-title">Nombre d'analyses pas bien</h5>
                                <p class="card-text">3</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card - Date de la dernière analyse -->
                    <div class="col-md-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h5 class="card-title">Date de la dernière analyse</h5>
                                <p class="card-text">2024-01-22</p> <!-- Remplacez par la vraie date -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row h-30" >
                    <!-- Tableau des 5 dernières analyses -->
                    <h2>5 dernières analyses :</h2>
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
                                $analyses = [
                                    ["date" => "2021-01-22", "statut" => "Bien"],
                                    ["date" => "2021-02-22", "statut" => "Pas bien"],
                                    ["date" => "2021-03-22", "statut" => "Bien"],
                                    ["date" => "2021-04-22", "statut" => "Bien"],
                                    ["date" => "2021-05-22", "statut" => "Pas bien"],
                                ];
                                foreach ($analyses as $analyse) {
                                    echo '<tr>';
                                    echo '<td>' . $analyse["date"] . '</td>';
                                    echo '<td>' . $analyse["statut"] . '</td>';
                                    echo '<td>';
                                    echo '<button class="btn btn-primary mr-14 ml-14">Consulter</button>';
                                    echo '<button class="btn btn-warning mr-14">Corriger</button>';
                                    echo '<button class="btn btn-danger">Supprimer</button>';
                                    echo '</td>';
                                    echo '</tr>';
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
                                    echo '<button class="btn btn-primary mr-14 ml-14">Consulter</button>';
                                    echo '<button class="btn btn-warning mr-14">Corriger</button>';
                                    echo '<button class="btn btn-danger">Supprimer</button>';
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
                                    <button class="btn btn-success" onclick="diminuerLuminositeSaisieManuelle()">Saisir Manuellement</button>
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

    <!-- formulaire de saisie manuelle -->
    <!--

    <div id="saisieManuelleForm" class="card animate__animated animate__fadeIn" style="width: 1000px; max-height:800px; overflow-y: auto;" >
        <div class="container mt-4">
            <h5 class="card-title text-center mb-3" style="color: blueviolet;"><b>Formulaire de Saisie Manuellement</b></h5><br><br>
            <!-- Barre de progression 
                <div class="progress" style="margin-top: -40px; margin-bottom: 40px;">
                    <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">Étape 1</div>
                </div>-->
                <!-- 
                <div class="container" style="margin-top: -20px;">
                    <form id="step1" action="./?action=dashboardPatient" method="POST" >
                        <div class="row">
                            <div class="col-md-3">
                                <label for="type" class="form-label text-black"><b>Type d'analyse :</b></label>
                            </div>
                            <div class="col-md-9">
                                <div>
                                    <label class="btn btn-outline-primary mr-6">
                                        <input type="checkbox" value="hematologie" name="checkboxHematologie" onclick="typeChoix()"> Hématologie
                                    </label>
                                    <label class="btn btn-outline-primary mr-6">
                                        <input type="checkbox" value="ionogramme" name="checkboxIonogrammeSanguin"> Ionogramme Sanguin
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="checkbox" value="biochimie" name="checkboxBiochimie"> Biochimie Sanguine
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <!-- 3 checkbox si hematologie est coché: HEMOGRAMME, FORMULE LEUCOCYTAIRE, NUMERATION PLAQUETTAIRE -->
                        <!--
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-12">
                                <div id="hematologie" style="display: none;">
                                    <label class="btn btn-outline-primary mb-2 d-flex flex-column">
                                        <input type="checkbox" value="hemogramme" name="checkboxHemogramme"> HEMOGRAMME
                                    </label>
                                    <label class="btn btn-outline-primary mb-2 d-flex flex-column">
                                        <input type="checkbox" value="formuleLeucocytaire" name="checkboxFormuleLeucocytaire"> Formule Leucocytaire
                                    </label>
                                    <label class="btn btn-outline-primary d-flex flex-column">
                                        <input type="checkbox" value="numerotationPlaquettaire" name="checkboxNumerationPlaquettaire"> Numérotation Plaquettaire
                                    </label>
                                </div>
                            </div>
                        </div> -->
                        <!-- 2 boutons: ANNULER, SUIVANT -->
                        <!--
                        <div class="row mt-6 text-center">
                            <div class="col-md-6">
                                <button class="btn btn-danger mt-4 mb-4" onclick="revenirLuminositeNormaleSaisieManuelle()">Annuler</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary mt-4 mb-4" type="submit" onclick="return afficherFormulaires()" name="suivant" >Suivant</button>
                            </div>
                        </div>
                    </form>
                </div>
                    
                    
                    

                        
            
        </div>
        
    </div> -->
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

    <!-- mode saisie -->
    <div id="overlay"></div>