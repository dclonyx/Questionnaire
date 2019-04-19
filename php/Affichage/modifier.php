<?php
session_start();
include ('../Traitement/database.php');
$title = 'Modification';
ob_start();
$idArticle = $_POST['id_article'];

$req = $pdo->prepare("SELECT * FROM Article
NATURAL JOIN utilisateur
WHERE id_Article = :id_article");
$req -> execute(array(
    'id_article' => $idArticle
));
$row = $req -> fetch();
$nomArticle = $row['nom_Article'];
$contenuArticle = $row['contenu_Article'];
$req->closeCursor();
?>
<form class="text-center pb-4" style="color: #757575;" method="POST" action="../Traitement/modifier_article.php">
    <div class="md-form">
        <label for="titre">Titre de votre article :</label> 
        <input type="text" class="form-control text-center" name="titre" value="<?php echo $nomArticle; ?>">
    </div>
    <div class="md-form">
        <label for="contenu">Contenu de votre article :</label>    
        <textarea class="form-control " name="contenu" rows="20"><?php echo $contenuArticle; ?></textarea>
    </div>
    <input type="hidden" name="id_article" value="<?php echo $idArticle; ?>">
    <button type="submit" class="btn">Envoyer</button>
</form>
<?php
$content = ob_get_clean();
require '../template/default.php';
?>