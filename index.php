<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <title>La Ronde des Questionnaires</title>
</head>
<body>
    <header>
  <!--Navbar-->
<nav class="navbar navbar-light navbar-1 white">
  
    <!-- Search form -->
        <div class="col-mb-4">
            <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search">
        </div>

        <!-- Collapse button -->
        <div class="contenair">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15" aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent15">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Homes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./php/inscription.php">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./php/connexion.php">Connexion</a>
            </li>
        </ul>
        <!-- Links -->

</div>
<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
    </header>
    <main>
    <!-- logo -->
    <div class="contenair">
        <div class="row">
            <div class="col smd-4">
                <img class="img-fluid rounded mx-auto d-block w-50" src="./img/quizz.png" alt="quizz">
            </div>
        </div>
    </div>
    <!-- affichage des questionnaire les mieux note -->

  
    <!-- Liste deroulante -->


    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>