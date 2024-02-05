

<style>
        /* Styles généraux */
       
       
        .custom-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            
            
        }
        
        #loginForm, #signupForm {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-55%, -50%);
            width: 500px;
            height: auto;
            margin: 0 60px;
            background-image: url("./photo/labo4.jpg");
            background-repeat: no-repeat;
            background-size: cover; 
            color: white;
        }

        
        #chart-container {
            position: fixed;
            width: 500px;
        }
        form{
            color: white;
        }
        #signupForm label{
            color: white;
        }
        
       

        
    </style>


<div class="container mt-5">
        <div class="custom-shadow row justify-content-center">
            
                    
                    <div class="col-md-4">
                        <div id="signupForm" class="custom-shadow p-4 rounded mb-4">
                            
                            <!-- Formulaire d'Inscription -->
                            <h1 class="mb-4"><b>Créer un Compte</b></h1>
                            <form action="./?action=inscription" method="POST" class="row g-2" onsubmit="return validateForm()" >
                                <div class="col-md-4">
                                    <label for="name" class="block text-sm font-medium text-gray-600">Nom :</label>
                                    <input type="name" id="name" name="name" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="newPrenom" class="block text-sm font-medium text-gray-600">Prénom :</label>
                                    <input type="prenom" id="newPrenom" name="newPrenom" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="newUsername" class="block text-sm font-medium text-gray-600">Nom d'utilisateur :</label>
                                    <input type="username" id="newUsername" name="newUsername" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="newEmail" class="block text-sm font-medium text-gray-600">Mail :</label>
                                    <input type="email" id="newEmail" name="newEmail" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="newTelephone" class="block text-sm font-medium text-gray-600">Téléphone :</label>
                                    <input type="telephone" id="newTelephone" name="newTelephone" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="newAdresse" class="block text-sm font-medium text-gray-600">Adresse :</label>
                                    <input type="adresse" id="newAdresse" name="newAdresse" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="newVille" class="block text-sm font-medium text-gray-600">Ville :</label>
                                    <input type="ville" id="newVille" name="newVille" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="newCodePostal" class="block text-sm font-medium text-gray-600">ZIP :</label>
                                    <input type="codePostal" id="newCodePostal" name="newCodePostal" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="choixStatut" class="block text-sm font-medium text-gray-600">Je suis :</label>
                                    <select id="choixStatut" name="choixStatut" class="form-control mt-1 rounded-md border border-info" required>
                                        <option value="" disabled selected>Choisir...</option>"
                                        <option value="patient">Un Patient</option>
                                        <option value="medecin">Un Médecin</option> 
                                    </select>
                                </div>
                                
                                <!-- Champs pour le choix du médecin -->
                                <div id="medecinField" class="col-md-8" style="display: none;">
                                    <label for="choixMedecin" class="block text-sm font-medium text-gray-600">Choisir Votre Médecin :</label>
                                    <select id="choixMedecin" name="choixMedecin" class="form-control mt-1 rounded-md border border-info">
                                        <?php
                                        // Lire le fichier CSV des médecins
                                        $filename = 'data/medecins.csv';
                                        $file = fopen($filename, 'r');
                                        $firstLine = true;

                                        // Parcourir les lignes du fichier
                                        while (($row = fgetcsv($file)) !== false) {
                                            // Ignorer la première ligne
                                            if ($firstLine) {
                                                $firstLine = false;
                                                continue;
                                            }

                                            // Afficher les options du menu déroulant
                                            echo '<option value="' . $row[0] . '">' . $row[1] . ' ' . $row[2] . '</option>';
                                        }

                                        fclose($file);
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="date" class="block text-sm font-medium text-gray-600">Date de Naissance :</label>
                                    <input type="date" id="date" name="dateNaissance" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="sexe" class="block text-sm font-medium text-gray-600">Sexe :</label>
                                    <select id="sexe" name="sexe" class="form-control mt-1 rounded-md border border-info" required>
                                        <option value="Homme">Homme</option>
                                        <option value="Femme">Femme</option> 
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="newPassword" class="block text-sm font-medium text-gray-600">Mot de passe :</label>
                                    <input type="password" id="newPassword" name="newPassword" class="form-control mt-1 rounded-md border border-info" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirmPassword" class="block text-sm font-medium text-gray-600">Confirmer le mot de passe</label>
                                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control mt-1 rounded-md border border-info" required>
                                    
                                </div><br>
                                
                                <br>
                                
                                <small id="emailHelp" class="form-text bord text-white">Le mot de passe doit être de <b> 8 caractères </b> ou plus.</small><br><br>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input border rounded-md p-2" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label text-sm" for="invalidCheck">
                                            Accepter les termes et les conditions d'utilisation.
                                        </label>
                                        <div class="invalid-feedback text-red-500 text-sm">
                                            Vous devez être d’accord avec les termes et les conditions d'utilisation avant la création de votre compte.
                                        </div>
                                    </div>
                                </div>
                                <div id="statutMatchError" class="alert alert-danger mt-2" style="display: none;"></div>
                                <div id="passwordMatchError" class="alert alert-danger mt-2" style="display: none;"></div>
                                <br>
                                <button type="submit" class="col-md-12 bg-green-500 text-white p-2 rounded-md" name="inscrire">Créer un Compte</button>
                            </form>
                            <p class="mt-2 text-sm">Vous avez déjà un compte? <a class="btn btn-link" href="./?action=connexion">Se Connecter</a></p>
                            <br>
                            <?php
                            

                            if (isset($_SESSION['message'])) {
                                echo '<div class="alert alert-success">' . $_SESSION['message'] . '</div>';
                                unset($_SESSION['message']); // Effacez le message après l'avoir affiché
                            }
                            ?>
                        </div>
                    
                    </div>

            
                
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const checkBox = document.getElementById("invalidCheck");
            const errorMessage = document.querySelector(".invalid-feedback");

            checkBox.addEventListener("change", function() {
                if (checkBox.checked) {
                    errorMessage.style.display = "none";
                } else {
                    errorMessage.style.display = "block";
                }
            });

            // Empêche la soumission du formulaire si la case à cocher n'est pas cochée
            document.querySelector("form").addEventListener("submit", function(event) {
                if (!checkBox.checked) {
                    errorMessage.style.display = "block";
                    event.preventDefault();
                }
            });
        });

        function validateForm() {
            var password = document.getElementById("newPassword").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var statut = document.getElementById("choixStatut").value;
            var medecin = document.getElementById("choixMedecin").value;
            var errorElementPassword = document.getElementById("passwordMatchError");
            var errorElementStatut = document.getElementById("statutMatchError");

            if (password !== confirmPassword) {
                errorElementPassword.textContent = "Les mots de passe ne correspondent pas.";
                errorElementPassword.style.display = "block";
                return false;
            } 
            else if (password.length < 8) {
                errorElementPassword.textContent = "Le mot de passe doit être de 8 caractères ou plus.";
                errorElementPassword.style.display = "block";
                return false;
            }
            else if (statut == "patient" && medecin == "") {
                errorElementStatut.textContent = "Veuillez choisir un médecin.";
                errorElementStatut.style.display = "block";
                return false;
            }
            else if(statut ==""){
                errorElementStatut.textContent = "Veuillez choisir si vous êtes un patient ou un médecin.";
                errorElementStatut.style.display = "block";
                return false;
            } 
            else {
                errorElementPassword.textContent = ""; // Effacer le message d'erreur s'il n'y a pas d'erreur
                errorElementPassword.style.display = "none";
                errorElementStatut.textContent = "";
                errorElementStatut.style.display = "none";
                return true;
            }
        }

        $(document).ready(function(){
            $("#choixStatut").change(function(){
                var choix =$(this).val();

                if(choix == "patient"){
                    $("#medecinField").show();
                }else{
                    $("#medecinField").hide();
                }

            });
        });

    </script>
    

</body>
</html>