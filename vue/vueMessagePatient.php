<div id="messagesContent" class="content-fluid fixed mt-3" style="height:100vh;width:93%;">
        <!-- ... Contenu de la section Messages ici ... -->
        <div class="row"> 
            <div class="container ">
                <h2 class="bg-info h-10 m-2"><b>Messages</b></h2>
                <hr>
                <div class="row h-90" style="margin-bottom: -5px;">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-4"><b>Envoyer un message :</b></h5>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <label for="destinataire" class="form-label">Destinataire :</label>
                                        <input type="text" class="form-control" id="destinataire" placeholder="Nom du destinataire">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <label for="objet" class="form-label">Objet :</label>
                                        <input type="text" class="form-control" id="objet" placeholder="Objet du message">
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <label for="message" class="form-label">Message :</label>
                                        <textarea class="form-control" id="message" rows="3" placeholder="Votre message"></textarea>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                        <button type="reset" class="btn btn-danger">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-body" style="height: 355px;">
                                <h5 class="card-title mb-4" ><b>Conversation avec mon Docteur:</b></h5>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-text">Contenu de la conversation</p>
                                                <small class="text-muted ">Date de la conversation</small>
                                                <div class="row">
                                                    <div class="col-md-10 mb-4">
                                                        <textarea class="form-control" id="message" rows="3" placeholder="Votre message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row h-25" >
                    <div class="container">
                        
                        <div class="col-md-12">
                            <div class="card mb-4" style="height: 370px;">
                                <div class="card-body">
                                <h5 class="card-title mb-2"><b>Boîte de réception :</b></h5>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Message 1</h5>
                                                    <p class="card-text">Contenu du message 1...</p>
                                                    <a href="#" class="btn btn-primary">Lire</a>
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    <small class="text-muted">Date du message 1...</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Message 2</h5>
                                                    <p class="card-text">Contenu du message 2...</p>
                                                    <a href="#" class="btn btn-primary">Lire</a>
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                                    <small class="text-muted ">Date du message 2...</small>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                        
    </div>


    <script>
        // Fonction pour basculer entre les modes clair et sombre
        function toggleDarkMode() {
            // Sélectionnez le corps de la page
            var body = document.body;

            // Basculez entre la classe 'dark-mode'
            body.classList.toggle('dark-mode');
        }


        // Ajoutez un gestionnaire d'événements au bouton de bascule
        document.getElementById('darkModeToggle').addEventListener('click', toggleDarkMode);
    </script>