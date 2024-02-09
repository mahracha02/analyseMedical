<div id="statisticsContent" class="content-fluid fixed mr-4" style="height:100vh; width:93%">
    <!-- Contenu de la section Statistique -->
                                
    <div class="container mt-10">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center mb-3" style="color: blueviolet;"><b>Formulaire de Saisie Manuellement</b></h5>
                <form id="step1" action="./?action=dashboardPatient" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="type" class="form-label"><b>Type d'analyse :</b></label>
                        </div>
                        <div class="col-md-9">
                            <div class="col-md-12">
                                <div class="btn-group-toggle" data-toggle="buttons">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="btn btn-outline-primary mb-3 w-60">
                                                <input type="checkbox" value="hematologie" name="checkboxHematologie" onclick="typeChoix()"> Hématologie
                                            </label>
                                            <label class="btn btn-outline-primary mb-3 w-60">
                                                <input type="checkbox" value="ionogramme" name="checkboxIonogrammeSanguin"> Ionogramme Sanguin
                                            </label>
                                            <label class="btn btn-outline-primary mb-3 w-60">
                                                <input type="checkbox" value="biochimie" name="checkboxBiochimie"> Biochimie Sanguine
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="btn btn-outline-primary mb-3 w-60">
                                                <input type="checkbox" value="endocrinologie" name="checkboxEndocrinologie"> Endocrinologie 
                                            </label>
                                            <label class="btn btn-outline-primary mb-3 w-60">
                                                <input type="checkbox" value="infectiologie" name="checkboxInfectiologie"> Infectiologie
                                            </label>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <label class="btn btn-outline-primary mb-3 w-60">
                                                <input type="checkbox" value="bilanHepatique" name="checkboxBilanHepatique"> Bilan Hépatique
                                            </label>
                                            <label class="btn btn-outline-primary mb-3 w-60">
                                                <input type="checkbox" value="marqueursTumoraux" name="checkboxMarqueursTumoraux"> Marqueurs Tumoraux
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-3">
                            
                        </div>
                        <div class="col-md-9">
                            <div id="hematologie" style="display: none;">
                                <label for="typeHematologie" class="form-label mb-4"><b>Type d'analyse d'Hématologie :</b></label>
                                <div class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-outline-primary mb-2 w-60 mr-20">
                                        <input type="checkbox" value="hemogramme" name="checkboxHemogramme"> HEMOGRAMME
                                    </label>
                                    <label class="btn btn-outline-primary mb-2 w-60 mr-20">
                                        <input type="checkbox" value="formuleLeucocytaire" name="checkboxFormuleLeucocytaire"> Formule Leucocytaire
                                    </label>
                                    <label class="btn btn-outline-primary mb-2 w-60">
                                        <input type="checkbox" value="numerationPlaquettaire" name="checkboxNumerationPlaquettaire"> Numération Plaquettaire
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- utiliser php pour soumettre la date d'haujourd'hui -->
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="date" class="form-label"><b>Date de l'analyse :</b></label>
                            <input type="date" class="form-control" id="date" name="dateAnalyse">
                        </div>
                        <div class="col-md-6">
                            <label for="heure" class="form-label"><b>Heure de l'analyse :</b></label>
                            <input type="time" class="form-control" id="heure" name="heureAnalyse">
                        </div>
                    </div>




                    

                    <div class="row mt-4 text-center">
                        <div class="col-md-6 mx-auto d-flex justify-content-center">
                            <button class="btn btn-danger w-40 mr-4" onclick="revenirLuminositeNormaleSaisieManuelle()">Annuler</button>
                            <button class="btn btn-primary w-40 " type="submit" name="suivant">Suivant</button>
                        </div>
                    </div>

                </form>
            </div>
        </div> 

        <!-- Formulaire pour telecharger un scan -->

        <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh; margin-top:-300px">
            <div id="saisieScanForme" class="card" style="width: 450px;">
                <div class="card-body">
                    <h5 class="card-title text-center mb-3" style="color: blueviolet;"><b>Formulaire de Téléchargement d'un Scan</b></h5>
                    <form>
                        <div class="mb-3">
                            <label for="FichierScan" class="form-label"> Veuillez choisir un fichier :</label>
                            <input type="file" class="form-control" id="FichierScan">
                            <span class="text-muted">Formats acceptés : .jpg, .png, .pdf</span>
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col-md-6 mx-auto d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-40 mr-4" name="analyseScan">Analyser</button>
                                <button class="btn btn-danger w-40" onclick="revenirLuminositeNormaleSaisieScan()">Fermer</button>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </div>



    </div>

    
</div>