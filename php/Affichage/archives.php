<?php
session_start();
$title = 'Archives';
include ('../Traitement/database.php');

$stmt = $pdo->query("SELECT * FROM Article
NATURAL JOIN utilisateur
WHERE statut_Article = 2
ORDER by id_Article DESC");
ob_start();
while ($row = $stmt -> fetch()) {
    $nomArticle = $row['nom_Article'];
    $contenuArticle = $row['contenu_Article'];
    $nom = $row['nom_Utilisateur'];
    $prenom = $row['prenom_Utilisateur'];
    ?>
    <div class="pb-2 border-primary border-top border-bottom">
        <h2 class="text-capitalize text-center mt-2"><?php echo $nomArticle; ?></h2>
        <p class="p-2"><?php echo $contenuArticle; ?></p>
        <p class="text-center">Auteur : <?php echo $nom." ".$prenom; ?></p>
    </div>
<?php    
}

$content = ob_get_clean();
require '../template/default.php';
?>