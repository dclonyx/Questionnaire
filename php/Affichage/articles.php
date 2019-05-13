<?php
session_start();
$title = 'Articles';
include ('../Traitement/database.php');

$stmt = $pdo->query("SELECT * FROM Article
NATURAL JOIN utilisateur
WHERE statut_Article = 1
ORDER by id_Article DESC");
ob_start();
if(!empty($_SESSION['statut'])){
    if($_SESSION['statut'] != 0 ){?>
    <div class="text-center w-100">
        <a href="../Affichage/new_article.php">Ajouter un article</a>
    </div>
    <?php
    }
}
while ($row = $stmt -> fetch()) {
    $nomArticle = $row['nom_Article'];
    $contenuArticle = $row['contenu_Article'];
    $pseudo = $row['pseudo'];
    $id = $row['id_Utilisateur'];
    $id_article = $row['id_Article'];
    $statut = $row['statut_Utilisateur'];
    ?>
    <div class="pb-4 border-primary border-top border-bottom">
        <h2 class="text-capitalize text-center mt-2"><?php echo $nomArticle; ?></h2>
            <p class="p-2"><?php echo nl2br($contenuArticle); ?></p>
            <div class="row m-0">
                <p class="text-center m-0 col-12">Auteur : <?php echo $pseudo; ?></p>
            </div>
    </div>
<?php    
}

$content = ob_get_clean();
require '../template/default.php';
?>