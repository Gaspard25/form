<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

    <title>formulaire de contact</title>
  </head>
  <body>

    <section class="container">
      <div class="container-fluid contact">
        
        <form method="post" action="formulaire.php" id="form">
          <article class="row">
            <div class="col-sm">
                <input type="text" name="nom" id="nom" class="form-control nom" placeholder="Nom">
            </div>
            <div class="col-sm">
                <input type="text" name="prenom" id="prenom" class="form-control prenom" placeholder="Prénom">
            </div>
          </article>

            <article class="row">
              <div class="col-sm">
                  <input type="email" name="email" id="email" class="form-control email" placeholder="Email">
              </div>
              <div class="col-sm">
                  <input type="text" name="telephone" id="telephone" class="form-control telephone" placeholder="Téléphone">
              </div>
            </article>

            <article class="row">
                <div class="col-sm">
                  <textarea class="form-control message" name="message" id="message" rows="3" placeholder="Message"></textarea>
                </div>
            </article>

            <p class="bon">formulaire envoyé</p>
            
            <article class="row justify-content-md-center">
                <div class="col-sm button">
                  <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
                </div>
            </article>
      </form>
      </div>
    </section>

  
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script text/javacript src="assets/script.js"></script>

  </body>
</html>