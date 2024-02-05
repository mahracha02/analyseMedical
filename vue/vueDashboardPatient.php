<?php
session_start();



// Afficher le tableau de bord ou d'autres informations pour l'utilisateur connecté

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyse</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-PkJeKlZZfM+uaDyZkldA9e2UGjT2iVf6IImPqvRrWajqM71V2L3U1bXNqQ8C1cj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WySz5lq7Jqz6MlVz92RBC2Ajqj2Jsd6MlN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.js"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}
        .body-pd{padding-left: calc(var(--nav-width) + 188px)}}
        body {
            
            font-family: Arial, sans-serif;
            min-height: 100vh; /* La hauteur de la page est égale à 100% de la hauteur de la fenêtre */
            margin: 0; /* Supprime la marge par défaut du body */
            margin-top: 50px;
            
            
            
        }
        
        .bg-gray-100 {
            background-color: #f7fafc;
        }
        .menu{
            display: flex;

        }

        .user-options {
            display: flex;
            margin-right: 20px;
        }

        .user-options .icon {
            margin: 0 8px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 1px 1px 1px rgba(181, 181, 181, 0.38);
            position: relative;
        }

        .user-options .icon:hover {
            cursor: pointer;
            background: #F7F6FB;
        }

        .user-options .icon .badge {
            position: absolute;
            top: -10px;
            right: -8px;
            border-radius: 50%;
            background: red;
            color: white;
            font-size: 12px;
            padding-top: 5px;
            width: 20px;
            height: 15px;
        }


        /* Style du conteneur global */
        .content {
            max-width: 800px;
            margin: 20px auto;
            overflow-x: auto;
        }

        /* Style de la table */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        /* Style des cellules du tableau */
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        /* Style de la première ligne (entête) du tableau */
        th {
            background-color: #f2f2f2;
        }

        /* Style des boutons */
        button {
            padding: 5px 10px;
            cursor: pointer;
        }

        /* Style des symboles de statut */
        span {
            font-size: 18px;
            margin-left: 5px;
        }
        .user-details {
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            height: 100%;
        }
        
        .header {
        background-color: #fff; /* Ajoutez votre couleur de fond */
        box-shadow: 0px 0px 5px 0px #ccc; /* Ajoutez une ombre si nécessaire */
        }

        .icon {
            cursor: pointer;
        }

        .custom-height-50 {
            height: 50% !important; /* Utilisation de !important pour s'assurer que cette règle prévaut sur les styles existants */
        }

        
        /* Style pour le mode nuit */
        body.dark-mode {
            background-color: #2b2b2b;
            color: #ffffff;
        }

        /* Style pour le contenu spécifique au mode nuit */
        body.dark-mode .navbar {
            background-color: #333333;
        }

        body.dark-mode .btn-dark {
            background-color: #555555;
            color: #ffffff;
        }

        /* Style pour le contenu des tables en mode nuit */
        body.dark-mode table {
            color:white; /* Couleur du texte */
        }
        body.dark-mode table th, body.dark-mode table td{
            color:#f2f2f2; /* Couleur du texte de l'en-tête */
        }

        body.dark-mode table thead {
            background-color: #555555; /* Couleur de fond de l'en-tête */
            color: #ffffff; /* Couleur du texte de l'en-tête */
        }

        body.dark-mode table tbody {
            background-color: #333333; /* Couleur de fond du corps de la table */
        }

        body.dark-mode table tbody tr:nth-child(even) {
            background-color: #444444; /* Couleur de fond des lignes paires */
        }

        body.dark-mode table tbody tr:hover {
            background-color: #666666; /* Couleur de fond au survol d'une ligne */
        }

        #saisieManuelleForm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
        }

        #saisieScanForm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        body.saisie-mode #overlay {
            display: block;
        }

        body.saisie-mode #dashboardContent {
            filter: brightness(1.5); /* Ajustez la valeur selon vos besoins */
            transition: filter 0.5s ease-in-out;
        }
        
        .step-container {
            display: none;
        }

        .step-container.active {
            display: block;
            animation: fadeInUp 0.5s ease-in-out;
        }

        .progress-bar {
            transition: width 0.5s ease-in-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


    </style>
</head>
<body id="body-pd">
    <header class="header" id="header" style="max-height: 60px;">
        <div class="header_toggle"> 
            <i class='bx bx-menu' id="header-toggle"></i> 
        </div>

        <!-- Bouton pour basculer entre les modes clair et sombre -->
        <div style="margin-left: -600px;">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button id="darkModeToggle" class="btn btn-primary btn-dark">
                    <i class="fas fa-moon"></i> Mode Nuit
                </button>
            </div>
        </div>
        
        <div class="user-options d-flex align-items-center">
            
            <div class="input-group mr-5" style="max-height: 40px;">
                <input type="text" class="form-control form-control-sm" placeholder="Rechercher..." aria-label="Rechercher" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary btn-sm" type="button" id="button-addon2">Rechercher</button>
            </div>

            <button type="button" class="btn btn-primary position-relative mr-5">
                Alerts <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+3 <span class="visually-hidden">unread messages</span></span>
            </button>

            <button type="button" class="btn btn-primary position-relative mr-14">
                Notifications <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
            </button>
<!--
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $_SESSION["username"]; ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Mon compte</a></li>
                    <li><a class="dropdown-item" href="#">Mes analyses</a></li>
                    <li><a class="dropdown-item" href="#">Mes messages</a></li>
                    <li><a class="dropdown-item" href="#">Mes statistiques</a></li>
                    <li><a class="dropdown-item" href="./?action=deconnexion">Déconnexion</a></li>
                </ul>
            </div> -->

            
            <div class="icon user-img d-flex align-items-center bg-info text-white " style="height: 48px;">
                <span class="fst-italic"><b>Espace Patient</b></span>
            </div>
            <div class="user mt-2 ml-2">
                <img src="photo/logo.png" alt="Photo de profil" class="img-fluid mx-auto rounded-circle mb-3" style="max-width: 40px;">
                
            </div> 
            
           
        </div>
    </header>
    
    
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> 
                    <i class='bx bx-layer nav_logo-icon'></i> 
                    <span class="nav_logo-name">ANALYSE</span><br>

                    
                </a>
                

                <div class="nav_list"> 
                <!-- Ajoutez ces identifiants aux liens de menu correspondants -->
                    <a href="#" class="nav_link active" id="dashboardMenu">
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 

                    <a href="#" class="nav_link" id="statisticsMenu">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                        <span class="nav_name">Statistique</span> 
                    </a>

                    <a href="#" class="nav_link" id="accountMenu">
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Mon compte</span> 
                    </a> 

                    <a href="#" class="nav_link" id="messagesMenu">
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Messages</span> 
                    </a>  

                
                </div>
            </div> 
            
            <a href="./?action=deconnexion" class="nav_link">
                <i class='bx bx-log-out nav_icon'></i> 
                <span class="nav_name">Deconnexion</span>  
            </a> 
             
        </nav>
    </div>
    
    <!--
    <div style="display:none " >
        <div class="h-25 d-inline-block" style="width: 120px; background-color: lightblue;">Height 25%</div>
        <div class="h-50 d-inline-block" style="width: 120px; background-color: lightgreen;">Height 50%</div>
        <div class="h-75 d-inline-block" style="width: 120px; background-color: lightcoral;">Height 75%</div>
        <div class="h-100 d-inline-block" style="width: 120px; background-color: lightgoldenrodyellow;">Height 100%</div>
        <div class="h-auto d-inline-block" style="width: 120px; background-color: lightpink;">Height auto</div>
    </div>  -->

    

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

    <div id="saisieManuelleForm" class="card animate__animated animate__fadeIn" style="width: 1000px; max-height:800px; overflow-y: auto;" >
        <div class="container mt-4">
            <h5 class="card-title text-center mb-3" style="color: blueviolet;"><b>Formulaire de Saisie Manuellement</b></h5><br><br>
            <!-- Barre de progression 
                <div class="progress" style="margin-top: -40px; margin-bottom: 40px;">
                    <div class="progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">Étape 1</div>
                </div>-->
            <div class="container"  style="margin-top: -20px;">
                <form id="step1" action="./?action=dashboardPatient" method="POST" >   
                    <div class="row">
                        <div class="col-md-3">
                            <label for="type" class="form-label text-black"><b>Type d'analyse :</b></label>
                        </div>
                        <div class="col-md-9">
                            <div >
                                <label class="btn btn-outline-primary mr-6">
                                    <input type="checkbox"  value="hematologie" name="checkboxHematologie" onclick="typeChoix()" > Hématologie
                                </label>
                                <label class="btn btn-outline-primary mr-6">
                                    <input type="checkbox" value="ionogramme"  name="checkboxIonogrammeSanguin"> Ionogramme Sanguin
                                </label>
                                <label class="btn btn-outline-primary">
                                    <input type="checkbox"  value="biochimie" name="checkboxBiochimie" > Biochimie Sanguine
                                </label>
                            </div>
                        </div>

                        
                        
                    </div>
                    <!-- 3 checkbox si hematologie est coché: HEMOGRAMME, FORMULE LEUCOCYTAIRE, NUMERATION PLAQUETTAIRE -->
                    <div class="row"style="margin-top: 20px;">
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
                    </div>

                    
                    
                    <!-- 2 boutons: ANULLER, SUIVANT -->
                    <div class="row mt-6 text-center">
                        <div class="col-md-6 ">
                            <button class="btn btn-danger mt-4 mb-4 " onclick="revenirLuminositeNormaleSaisieManuelle()">Annuler</button>
                        </div>
                        <div class="col-md-6 ">
                            <button class="btn btn-primary mt-4 mb-4"  type="button" onclick="afficherFormulaires()"  name="suivant" >Suivant</button>
                        </div>
                    </div>
                </form>   
                
            </div>
                                
            

             
            <div class="container " id="formulaires" style="display: none; margin-top:-40px">
                <div class="card" >
                    <div class="card-body">
                        <!-- Ajoutez vos champs de formulaire ici -->
                        <form action="./?action=dashboardPatient" method="POST">
                            <div class="container dynamic-cols-container" id="formulairesContainer">
                                <!-- Les formulaires seront ajoutés ici dynamiquement -->
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Observations :</label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>

                            <?php
                            var_dump($_POST);  // Vérifiez les données reçues
                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['types'])) {
                                // Récupérez les données JSON et convertissez-les en tableau PHP
                                $typesChoisis = json_decode($_POST['types'], true);
                            
                                // Utilisez $typesChoisis comme nécessaire
                                var_dump($typesChoisis);
                                // ...
                            }
                            ?>
                            
                            <!-- 3 boutons: PRECEDENT, ANULLER, VALIDER -->
                            <div class="row mt-6 text-center" id="boutonsFormulaires" >
                                <div class="col-md-4 ">
                                    <button class="btn btn-primary mt-4 mb-4 " onclick="premiereEtape()">Précédent</button>
                                </div>
                                <div class="col-md-4 ">
                                    <button class="btn btn-danger mt-4 mb-4 " onclick="revenirLuminositeNormaleSaisieManuelle()">Annuler</button>
                                </div>
                                <div class="col-md-4 ">
                                    <button class="btn btn-success mt-4 mb-4 " type="submit" name="valider" >Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>

                
            </div>

            <!-- Formulaire de la section suivante -->
                    
                        <div id="hemogramme" style="display: none;">
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

                        

                            
                        <div id="formuleLeucocytaire" style="display: none;">
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

                        <div id="numerotationPlaquettaire" style="display: none;">
                            <h4><strong>NUMEROTATION PLAQUETTAIRE</strong></h4>
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
                                    <small class="form-text text-muted">(177.0 - 379.0)</small>
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
                                    <small class="form-text text-muted">(8.8 - 12.2)</small>
                                </div>
                            </div>
                            
                        </div>

                        <div id="ionogramme" style="display: none;">
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

                        <div id="biochimie" style="display: none;">
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
                    

                        
            
        </div>
        
    </div>
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
  


    <!------------------------------------------------------------Partie Mon Compte------------------------------------------------------------------------>

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
                                    <p><strong>Nom:</strong> <span id="currentNom"><?php echo $_SESSION['patient_details']['nom']; ?></span></p>
                                    <p><strong>Prénom:</strong> <span id="currentPrenom"><?php echo $_SESSION['patient_details']['prenom']; ?></span></p>
                                    <p><strong>Username:</strong> <span id="currentUsername"><?php echo $_SESSION['username']; ?></span></p>
                                    <p><strong>Date de naissance:</strong> <?php echo $_SESSION['patient_details']['dateNaissance']; ?></p>
                                    <p><strong>Sexe:</strong> <?php echo $_SESSION['patient_details']['sexe']; ?></p>
                                    <p><strong>Email:</strong> <span id="currentEmail"><?php echo $_SESSION['patient_details']['mail']; ?></span></p>
                                    <p><strong>Téléphone:</strong> <span id="currentTel"><?php echo $_SESSION['patient_details']['tel']; ?></span></p>
                                    <p><strong>Adresse:</strong> <?php echo $_SESSION['patient_details']['adresse']; ?></p>
                                    <p><strong>Code Postal:</strong> <?php echo $_SESSION['patient_details']['codePostal']; ?></p>
                                    <p><strong>Ville:</strong> <?php echo $_SESSION['patient_details']['ville']; ?></p>
                                    
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


    <!------------------------------------------------------------Partie Statistique--------------------------------------------------------------------->

    <div id="statisticsContent" class="content hidden">
        <!-- ... Contenu de la section Statistique ici ... -->

        <div>
            <canvas id="statChart" width="400" height="200"></canvas>
        </div>
    </div>



   <!------------------------------------------------------------Partie Messages------------------------------------------------------------------------> 

    <div id="messagesContent" class="content hidden">
        <!-- ... Contenu de la section Messages ici ... -->
    </div>


    



