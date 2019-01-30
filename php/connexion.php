<?php ob_start(); ?>
<body>
    <!-- Material form login -->
<div class="card">

<h5 class="card-header info-color white-text text-center py-4">
    <strong>Connexion</strong>
</h5><br>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

  <!-- Form -->
  <form class="text-center" action="traitementco.php" method="POST" style="color: #757575;">

    <!-- Email -->
    <div class="md-form">
        <input type="email" name="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">E-mail</label>
    </div>

    <!-- Password -->
    <div class="md-form">
        <input type="password" name="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Mot de passe</label>
    </div>

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                <label class="form-check-label" for="materialLoginFormRemember">Se souvenir de moi</label>
            </div>
        </div>
      <div>
        <!-- Forgot password -->
        <a href="#">Mot de passe oublie?</a>
      </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

    <!-- Register -->
    <p>Pas encore enregistre ?
      <a href="./inscription.php">S'enregistrer</a>
    </p>

    <a class="btn btn-info my-4 btn-block" href="../index.php">Accueil</a>

<?php
$content = ob_get_clean();
require '../php/template/default.php';
?>