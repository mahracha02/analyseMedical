<div id="accountContent" class="content-fluid fixed mr-4" style="height:100vh; width:93%">
        <div class="row">
                <div class="container mt-4">
                    <h2 class="bg-info h-10 m-2"><b>Mon compte</b></h2>
                    <hr>
                    <div class="row h-90" style="margin-bottom: -5px;">
                        <!-- Informations actuelles de l'utilisateur -->
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title mb-4"><b>Vos coordonnées actuelles :</b></h5>
                                    <p><strong>Nom:</strong> <span id="currentNom"><?php echo $_SESSION['medecin_details']['nom']; ?></span></p>
                                    <p><strong>Prénom:</strong> <span id="currentPrenom"><?php echo $_SESSION['medecin_details']['prenom']; ?></span></p>
                                    <p><strong>Username:</strong> <span id="currentUsername"><?php echo $_SESSION['username']; ?></span></p>
                                    <p><strong>Date de naissance:</strong> <?php echo $_SESSION['medecin_details']['dateNaissance']; ?></p>
                                    <p><strong>Sexe:</strong> <?php echo $_SESSION['medecin_details']['sexe']; ?></p>
                                    <p><strong>Email:</strong> <span id="currentEmail"><?php echo $_SESSION['medecin_details']['mail']; ?></span></p>
                                    <p><strong>Téléphone:</strong> <span id="currentTel"><?php echo $_SESSION['medecin_details']['tel']; ?></span></p>
                                    <p><strong>Adresse:</strong> <?php echo $_SESSION['medecin_details']['adresse']; ?></p>
                                    <p><strong>Code Postal:</strong> <?php echo $_SESSION['medecin_details']['codePostal']; ?></p>
                                    <p><strong>Ville:</strong> <?php echo $_SESSION['medecin_details']['ville']; ?></p>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Formulaire de modification des coordonnées -->
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title mb-4"><b>Modifier vos coordonnées :</b></h5>
                                    <form id="updateForm">
                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label for="nom" class="form-label">Nom :</label>
                                                <input type="text" class="form-control" id="nom" placeholder="Votre nom">
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="prenom" class="form-label">Prénom :</label>
                                                <input type="text" class="form-control" id="prenom" placeholder="Votre prénom">
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="username" class="form-label">Username :</label>
                                                <input type="text" class="form-control" id="username" placeholder="Votre username">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label for="dateNaissance" class="form-label">Date de naissance :</label>
                                                <input type="date" class="form-control" id="dateNaissance" placeholder="Votre date de naissance">
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="sexe" class="form-label">Sexe :</label>
                                                <select class="form-select" id="sexe">
                                                    <option value="Homme">Homme</option>
                                                    <option value="Femme">Femme</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="email" class="form-label">Email :</label>
                                                <input type="email" class="form-control" id="email" placeholder="Votre email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label for="tel" class="form-label">Téléphone :</label>
                                                <input type="tel" class="form-control" id="tel" placeholder="Votre téléphone">
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="adresse" class="form-label">Adresse :</label>
                                                <input type="text" class="form-control" id="adresse" placeholder="Votre adresse">
                                            </div>
                                            <div class="col-md-2 mb-4">
                                                <label for="ville" class="form-label">Ville :</label>
                                                <input type="text" class="form-control" id="ville" placeholder="Votre ville">
                                            </div>
                                            <div class="col-md-2 mb-4">
                                                <label for="codePostal" class="form-label">Code Postal :</label>
                                                <input type="text" class="form-control" id="codePostal" placeholder="Zip">
                                            </div>
                                        </div><br><br><br><br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Modifier</button>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
  
                    </div>

                    <div class="row h-10">
                        <!-- Formulaire de modification du mot de passe -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-4"><b>Modifier votre mot de passe :</b></h5>
                                    <form id="updatePasswordForm">
                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label for="oldPassword" class="form-label">Ancien mot de passe :</label>
                                                <input type="password" class="form-control" id="oldPassword" placeholder="Votre ancien mot de passe">
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="newPassword" class="form-label">Nouveau mot de passe :</label>
                                                <input type="password" class="form-control" id="newPassword" placeholder="Votre nouveau mot de passe">
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="confirmNewPassword" class="form-label">Confirmer le nouveau mot de passe :</label>
                                                <input type="password" class="form-control" id="confirmNewPassword" placeholder="Confirmer nouveau mot de passe">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Valider</button>
                                        </div>
                                </div>
                            </div>    
                        </div>
                        <!-- Formulaire de suppression du compte -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h5 class="card-title mb-4"><b>Supprimer votre compte :</b></h5><br>
                                    <p>Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.</p><br>
                                    <button type="button" class="btn btn-danger" id="deleteAccountBtn">Supprimer le compte</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

                
            </div>
        </div>     
    </div>