<?php
include ('../Traitement/database.php');
$title = 'Publication';

$id_article = $_POST['id_article'];

$req=$pdo->prepare("UPDATE article SET statut_Article = 1
WHERE id_Article = :id_article");
$req->execute(array(
    'id_article' => $id_article
));
$req->closeCursor();
header('Location: ../Affichage/articles.php');
