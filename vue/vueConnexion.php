
  
  
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
        #loginForm label{
            color: white;
        }
       

        
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="custom-shadow row justify-content-center">
            
                    <div class="col-md-4">
                        <div id="loginForm" class=" p-4 rounded mb-4">
                            

                            <h1 class="mb-4 "><b>Se Connecter</b></h1>
                            <form action="./?action=connexion" method="POST" class="row g-2">
                                <div class="mb-3">
                                    <label for="loginEmail" class="form-label">Email ou Username :</label>
                                    <input type="login" class="form-control" id="loginEmail" name="login" required>
                                </div>
                                <div class="mb-3">
                                    <label for="loginPassword" class="form-label">Mot de passe :</label>
                                    <input type="password" class="form-control" id="loginPassword" name="password" required>
                                    <!-- mot de passe oublié -->
                                    <div class="form-text-white " style="margin-left: 280px;"><a href="./?action=mdpOublie">Mot de passe oublié ?</a></div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="seConnecter">Se Connecter</button>
                            </form>
                            <p class="mt-3">Vous n'avez pas de compte? <a class="btn btn-link" href="./?action=inscription">Créer un nouveau compte</a></p>
                            <?php
                            if (!isset($_SESSION["username"])) {
                                if (isset($_GET["error"])) {
                                    echo "<div class='alert alert-danger' role='alert'>
                                    Votre nom d'utilisateur ou mot de passe est incorrect.
                                    </div>";
                                }   
                                elseif (isset($_GET["alert"])){
                                    echo "<div class='alert alert-danger' role='alert'>
                                    Vous devez créer un compte avant de vous connecter.
                                    </div>";
                                } 
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
        
        
        
    </script>

</body>
</html>

