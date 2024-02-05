<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyse</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-PkJeKlZZfM+uaDyZkldA9e2UGjT2iVf6IImPqvRrWajqM71V2L3U1bXNqQ8C1cj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WySz5lq7Jqz6MlVz92RBC2Ajqj2Jsd6MlN" crossorigin="anonymous"></script>
    <style>
         /* Styles spécifiques pour les écrans plus petits (mobiles) */
         @media (max-width: 576px) {
            body {
                font-size: 14px;
                image-resolution: 72dpi;
                background-size: cover;
                background-repeat: no-repeat;

            }
            /* Ajoutez d'autres styles spécifiques pour les mobiles ici */
            

            nav {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                background-color: rgba(255, 255, 255, 0.9); /* Couleur de fond semi-transparente pour le menu */
                padding: 10px;
                z-index: 1000; /* Pour s'assurer que le menu est au-dessus du contenu */
            }

            nav a {
                color: #333; /* Couleur du texte du menu */
                font-weight: bold;
                text-decoration: none;
                margin: 0 15px;
            }

            section {
                padding: 20px;
                text-align: justify;
                margin-top: 60px; /* Ajustez la marge pour éviter que le contenu ne soit masqué par le menu fixe */
            }
            /* Ajoutez des styles spécifiques pour les formulaires mobiles ici */

            form {
                max-width: 60%; /* Ajustez la largeur du formulaire */
                margin: 0 auto; /* Centrez le formulaire sur l'écran */
            }
            .custom-shadow {
                max-width: 60%; 
                max-height: 60%;
            }

            input,button {
                width: 100%; /* Remplissez la largeur du conteneur parent */
                margin-bottom: 10px; /* Ajoutez un espace entre les éléments du formulaire */
            }
        }

        /* Styles spécifiques pour les tablettes en mode portrait */
        @media (min-width: 577px) and (max-width: 768px) {
            body {
                font-size: medium;
                background-size: cover;
                background-repeat: no-repeat;
            }

            section {
                padding: 15px; /* Ajustez l'espacement pour les tablettes en mode portrait */
            }

            form {
                max-width: 70%; /* Ajustez la largeur du formulaire pour les tablettes en mode portrait */
                margin: 0 auto; /* Centrez le formulaire sur l'écran */
            }
            .custom-shadow {
                max-width: 70%; 
                max-height: 70%;
            }

            input,
            button {
                width: 100%; /* Remplissez la largeur du conteneur parent */
                margin-bottom: 10px; /* Ajoutez un espace entre les éléments du formulaire */
            }

            /* Ajoutez d'autres styles spécifiques pour les formulaires sur tablettes en mode portrait ici */
        }

        /* Styles spécifiques pour les tablettes en mode paysage et petits écrans d'ordinateur portable */
        @media (min-width: 769px) and (max-width: 992px) {
            body {
                font-size: large;
                background-size: cover;
                background-repeat: no-repeat;
            }

            section {
                padding: 20px; /* Ajustez l'espacement pour les petits écrans d'ordinateur portable et tablettes en mode paysage */
            }

            form {
                max-width: 80%; /* Ajustez la largeur du formulaire pour les petits écrans d'ordinateur portable et tablettes en mode paysage */
                margin: 0 auto; /* Centrez le formulaire sur l'écran */
            }
            .custom-shadow {
                max-width: 80%; 
                max-height: 80%;
            }

            /* Ajoutez d'autres styles spécifiques pour les formulaires sur petits écrans d'ordinateur portable et tablettes en mode paysage ici */
        }

        /* Styles spécifiques pour les écrans d'ordinateur portable */
        @media (min-width: 993px) and (max-width: 1200px) {
            body {
                font-size: large;
                background-size: cover;
                background-repeat: no-repeat;
            }

            section {
                padding: 25px; /* Ajustez l'espacement pour les écrans d'ordinateur portable */
            }

            form {
                max-width: 90%; /* Ajustez la largeur du formulaire pour les écrans d'ordinateur portable */
                margin: 0 auto; /* Centrez le formulaire sur l'écran */
            }
            .custom-shadow {
                max-width: 90%;
                max-height: 90%; 
            }

            /* Ajoutez d'autres styles spécifiques pour les formulaires sur écrans d'ordinateur portable ici */
        }

        /* Styles spécifiques pour les grands écrans d'ordinateur */
        @media (min-width: 1201px) {
            body {
                font-size: large;
                background-size: cover;
                background-repeat: no-repeat;
            }

            section {
                padding: 30px; /* Ajustez l'espacement pour les grands écrans d'ordinateur */
            }

            form {
                max-width: 100%; /* Ajustez la largeur du formulaire pour les grands écrans d'ordinateur */
                margin: 0 auto; /* Centrez le formulaire sur l'écran */
            }
            .custom-shadow {
                max-width: 100%; 
                max-height: 100%;
            }

            /* Ajoutez d'autres styles spécifiques pour les formulaires sur grands écrans d'ordinateur ici */
        }


        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-image: url("./photo/labo1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        header {
            background-color: #4682B4; /* Bleu acier */
            padding: 10px;
            text-align: center;
            color: #FFF; /* Blanc */
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #87CEEB; /* Bleu ciel */
            padding: 10px;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #FFF; /* Blanc */
            font-weight: bold;
        }

        nav a:hover {
            color: #4682B4; /* Bleu acier */
        }

        section {
            padding: 20px;
            text-align: center;
        }
        .custom-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            
            
        }

    </style>
</head>
<body class="bg-gray-100">

    

        <!-- En-tête -->
        <header class="bg-blue-500 py-1">
        <div class="Menu container mx-auto flex items-center justify-between bg-gray-800 text-white p-2 bg-transparent">
            <div>
                <nav class="navbar navbar-light bg-transparent">
                    <a class="navbar-brand" href="index.php">
                        <img src="photo/logo.png" width="60" height="60" class="d-inline-block align-top">
                        
                    </a>
                </nav>
            </div>

            
                
                <nav class="bg-transparent">
                    
                    <ul class="nav nav-tabs">
                        
                         <li class="nav-item">
                            <a class="nav-link active" href="./?action=aPropos">À propos</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link active" href="./?action=contact">Contact</a>
                        </li> 
                        
                        <li class="nav-item">
                            <a class="nav-link active" href="./?action=connexion">Se Connecter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./?action=inscription">S'inscrire</a>
                        </li>
                    </ul>
                </nav>
            
            
        </div>
        </header>

        <script>
            

            function toggleForm() {
                var loginForm = document.getElementById('loginForm');
                var registerForm = document.getElementById('signupForm');
                if (loginForm.style.display === 'none') {
                    loginForm.style.display = 'block';
                    registerForm.style.display = 'none';
                } 
                if (registerForm.style.display === 'none') {
                    registerForm.style.display = 'none';
                    loginForm.style.display = 'block';
                }
                
            }
        </script>



