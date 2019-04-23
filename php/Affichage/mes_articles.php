<?php
session_start();
$title = 'Mes articles';
include ('../Traitement/database.php');

$idUtilisateur = $_SESSION['id'];

$req = $pdo->prepare("SELECT * FROM Article
NATURAL JOIN utilisateur
WHERE id_Utilisateur = :idUtilisateur");
$req -> execute(array(
    'idUtilisateur' => $idUtilisateur
));

ob_start();
while ($row = $req -> fetch()) {
    $nomArticle = $row['nom_Article'];
    $contenuArticle = $row['contenu_Article'];
    $id_article = $row['id_Article'];
    $statut = $row['statut_Article'];
    $stautUtilisateur = $row['statut_Utilisateur'];
    ?>
    <div class="pb-4 border-primary border-top border-bottom">
        <h2 class="text-capitalize text-center mt-2"><?php echo $nomArticle; ?></h2>
            <p class="p-2"><?php echo $contenuArticle; ?></p>
            <div class="row">
            <?php
            // non publié et admin
            if($statut == 0 && $stautUtilisateur == 2) {?>
                <form action="../Affichage/modifier.php" method="POST" class="col-6 col-md-3">
                    <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                    <button type="submit" class="btn border-primary">Modifier</button>
                </form>
                <form action="../Traitement/publier_article.php" method="POST" class="col-6 col-md-3">
                    <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                    <button type="submit" class="btn border-primary">Publier</button>
                </form>
                <p class="col-12 col-md-6 text-center">Cet article est n'est pas encore publié</p>
            <?php
            // non publié et utilisateur
            } elseif ($statut == 0 && $stautUtilisateur == 1) {?>
                <form action="../Affichage/modifier.php" method="POST" class="col-6 col-md-3">
                    <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                    <button type="submit" class="btn border-primary">Modifier</button>
                </form>
                <p class="col-12 col-md-6 text-center">Cet article est n'est pas encore publié</p>
            <?php
            // publié et admin
            } elseif ($statut == 1 && $stautUtilisateur == 2) {?>
                <form action="../Affichage/modifier.php" method="POST" class="col-6 col-md-3">
                    <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                    <button type="submit" class="btn border-primary">Modifier</button>
                </form>
                <form action="../Traitement/archiver_article.php" method="POST" class="col-6 col-md-3">
                    <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                    <button type="submit" class="btn border-primary">Archiver</button>
                </form>
                <p class="col-12 col-md-6 text-center">Cet article est publié</p>
            <?php
            // publié et utilisateur
            } elseif ($statut == 1  && $stautUtilisateur == 1) {?>
                <form action="../Affichage/modifier.php" method="POST" class="col-6 col-md-3">
                    <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                    <button type="submit" class="btn border-primary">Modifier</button>
                </form>
                <p class="col-12 col-md-6 text-center">Cet article est publié</p>
            <?php
            } elseif ($stautUtilisateur == 2){?>
                <form action="../Traitement/publier_article.php" method="POST" class="col-6 col-md-3">
                    <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                    <button type="submit" class="btn border-primary">Publier</button>
                </form>
                <p class="col-12 text-center">Cet article est archivé</p>
            <?php
            } else {?>
                 <p class="col-12 text-center">Cet article est archivé</p>
            <?php
            }?>
          </div>
    </div>
<?php
}
$req->closeCursor();
$content = ob_get_clean();
require '../template/default.php';
?>