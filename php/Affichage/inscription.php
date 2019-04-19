<?php
ob_start();
$title = 'Inscription';
?>

    <!-- Default form register -->
<form action="../Traitement/traitementin.php" method="post" class="text-center border border-light p-5">

<p class="h4 mb-4">Inscription</p>

<div class="form-row mb-4">
    <div class="col">
        <input type="text" name="defaultRegisterFormPrenom" class="form-control" placeholder="Prenom">
    </div>
    <div class="col">
        <input type="text" name="defaultRegisterFormNom" class="form-control" placeholder="Nom">
    </div>
</div>

<input type="text" name="defaultRegisterFormPseudo" class="form-control mb-4" placeholder="Pseudo">

<input type="email" name="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

<input type="password" name="defaultRegisterFormMotDePasse" class="form-control" placeholder="Mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br>

<input type="password" name="defaultRegisterMotDePasse2" class="form-control" placeholder="Confirmer mot de passe" aria-describedby="defaultRegisterFormPasswordHelpBlock"><br>

<button class="btn btn-info my-4 btn-block" type="submit">Inscription</button>


<?php
$content = ob_get_clean();
require '../template/default.php';
?>