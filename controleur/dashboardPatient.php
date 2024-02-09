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
    $checkboxEndocrinologie = isset($_POST['checkboxEndocrinologie']) ? $_POST['checkboxEndocrinologie'] : null;
    $checkboxInfectiologie = isset($_POST['checkboxInfectiologie']) ? $_POST['checkboxInfectiologie'] : null;
    $checkboxMarqueursTumoraux = isset($_POST['checkboxMarqueursTumoraux']) ? $_POST['checkboxMarqueursTumoraux'] : null;
    $checkboxBilanHepatique = isset($_POST['checkboxBilanHepatique']) ? $_POST['checkboxBilanHepatique'] : null;

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
                                        if($checkboxHematologie == "hematologie"){
                                            ?>
                                            <div id="hematologie" >
                                                <div class="row mt-3">
                                                    <div class="col-md-12 text-center"> <!-- Utilisation de la classe text-center pour centrer horizontalement -->
                                                        <h4 class="my-0 mx-0 py-2 mb-4" style="border: 2px solid black; border-radius: 10px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"> <!-- Utilisation de la classe my-0 pour supprimer les marges par défaut -->
                                                            <strong>HEMATOLOGIE</strong>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
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
                                        if($checkboxEndocrinologie == "endocrinologie") { ?>
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
                                                        <input type="text" class="form-control" id="" name="glycemie">
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
                                                        <input type="text" class="form-control" id="" name="glycemieAJean">
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
                                                        <input type="text" class="form-control" id="" name="hemoglobineGlyquee">
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
                                                        <input type="text" class="form-control" id="" name="TSHUltraSensible">
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
                                                        <input type="text" class="form-control" id="" name="T3Libre">
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
                                                        <input type="text" class="form-control" id="" name="T4Libre">
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
                                                        <input type="text" class="form-control" id="" name="anticorpsAntiTSH">
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
                                                        <input type="text" class="form-control" id="" name="anticorpsAntiTPO">
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
                                                        <input type="text" class="form-control" id="" name="anticorpsAntiThyroglobuline">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <small class="form-text text-muted">UI/L</small>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <small class="form-text text-muted">(0.0 - 4.0)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        if($checkboxInfectiologie == "infectiologie") { ?>
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
                                                        <input type="text" class="form-control" id="" name="acAntiHIV1+2AgP24">
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
                                                        <input type="text" class="form-control" id="" name="acAntiHIV1+2">
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
                                                        <input type="text" class="form-control" id="" name="agP24">
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
                                                        <input type="text" class="form-control" id="" name="westernBlot">
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
                                                        <input type="text" class="form-control" id="" name="arnHIV">
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
                                                        <input type="text" class="form-control" id="" name="IgMAntiHAV">
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
                                                        <input type="text" class="form-control" id="" name="agHBs">
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
                                                        <input type="text" class="form-control" id="" name="acAntiHBs">
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
                                                        <input type="text" class="form-control" id="" name="acAntiHBcTotal">
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
                                                        <input type="text" class="form-control" id="" name="acAntiHCV">
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
                                                        <input type="text" class="form-control" id="" name="TPHA">
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
                                                        <input type="text" class="form-control" id="" name="VDRL">
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
                                                        <input type="text" class="form-control" id="" name="MINITest">
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
                                                        <input type="text" class="form-control" id="" name="acAntiVCAIgM">
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
                                                        <input type="text" class="form-control" id="" name="acAntiEBNAIgG">
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
                                                        <input type="text" class="form-control" id="" name="acAntiCMVIgM">
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
                                                        <input type="text" class="form-control" id="" name="acAntiCMVIgG">
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
                                                        <input type="text" class="form-control" id="" name="acAntiToxoplasmeIgM">
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
                                                        <input type="text" class="form-control" id="" name="acAntiToxoplasmeIgG">
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
                                                        <input type="text" class="form-control" id="" name="acAntiRubeoleIgM">
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
                                                        <input type="text" class="form-control" id="" name="acAntiRubeoleIgG">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <small class="form-text text-muted">UI/L</small>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <small class="form-text text-muted">(0.0 - 1.0)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        if($checkboxMarqueursTumoraux == "marqueursTumoraux") { ?>
                                            <div id="marqueursTumoraux">
                                                <div class="row mt-5">
                                                    <div class="col-md-12 text-center"> <!-- Utilisation de la classe text-center pour centrer horizontalement -->
                                                        <h4 class="my-0 mx-0 py-2 mb-4" style="border: 2px solid black; border-radius: 10px; background-color: #f8f9fa; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"> <!-- Utilisation de la classe my-0 pour supprimer les marges par défaut -->
                                                            <strong>MARQUEURS TUMORAUX</strong>
                                                        </h4>
                                                    </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="" class="form-label">Calcitonine :</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" class="form-control" id="" name="calcitonine">
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
                                                        <input type="text" class="form-control" id="" name="CA15-3">
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
                                                        <input type="text" class="form-control" id="" name="CA125">
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
                                                        <input type="text" class="form-control" id="" name="CA19-9">
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
                                                        <input type="text" class="form-control" id="" name="AFP">
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
                                                        <input type="text" class="form-control" id="" name="HCG">
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
                                                        <input type="text" class="form-control" id="" name="PSATotal">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <small class="form-text text-muted">ng/mL</small>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <small class="form-text text-muted">(0.0 - 4.0)</small>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        if($checkboxBilanHepatique == "bilanHepatique") { ?>
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
                                                        <input type="text" class="form-control" id="" name="ASAT">
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
                                                        <input type="text" class="form-control" id="" name="ALAT">
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
                                                        <input type="text" class="form-control" id="" name="gammaGT">
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
                                                        <input type="text" class="form-control" id="" name="PAL">
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
                                                        <input type="text" class="form-control" id="" name="5NT">
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
                                                        <input type="text" class="form-control" id="" name="bilirubinesLibres">
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
                                                        <input type="text" class="form-control" id="" name="bilirubinesConjuguees">
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
                                                        <input type="text" class="form-control" id="" name="bilirubineTotale">
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
                                                        <input type="text" class="form-control" id="" name="TP">
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
                                                        <input type="text" class="form-control" id="" name="facteurV">
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
                                                        <input type="text" class="form-control" id="" name="albumine">
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
                                                        <input type="text" class="form-control" id="" name="alpha1Antitrypsine">
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
                                                        <input type="text" class="form-control" id="" name="anticorpsAntimichondriaux">
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
                                                        <input type="text" class="form-control" id="" name="ceruleoplasmine">
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
                                                        <input type="text" class="form-control" id="" name="cuprurie24h">
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
                                                        <input type="text" class="form-control" id="" name="TSHus">
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
                                                        <input type="text" class="form-control" id="" name="T3Libre">
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
                                                        <input type="text" class="form-control" id="" name="T4Libre">
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
                                                        <input type="text" class="form-control" id="" name="Hb">
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
                                                        <input type="text" class="form-control" id="" name="reticulocytes">
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
                                                        <input type="text" class="form-control" id="" name="schizocytes">
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
                                                        <input type="text" class="form-control" id="" name="haptoglobine">
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
                                                        <input type="text" class="form-control" id="" name="IgAantiGlutamases">
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
                                                        <input type="text" class="form-control" id="" name="IgMantiVCA">
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
                                                        <input type="text" class="form-control" id="" name="ARNV">
                                                    </div>
                                                    <div class="col-md-1">
                                                        <small class="form-text text-muted">UI/L</small>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <small class="form-text text-muted">(0 - 10)</small>
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
                                            <textarea class="form-control" id="" rows="3" ></textarea>
                                        </div>
                                    </div>

                                    <!-- Ajoutez un champ de formulaire caché pour chaque case à cocher -->
                                    <input type="hidden" name="checkboxHematologie" value="<?php echo $checkboxHematologie; ?>">
                                    <input type="hidden" name="checkboxHemogramme" value="<?php echo $checkboxHemogramme; ?>">
                                    <input type="hidden" name="checkboxFormuleLeucocytaire" value="<?php echo $checkboxFormuleLeucocytaire; ?>">
                                    <input type="hidden" name="checkboxNumerationPlaquettaire" value="<?php echo $checkboxNumerationPlaquettaire; ?>">
                                    <input type="hidden" name="checkboxBiochimie" value="<?php echo $checkboxBiochimie; ?>">
                                    <input type="hidden" name="checkboxIonogrammeSanguin" value="<?php echo $checkboxIonogrammeSanguin; ?>">
                                    <input type="hidden" name="checkboxEndocrinologie" value="<?php echo $checkboxEndocrinologie; ?>">
                                    <input type="hidden" name="checkboxInfectiologie" value="<?php echo $checkboxInfectiologie; ?>">
                                    <input type="hidden" name="checkboxMarqueursTumoraux" value="<?php echo $checkboxMarqueursTumoraux; ?>">
                                    <input type="hidden" name="checkboxBilanHepatique" value="<?php echo $checkboxBilanHepatique; ?>">
                                    

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

        if($checkboxEndocrinologie == "endocrinologie") {
            $csvEndocrinologie = fopen("data/Analyses/endocrinologie.csv", "r");

                $newId = 1; // Valeur par défaut si le fichier est vide

                // Parcourir chaque ligne du fichier
                while ($row = fgetcsv($csvEndocrinologie)) {
                    // $row est un tableau représentant une ligne du CSV
                    // La première colonne (index 0) contient l'ID

                    // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
                    $newId = intval($row[0]);
                }
                $newId++;

            
                $TSHUltraSensible=$_POST['TSHUltraSensible'];
                $T4Libre=$_POST['T4Libre'];
                $user=$_SESSION['username'];

                //saisie dans le fichier csv
                $fichierEndocrinologie = fopen("data/Analyses/endocrinologie.csv", "a");

                fputcsv($fichierEndocrinologie, [
                    $newId,
                    $TSHUltraSensible,
                    $T4Libre,
                    $user,
                ]);

                //affichage de page de succes
                if($fichierEndocrinologie){
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
        }

        if($checkboxInfectiologie == "infectiologie") {
            $csvInfectiologie = fopen("data/Analyses/infectiologie.csv", "r");

                $newId = 1; // Valeur par défaut si le fichier est vide

                // Parcourir chaque ligne du fichier
                while ($row = fgetcsv($csvInfectiologie)) {
                    // $row est un tableau représentant une ligne du CSV
                    // La première colonne (index 0) contient l'ID

                    // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
                    $newId = intval($row[0]);
                }
                $newId++;

            
                $CRPUltraSensible=$_POST['CRPUltraSensible'];
                $user=$_SESSION['username'];

                //saisie dans le fichier csv
                $fichierInfectiologie = fopen("data/Analyses/infectiologie.csv", "a");

                fputcsv($fichierInfectiologie, [
                    $newId,
                    $CRPUltraSensible,
                    $user,
                ]);

                //affichage de page de succes
                if($fichierInfectiologie){
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
        }

        if($checkboxMarqueursTumoraux == "marqueursTumoraux") {
            $csvMarqueursTumoraux = fopen("data/Analyses/marqueursTumoraux.csv", "r");

                $newId = 1; // Valeur par défaut si le fichier est vide

                // Parcourir chaque ligne du fichier
                while ($row = fgetcsv($csvMarqueursTumoraux)) {
                    // $row est un tableau représentant une ligne du CSV
                    // La première colonne (index 0) contient l'ID

                    // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
                    $newId = intval($row[0]);
                }
                $newId++;

            
                $PSATotal=$_POST['PSATotal'];
                $user=$_SESSION['username'];

                //saisie dans le fichier csv
                $fichierMarqueursTumoraux = fopen("data/Analyses/marqueursTumoraux.csv", "a");

                fputcsv($fichierMarqueursTumoraux, [
                    $newId,
                    $PSATotal,
                    $user,
                ]);

                //affichage de page de succes
                if($fichierMarqueursTumoraux){
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
        }

        if($checkboxBilanHepatique == "bilanHepatique") {
            $csvBilanHepatique = fopen("data/Analyses/bilanHepatique.csv", "r");

                $newId = 1; // Valeur par défaut si le fichier est vide

                // Parcourir chaque ligne du fichier
                while ($row = fgetcsv($csvBilanHepatique)) {
                    // $row est un tableau représentant une ligne du CSV
                    // La première colonne (index 0) contient l'ID

                    // Mise à jour de $newId avec la valeur de l'ID de la ligne actuelle
                    $newId = intval($row[0]);
                }
                $newId++;

            
                $bilirubineTotale=$_POST['bilirubineTotale'];
                $user=$_SESSION['username'];

                //saisie dans le fichier csv
                $fichierBilanHepatique = fopen("data/Analyses/bilanHepatique.csv", "a");

                fputcsv($fichierBilanHepatique, [
                    $newId,
                    $bilirubineTotale,
                    $user,
                ]);

                //affichage de page de succes
                if($fichierBilanHepatique){
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


