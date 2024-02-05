<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div id="contact" class="custom-shadow p-4 rounded mb-4">
                <h1 class="mb-4 text 2x1"><b>Nous Contacter</b></h1>
                <form action="./action=contact" method="post">
                    <div class="mb-3">
                        <label for="contactNom" class="form-label">Nom :</label>
                        <input type="text" class="form-control" id="contactNom" name="contactNom" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactPrenom" class="form-label">Prenom :</label>
                        <input type="text" class="form-control" id="contactPrenom" name="contactPrenom" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="contactEmail" name="contactEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label">Message :</label>
                        <textarea class="form-control" id="contactMessage" name="contactMessage" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        
    }
    #contact {
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
    #contact h1{
        color: white;
        font-size: medium;
    }
</style>