<script>
            
                
            


            function toggleMenu() {
                var menu = document.querySelector('.menu');
                var menuButton = document.querySelector('.menu-button');

                menu.classList.toggle('menu-active');
                menu.classList.toggle('menu-visible');

                menu.classList.contains('menu-visible') ?
                menuButton.setAttribute('aria-label', 'Close menu') :
                menuButton.setAttribute('aria-label', 'Open menu');
            }

            document.addEventListener("DOMContentLoaded", function(event) {
   
            const showNavbar = (toggleId, navId, bodyId, headerId) =>{
            const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)
            
            // Validate that all variables exist
            if(toggle && nav && bodypd && headerpd){
            toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
            })
            }
            }
            
            showNavbar('header-toggle','nav-bar','body-pd','header')
            
            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')
            
            function colorLink(){
            if(linkColor){
            linkColor.forEach(l=> l.classList.remove('active'))
            this.classList.add('active')
            }
            }
            linkColor.forEach(l=> l.addEventListener('click', colorLink))
            
            });

            document.addEventListener("DOMContentLoaded", function() {
            // Fonction pour masquer tous les contenus
            function hideAllContents() {
                document.getElementById("dashboardContent").classList.add("hidden");
                document.getElementById("accountContent").classList.add("hidden");
                document.getElementById("messagesContent").classList.add("hidden");
                document.getElementById("statisticsContent").classList.add("hidden");
            }

            // Fonction pour afficher le contenu du tableau de bord
            function showDashboardContent() {
                hideAllContents();
                document.getElementById("dashboardContent").classList.remove("hidden");
            }

            // Fonction pour afficher le contenu du compte
            function showAccountContent() {
                hideAllContents();
                document.getElementById("accountContent").classList.remove("hidden");
            }

            // Fonction pour afficher le contenu des messages
            function showMessagesContent() {
                hideAllContents();
                document.getElementById("messagesContent").classList.remove("hidden");
            }

            // Fonction pour afficher le contenu des statistiques
            function showStatisticsContent() {
                hideAllContents();
                document.getElementById("statisticsContent").classList.remove("hidden");

                // Votre code pour générer le graphique ici...
            }

            // Ajouter des écouteurs d'événements pour chaque menu
            document.getElementById("dashboardMenu").addEventListener("click", showDashboardContent);
            document.getElementById("accountMenu").addEventListener("click", showAccountContent);
            document.getElementById("messagesMenu").addEventListener("click", showMessagesContent);
            document.getElementById("statisticsMenu").addEventListener("click", showStatisticsContent);

            // Afficher le tableau de bord par défaut
            showDashboardContent();
        });
        
        // Données du graphique
        var data = {
            labels: ['Bien', 'Pas bien', 'À refaire'],
            datasets: [{
                data: [13, 3, 2], // Remplacez ces valeurs par les données réelles
                backgroundColor: ['#28a745', '#dc3545', '#ffc107'], // Couleurs pour chaque section
                hoverOffset: 4
            }]
        };

        // Configuration du graphique
        var options = {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%', // Ajustez le pourcentage du trou intérieur
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        };

        // Créer le graphique en forme de donut
        var ctx = document.getElementById('donutChart').getContext('2d');
        var donutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
        }); 

        // Fonction pour basculer entre les modes clair et sombre
        function toggleDarkMode() {
            // Sélectionnez le corps de la page
            var body = document.body;

            // Basculez entre la classe 'dark-mode'
            body.classList.toggle('dark-mode');
        }


        // Ajoutez un gestionnaire d'événements au bouton de bascule
        document.getElementById('darkModeToggle').addEventListener('click', toggleDarkMode);

        // jQuery pour la gestion du formulaire de modification
        $(document).ready(function () {
            $('#updateForm').submit(function (e) {
                e.preventDefault();
                
                // Récupérer les nouvelles valeurs
                var nom = $('#nom').val();
                var prenom = $('#prenom').val();
                var email = $('#email').val();
                var tel = $('#tel').val();
                
                // Mettre à jour les informations actuelles
                $('#currentNom').text(nom);
                $('#currentPrenom').text(prenom);
                $('#currentEmail').text(email);
                $('#currentTel').text(tel);
                
                // ajouter du code pour effectuer la mise à jour côté serveur
            });

            // jQuery pour la gestion du bouton de suppression du compte
            $('#deleteAccountBtn').click(function () {
                //ajouter du code pour gérer la suppression du compte côté serveur
                alert('Compte supprimé avec succès !');
            });
        });

        function diminuerLuminositeSaisieManuelle() {
            $('body').addClass('saisie-mode'); // Ajoute la classe pour diminuer la luminosité et activer l'overlay
            $('#saisieManuelleForm').show().addClass('animate__fadeIn');

            event.preventDefault();
        }

        function revenirLuminositeNormaleSaisieManuelle() {
            

            // Supprimez la classe pour revenir à la luminosité normale et désactiver l'overlay
            $('body').removeClass('saisie-mode');

            $('#step1').show(); // Affichez la première étape

            // Cachez le formulaire
            $('#saisieManuelleForm').hide();
            $('#formulaires').hide();
            $('#hemogramme').hide();
            $('#hematologie').hide();
            $('#formuleLeucocytaire').hide();
            $('#numerotationPlaquettaire').hide();
            $('#ionogramme').hide();
            $('#biochimie').hide();

            // decocher les checkbox
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });

            event.preventDefault();
            
            

        }

        function premiereEtape() {
            $('#step1').show();
            $('#hematologie').hide();
            $('#formulaires').hide();
            $('#hemogramme').hide();
            $('#formuleLeucocytaire').hide();
            $('#numerotationPlaquettaire').hide();
            $('#ionogramme').hide();
            $('#biochimie').hide();
            // decocher les checkbox
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });

            event.preventDefault();
        }
        function diminuerLuminositeSaisieScan() {
            $('body').addClass('saisie-mode'); // Ajoute la classe pour diminuer la luminosité et activer l'overlay
            $('#saisieScanForm').show().addClass('animate__fadeIn');
        }
        function revenirLuminositeNormaleSaisieScan() {
            $('body').removeClass('saisie-mode'); // Supprime la classe pour revenir à la luminosité normale et désactiver l'overlay
            $('#saisieScanForm').hide();
        }

        // fonction typeChoix pour afficher les checkbox de hematologie si hematologie est coché
        function typeChoix(){
            var hematologie = document.getElementById("hematologie");
            if (hematologie.style.display === "none") {
                hematologie.style.display = "block";
            } else {
                hematologie.style.display = "none";
            }
        }
        function afficherFormulaires() {
            var typesChoisis = [];
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

            checkboxes.forEach(function (checkbox) {
                typesChoisis.push(checkbox.value);
            });

            if (typesChoisis.length > 0) {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', './?action=dashboardPatient', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            alert('Les données ont été envoyées avec succès !');

                            // Traitez la réponse ici si nécessaire
                            // ...

                            // Affichez ou masquez des éléments en fonction de la réponse
                            document.getElementById('step1').style.display = 'none';
                            document.getElementById('formulaires').style.display = 'block';
                            genererFormulaires(typesChoisis);

                            // Vous pouvez également continuer avec d'autres actions JavaScript
                            // ...

                        } else {
                            alert('Une erreur s\'est produite lors de l\'envoi des données.');
                        }
                    }
                };

                // Envoyez les types choisis comme données POST
                xhr.send('types=' + typesChoisis.join(','));

            } else {
                alert("Veuillez sélectionner au moins un type d'analyse.");
            }

            return false; // Empêche la soumission normale du formulaire
        }
        function afficherFormulaires() {
            var typesChoisis = [];
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

            checkboxes.forEach(function (checkbox) {
                typesChoisis.push(checkbox.value);
            });

            if (typesChoisis.length > 0) {
                // Utilisez AJAX pour envoyer les données au serveur
                var xhr = new XMLHttpRequest();
                xhr.open('POST', './?action=dashboardPatient', true);
                xhr.setRequestHeader('Content-Type', 'application/json');

                // Convertissez le tableau typesChoisis en chaîne JSON
                var jsonData = JSON.stringify({ types: typesChoisis });

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Gérez la réponse du serveur ici si nécessaire
                        // Affichez ou masquez des éléments en fonction de la réponse
                        document.getElementById('step1').style.display = 'none';
                        document.getElementById('formulaires').style.display = 'block';
                        genererFormulaires(typesChoisis);
                        alert('Les données ont été envoyées avec succès !');
                        

                    }
                };

                // Envoyez les données JSON
                xhr.send(jsonData);
            } else {
                alert("Veuillez sélectionner au moins un type d'analyse.");
            }
        }

      console.log(jsonData);  // Affichez le contenu JSON dans la console
        




        function genererFormulaires(types) {
            var formulaires = document.getElementById('formulaires');
            var formulairesContainer = document.getElementById('formulairesContainer');

            if (types.includes('hematologie') && types.includes('hemogramme')==false && types.includes('formuleLeucocytaire')==false && types.includes('numerotationPlaquettaire')==false) {
                alert("Veuillez sélectionner au moins un type d'analyse de l'hématologie.");
                
            }
            if (types.includes('hemogramme')) {
                var hemogramme = document.getElementById('hemogramme');
                hemogramme.style.display = 'block';
                formulairesContainer.appendChild(hemogramme);
            }
            if (types.includes('formuleLeucocytaire')) {
                var formuleLeucocytaire = document.getElementById('formuleLeucocytaire');
                formuleLeucocytaire.style.display = 'block';
                formulairesContainer.appendChild(formuleLeucocytaire);
            }
            if (types.includes('numerotationPlaquettaire')) {
                var numerotationPlaquettaire = document.getElementById('numerotationPlaquettaire');
                numerotationPlaquettaire.style.display = 'block';
                formulairesContainer.appendChild(numerotationPlaquettaire);
            }
            if (types.includes('ionogramme')) {
                var ionogramme = document.getElementById('ionogramme');
                ionogramme.style.display = 'block';
                formulairesContainer.appendChild(ionogramme);
            }
            if (types.includes('biochimie')) {
                var biochimie = document.getElementById('biochimie');
                biochimie.style.display = 'block';
                formulairesContainer.appendChild(biochimie);
            }
            
        }

        
        // Soumission du formulaire
        var form = document.getElementById('step1');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche l'envoi normal du formulaire

            // Récupération des cases cochées
            var checkedCheckboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            var selectedTypes = Array.from(checkedCheckboxes).map(checkbox => checkbox.value);

            // Ajout des types sélectionnés comme champs cachés dans le formulaire
            selectedTypes.forEach(type => {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'selectedTypes[]'; // Utilisation de crochets pour obtenir un tableau PHP
                input.value = type;
                form.appendChild(input);
            });

            // Envoi du formulaire
            form.submit();
        });
        
    



    </script>
</body>
</html>