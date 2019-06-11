<?php session_start(); // Il faut insérrer le session_start() sur toutes nos pas avant le code HTML. ?>
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
               <a href="index.php"><button type="button" class="btn btn-info">Retour à l'accueil</button></a>
             </div>
             <h2 class='text-center font-weight-bold'>Espace compte</h2> 
             <?= 'Bienvenue chez vous ' . $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] . ', ' . $_SESSION['age'] . ' ans.' ?>             
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