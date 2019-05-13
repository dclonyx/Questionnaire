<?php
session_start();
$title = 'Nouvel Article';
include ('../Traitement/database.php');
ob_start();
if(empty($_SESSION['statut'])) {
    header('Location: ../template/redirection.php');
} else {
    ?>
    <div class="card">
        <h5 class="card-header info-color white-text text-center py-4"><strong>Nouvel Article</strong></h5><br>
        <!--Card content-->
            <div class="card-body px-lg-5 pt-0">
                <form class="text-center text-lg-left" action="../Traitement/ajout_new_article.php" method="POST" style="color: #757575;">
                    <div class="md-form">
                        <input type="text" name="titre" placeholder="Titre de votre Article" class="form-control">
                    </div>
                    <div class="md-form">
                        <label for="contenu">Contenu de votre Article :</label>    
                        <textarea name="contenu" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="md-form">
                        <p class="mt-2">Ecrit par <?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?></p>
                    </div>
                    <?php
                    if ($_SESSION['statut'] == 2) {?>
                    <div>
                        <input type="checkbox" name="publier">Publier l'article
                    </div>
                    <?php
                    }?>
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Envoyer</button>
                </form>
            </div>
    </div>
    <?php
}
$content = ob_get_clean();
require '../template/default.php';
