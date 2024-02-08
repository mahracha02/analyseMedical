<div id="statisticsContent" class="content-fluid fixed mr-4" style="height:100vh; width:93%">
    <!-- Contenu de la section Statistique -->
                                
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mb-3" style="color: blueviolet;"><b>Formulaire de Saisie Manuellement</b></h5>
                <form id="step1" action="./?action=dashboardPatient" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="type" class="form-label"><b>Type d'analyse :</b></label>
                        </div>
                        <div class="col-md-9">
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-primary mr-3">
                                    <input type="checkbox" value="hematologie" name="checkboxHematologie" onclick="typeChoix()"> Hématologie
                                </label>
                                <label class="btn btn-outline-primary mr-3">
                                    <input type="checkbox" value="ionogramme" name="checkboxIonogrammeSanguin"> Ionogramme Sanguin
                                </label>
                                <label class="btn btn-outline-primary">
                                    <input type="checkbox" value="biochimie" name="checkboxBiochimie"> Biochimie Sanguine
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            <div id="hematologie" style="display: none;">
                                <div class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-primary mb-2">
                                        <input type="checkbox" value="hemogramme" name="checkboxHemogramme"> HEMOGRAMME
                                    </label>
                                    <label class="btn btn-outline-primary mb-2">
                                        <input type="checkbox" value="formuleLeucocytaire" name="checkboxFormuleLeucocytaire"> Formule Leucocytaire
                                    </label>
                                    <label class="btn btn-outline-primary">
                                        <input type="checkbox" value="numerationPlaquettaire" name="checkboxNumerationPlaquettaire"> Numération Plaquettaire
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label for="date" class="form-label"><b>Date de l'analyse :</b></label>
                        </div>
                        <div class="col-md-5">
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                    </div>

                    

                    <!-- Boutons ANNULER, SUIVANT -->
                    <div class="row mt-4 text-center">
                        <div class="col-md-6-small ">
                            <button class="btn btn-danger"  onclick="revenirLuminositeNormaleSaisieManuelle()">Annuler</button>
                        </div>
                        <div class="col-md-6-small mt-2">
                            <button class="btn btn-primary" type="submit" name="suivant">Suivant</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 

        <!-- Formulaire pour telecharger un scan -->

        <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh; margin-top:-200px">
            <div id="saisieScanForme" class="card" style="width: 450px;">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3" style="color: blueviolet;"><b>Formulaire de Téléchargement d'un Scan</b></h5>
                    <form>
                        <div class="mb-3">
                            <label for="FichierScan" class="form-label"> Veuillez choisir un fichier :</label>
                            <input type="file" class="form-control" id="FichierScan">
                            <span class="text-muted">Formats acceptés : .jpg, .png, .pdf</span>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary" name="analyseScan">Analyser</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <button class="btn btn-danger" onclick="revenirLuminositeNormaleSaisieScan()">Fermer</button>
                    </div>
                </div>
            </div>
        </div>



    </div>

    
</div>