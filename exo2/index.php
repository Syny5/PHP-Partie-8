<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On crée quelques variables de session dans $_SESSION
$_SESSION['firstName'] = 'Victor';
$_SESSION['lastName'] = 'Demilly';
$_SESSION['age'] = 24;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 2</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 8 - Exercice 2</h1>
                <p class="lead">Sur la page index, faire un liens vers une autre page. 
                Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. 
                Ces variables auront été définies directement dans le code.
                Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
              <div class="d-flex justify-content-end">
                <a href="myAccount.php"><button type="button" class="btn btn-info">Mon compte</button></a>
              </div>
              <h2 class='text-center font-weight-bold'>Accueil</h2> 
              <p> Coucouuu !</p>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
