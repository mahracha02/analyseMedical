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
/*
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //recuperation des valeurs des checkbox et si elles sont pas cochées, on les initialise à null
    $checkboxHematologie = isset($_POST['checkboxHematologie']) ? $_POST['checkboxHematologie'] : null;
    $checkboxHemogramme = isset($_POST['checkboxHemogramme']) ? $_POST['checkboxHemogramme'] : null;
    $checkboxFormuleLeucocytaire = isset($_POST['checkboxFormuleLeucocytaire']) ? $_POST['checkboxFormuleLeucocytaire'] : null;
    $checkboxNumerationPlaquettaire = isset($_POST['checkboxNumerationPlaquettaire']) ? $_POST['checkboxNumerationPlaquettaire'] : null;
    $checkboxBiochimie = isset($_POST['checkboxBiochimie']) ? $_POST['checkboxBiochimie'] : null;
    $checkboxIonogrammeSanguin = isset($_POST['checkboxIonogrammeSanguin']) ? $_POST['checkboxIonogrammeSanguin'] : null;

    if(isset($_POST['suivant'])){
        var_dump($checkboxHematologie);
        var_dump($checkboxHemogramme);
        var_dump($checkboxFormuleLeucocytaire);
        var_dump($checkboxNumerationPlaquettaire);
        var_dump($checkboxBiochimie);
        var_dump($checkboxIonogrammeSanguin);

        ?>                   
        <div class="container " style="margin-top: 100px; max-height:700px; overflow-y: auto;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3" style="color: blueviolet;"><b>Formulaire de Saisie Manuellement</b></h5>
                    <div class="container " id="formulaires" >
                        <div class="card " >
                            <div class="card-body">
                                <!-- Ajoutez vos champs de formulaire ici -->
                                <form action="./?action=dashboardPatient" method="POST" >
                                        <div class="container dynamic-cols-container" id="formulairesContainer" >
                                            <!-- Les formulaires seront ajoutés ici dynamiquement -->
                                            </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label for="" class="form-label">Observations :</label>
                                            <textarea class="form-control" id="" rows="3"></textarea>
                                        </div>
                                    </div>
                                    
                                    <!-- Ajoutez un champ de formulaire caché pour chaque case à cocher -->
                                    <input type="hidden" name="checkboxHematologie" value="<?php echo $checkboxHematologie; ?>">
                                    <input type="hidden" name="checkboxHemogramme" value="<?php echo $checkboxHemogramme; ?>">
                                    <input type="hidden" name="checkboxFormuleLeucocytaire" value="<?php echo $checkboxFormuleLeucocytaire; ?>">
                                    <input type="hidden" name="checkboxNumerationPlaquettaire" value="<?php echo $checkboxNumerationPlaquettaire; ?>">
                                    <input type="hidden" name="checkboxBiochimie" value="<?php echo $checkboxBiochimie; ?>">
                                    <input type="hidden" name="checkboxIonogrammeSanguin" value="<?php echo $checkboxIonogrammeSanguin; ?>">

                                    <!-- 3 boutons: PRECEDENT, ANULLER, VALIDER -->
                                    <div class="row mt-6 text-center " id="boutonsFormulaires" >
                                        <div class="col-md-4 ">
                                            <button class="btn btn-primary mt-4 mb-4 " onclick="premiereEtape()">Précédent</button>
                                        </div>
                                        <div class="col-md-4 ">
                                            <button class="btn btn-danger mt-4 mb-4 " onclick="revenirLuminositeNormaleSaisieManuelle()">Annuler</button>
                                        </div>
                                        <div class="col-md-4 ">
                                            <button class="btn btn-success mt-4 mb-4 " type="submit"  name="valider" >Valider</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- afficher message d'erreur -->
                                <?php
                                if(isset($_GET['error = 1'])){
                                    ?>
                                    <div class="alert alert-danger mt-4" role="alert">
                                        Erreur lors de la saisie de l'analyse
                                    </div>
                                    <?php
                                    
                                        
                                } elseif(isset($_GET['success = 1'])){
                                    ?>
                                    <div class="alert alert-success mt-4" role="alert">
                                        Analyse saisie avec succès
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    if(isset($_POST['valider'])){
        var_dump($checkboxHematologie);
        var_dump($checkboxHemogramme);
        var_dump($checkboxFormuleLeucocytaire);
        var_dump($checkboxNumerationPlaquettaire);
        var_dump($checkboxBiochimie);
        var_dump($checkboxIonogrammeSanguin);
    }
}
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    //recuperation des valeurs des checkbox et si elles sont pas cochées, on les initialise à null
    $checkboxHematologie = isset($_POST['checkboxHematologie']) ? $_POST['checkboxHematologie'] : null;
    $checkboxHemogramme = isset($_POST['checkboxHemogramme']) ? $_POST['checkboxHemogramme'] : null;
    $checkboxFormuleLeucocytaire = isset($_POST['checkboxFormuleLeucocytaire']) ? $_POST['checkboxFormuleLeucocytaire'] : null;
    $checkboxNumerationPlaquettaire = isset($_POST['checkboxNumerationPlaquettaire']) ? $_POST['checkboxNumerationPlaquettaire'] : null;
    $checkboxBiochimie = isset($_POST['checkboxBiochimie']) ? $_POST['checkboxBiochimie'] : null;
    $checkboxIonogrammeSanguin = isset($_POST['checkboxIonogrammeSanguin']) ? $_POST['checkboxIonogrammeSanguin'] : null;

    if(isset($_POST['suivant'])){
              

        ?>                   
        <div class="container " style="margin-top: 100px; max-height:700px; overflow-y: auto;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3" style="color: blueviolet;"><b>Formulaire de Saisie Manuellement</b></h5>
                    <div class="container " id="formulaires" >
                        <div class="card " >
                            <div class="card-body">
                                <!-- Ajoutez vos champs de formulaire ici -->
                                <form action="./?action=dashboardPatient" method="POST" >
                                    <div class="container dynamic-cols-container" id="formulairesContainer" >
                                        <!-- Les formulaires seront ajoutés ici dynamiquement -->

                                        <?php
                                        if($checkboxHematologie == "hematologie" && $checkboxHemogramme == "hemogramme"){
                                            ?>
                                            <div id="hemogramme">
                                                <h4><strong>HEMOGRAMME</strong></h4>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="Hématies" class="form-label">Hématies :</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="Hématies">
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
                                                        <input type="text" class="form-control" id="Hémoglobine">
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
                                                        <input type="text" class="form-control" id="Hématocrite">
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
                                                        <input type="text" class="form-control" id="vgm">
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
                                                        <input type="text" class="form-control" id="tcmh">
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
                                                        <input type="text" class="form-control" id="ccmh">
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
                                                        <input type="text" class="form-control" id="idr">
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
                                                        <input type="text" class="form-control" id="Leucocytes">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <small class="form-text text-muted">G/L</small>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <small class="form-text text-muted">(3.80 - 9.10)</small>
                                                    </div>
                                                </div>   
                                            </div>
                                        <?php
                                        }
                                        
                                        if($checkboxHematologie == "hematologie" && $checkboxFormuleLeucocytaire == "formuleLeucocytaire"){
                                            ?>
                                            <div id="formuleLeucocytaire" >
                                                <h4><strong>FORMULE LEUCOCYTAIRE</strong></h4>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="polynucléairesNeutrophiles" class="form-label">Polynucléaires Neutrophiles :</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="polynucléairesNeutrophiles" name="leucocytes">
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
                                                        <input type="text" class="form-control" id="" name="eosinophiles">
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
                                                        <input type="text" class="form-control" id="" name="basophiles">
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
                                                        <input type="text" class="form-control" id="" name="lymphocytes">
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
                                                        <input type="text" class="form-control" id="" name="monocytes">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <small class="form-text text-muted">G/L</small>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <small class="form-text text-muted">(0.17 - 0.56)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }

                                        if($checkboxHematologie == "hematologie" && $checkboxNumerationPlaquettaire == "numerationPlaquettaire"){
                                            ?>
                                            <div id="numerationPlaquettaire">
                                                <h4><strong>NUMERATION PLAQUETTAIRE</strong></h4>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">Plaquettes :</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="" name="plaquette">
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
                                                        <input type="text" class="form-control" id="" name="volumePlaquettaireMoyen">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <small class="form-text text-muted">fL</small>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <small class="form-text text-muted">(7.2 - 11.1)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }

                                        if($checkboxIonogrammeSanguin == "ionogramme"){
                                            ?>
                                            <div id="ionogramme" >
                                                <h4><strong>IONOGRAMME SANGUIN</strong></h4>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">Sodium plasmatique:</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="" name="sodium">
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
                                                        <input type="text" class="form-control" id="" name="potassium">
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
                                                        <input type="text" class="form-control" id="" name="reserveAlcaline">
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
                                                        <input type="text" class="form-control" id="" name="proteineTotal">  
                                                    </div>
                                                    <div class="col-md-1">
                                                        <small class="form-text text-muted">g/L</small>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <small class="form-text text-muted">(64.0- 83.0)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }

                                        if($checkboxBiochimie == "biochimie"){
                                            ?>
                                            <div id="biochimie">
                                                <h4><strong>BIOCHIMIE SANGUINE</strong></h4>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">Urée :</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="" name="uree">  
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
                                                        <input type="text" class="form-control" id="" name="creatinine">  
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
                                                        <input type="text" class="form-control" id="" name="poidsCalcul">
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
                                                        <input type="text" class="form-control" id="" name="clairanceMDRD">
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
                                                        <input type="text" class="form-control" id="" name="estimationClairance">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <small class="form-text text-muted">mL/min</small>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <small class="form-text text-muted">(>60.0 )</small>
                                                    </div>
                                                </div>
                                            </div> 
                                        <?php
                                        }
                                        ?>
                                        

                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label for="" class="form-label">Observations :</label>
                                            <textarea class="form-control" id="" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <!-- Ajoutez un champ de formulaire caché pour chaque case à cocher -->
                                    <input type="hidden" name="checkboxHematologie" value="<?php echo $checkboxHematologie; ?>">
                                    <input type="hidden" name="checkboxHemogramme" value="<?php echo $checkboxHemogramme; ?>">
                                    <input type="hidden" name="checkboxFormuleLeucocytaire" value="<?php echo $checkboxFormuleLeucocytaire; ?>">
                                    <input type="hidden" name="checkboxNumerationPlaquettaire" value="<?php echo $checkboxNumerationPlaquettaire; ?>">
                                    <input type="hidden" name="checkboxBiochimie" value="<?php echo $checkboxBiochimie; ?>">
                                    <input type="hidden" name="checkboxIonogrammeSanguin" value="<?php echo $checkboxIonogrammeSanguin; ?>">
                                    

                                    <!-- 3 boutons: PRECEDENT, ANULLER, VALIDER -->
                                    <div class="row mt-6 text-center " id="boutonsFormulaires" >
                                        <div class="col-md-4 ">
                                            <button class="btn btn-primary mt-4 mb-4 " onclick="premiereEtape()">Précédent</button>
                                        </div>
                                        <div class="col-md-4 ">
                                            <button class="btn btn-danger mt-4 mb-4 " onclick="revenirLuminositeNormaleSaisieManuelle()">Annuler</button>
                                        </div>
                                        <div class="col-md-4 ">
                                            <button class="btn btn-success mt-4 mb-4 " type="submit"  name="valider" >Valider</button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
    }
                               

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
                $fichierHemogramme = fopen("data/Analyses/hematologie.csv", "a");

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

                //affichage de page de succes
                if($fichierHemogramme){
                    //message de succes
                    $_SESSION['success'] = "Analyse saisie avec succès";
                    exit();
                } else {
                    header("Location: ./?action=dashboardPatient&error=1");
                    //message d'erreur
                    $_SESSION['error'] = "Erreur lors de la saisie de l'analyse";
                    exit();
                }
                


                
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
                $fichierFormuleLeucocytaire = fopen("data/Analyses/hematologie.csv", "a");

                fputcsv($fichierFormuleLeucocytaire, [
                    $newId,
                    $leucocytes,
                    $eosinophiles,
                    $basophiles,
                    $lymphocytes,
                    $monocytes,
                    $user,
                ]);

                //affichage de page de succes
                if($$fichierFormuleLeucocytaire){
                    header("Location: ./?action=dashboardPatient&success=1");
                    //message de succes
                    $_SESSION['success'] = "Analyse saisie avec succès";
                    exit();
                } else {
                    header("Location: ./?action=dashboardPatient&error=1");
                    //message d'erreur
                    $_SESSION['error'] = "Erreur lors de la saisie de l'analyse";
                    exit();
                }

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
                $fichierNumerationPlaquettaire = fopen("data/Analyses/hematologie.csv", "a");

                fputcsv($fichierNumerationPlaquettaire, [
                    $newId,
                    $plaquettes,
                    $volumePlaquettaireMoyen,
                    $user,
                ]);

                //affichage de page de succes
                if($fichierNumerationPlaquettaire){
                    header("Location: ./?action=dashboardPatient&success=1");
                    //message de succes
                    $_SESSION['success'] = "Analyse saisie avec succès";
                    exit();
                } else {
                    header("Location: ./?action=dashboardPatient&error=1");
                    //message d'erreur
                    $_SESSION['error'] = "Erreur lors de la saisie de l'analyse";
                    exit();
                }

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

                //affichage de page de succes
                if($fichier){
                    //message de succes au centre de la page
                    echo '<div class="alert alert-success alert-dismissible fade show position-fixed top-50 start-50 translate-middle" role="alert" style="z-index: 10000; width: 400px;">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 8 0a8 8 0 0 1 8 8zM7.5 11.793l-3.146-3.147a.5.5 0 0 1 .708-.708L7.5 10.38l4.854-4.854a.5.5 0 1 1 .708.708l-5.146 5.147a.5.5 0 0 1-.708 0z"></path>
                                    </symbol>
                                </svg>
                                <div class="d-flex align-items-center">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success">
                                        <use xlink:href="#check-circle-fill"/>
                                    </svg>
                                    <div>
                                        Analyse saisie avec succès
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    exit();
                
                } else {
                    header("Location: ./?action=dashboardPatient&error=1");
                    //message d'erreur
                    $_SESSION['error'] = "Erreur lors de la saisie de l'analyse";
                    exit();
                }

            //fermeture du fichier csv
            fclose($fichier);  
        }

        if($checkboxIonogrammeSanguin == "ionogramme") {
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
                    $reserveAlcaline,
                    $proteinesTotales,
                    $user,
                ]);

                //affichage de page de succes
                if($fichierIonogramme){
                    //message de succes
                    echo 
                    '<div class="container text-center" style="width: 600px; margin-top:300px">
                        <div class="row justify-content-center" >
                            <div class="col-md-9">
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Succès !</h4>
                                    <p>Votre analyse a été saisie avec succès.</p>
                                    <hr>
                                    <p class="mb-0">Vous pouvez continuer à saisir d\'autres analyses ou revenir à la page principale.</p>
                                </div>
                            </div>
                        </div>
                    </div>';
                
                    exit();
                } else {
                    header("Location: ./?action=dashboardPatient&error=1");
                    //message d'erreur
                    $_SESSION['error'] = "Erreur lors de la saisie de l'analyse";
                    exit();
                }

            //fermeture du fichier csv
            fclose($fichierIonogramme); 
        }

        
        
        
        else {
            echo "<div class='alert alert-danger mt-4' role='alert'>
                Erreur lors de la saisie de l'analyse
            </div>";

            

            
        }

        
        ?>
        <!-- 2 boutons: REVENIR A LA SAISIE MANUELLE, REVENIR AU TABLEAU DE BORD -->
        <div class="row mt-6 text-center "  >
            <div class="col-md-6 ">
                <button class="btn btn-primary mt-4 mb-4 " >Revenir à la saisie manuelle</button>
            </div>
            <div class="col-md-6 ">
                <button class="btn btn-success mt-4 mb-4 " >Revenir au tableau de bord</button>
            </div>
        </div>
        <?php



                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
    }
}





?>


