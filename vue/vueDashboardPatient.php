<?php
session_start();
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
                    <a href="./?action=dashboardPrincipalPatient" class="nav_link" id="dashboardMenu">
                        <i class='bx bx-grid-alt nav_icon'></i> 
                        <span class="nav_name">Dashboard</span> 
                    </a> 

                    <a href="./?action=AnalyseSaisie" class="nav_link" id="statisticsMenu">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                        <span class="nav_name">Statistique</span> 
                    </a>

                    <a href="./?action=comptePatient" class="nav_link" id="accountMenu">
                        <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Mon compte</span> 
                    </a> 

                    <a href="./?action=messagePatient" class="nav_link" id="messagesMenu">
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

    

    
  


    <!------------------------------------------------------------Partie Mon Compte------------------------------------------------------------------------>

    


    <!------------------------------------------------------------Partie Statistique--------------------------------------------------------------------->

    



   <!------------------------------------------------------------Partie Messages------------------------------------------------------------------------> 

    
            


    



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

            document.addEventListener('DOMContentLoaded', function() {
        // Sélectionnez tous les liens de menu
        var menuLinks = document.querySelectorAll('.nav_link');

        // Ajoutez un écouteur d'événements à chaque lien de menu
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                // Supprimez la classe active de tous les liens de menu
                menuLinks.forEach(function(link) {
                    link.classList.remove('active');
                });

                // Ajoutez la classe active uniquement au lien de menu cliqué
                link.classList.add('active');

                // Stockez l'ID du lien de menu actif dans le stockage local
                localStorage.setItem('activeMenuId', link.id);
            });
        });

        // Restaurez l'état actif à partir du stockage local lors du chargement de la page
        var activeMenuId = localStorage.getItem('activeMenuId');
        if (activeMenuId) {
            var activeMenuLink = document.getElementById(activeMenuId);
            if (activeMenuLink) {
                activeMenuLink.classList.add('active');
            }
        }
    });
            /*
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
        */
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
            
            checkboxes.forEach(function(checkbox) {
                typesChoisis.push(checkbox.value);
            });

            if (typesChoisis.length > 0) {
                document.getElementById('step1').style.display = 'none';
                document.getElementById('formulaires').style.display = 'block';
                genererFormulaires(typesChoisis);
            } else {
                alert("Veuillez sélectionner au moins un type d'analyse.");
            }

            
        }

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
        /*
        var form = document.getElementById('step1');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche l'envoi normal du formulaire

            // Récupération des cases cochées
            var selectedTypes = [];
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            checkboxes.forEach(function(checkbox) {
                selectedTypes.push(checkbox.value);
            });


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

            //afficher les types choisis
            alert('Types choisis: ' + selectedTypes.join(', '));
        }); */
        
    
        



    </script>
</body>
</html>