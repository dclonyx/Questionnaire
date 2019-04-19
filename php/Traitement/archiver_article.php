<?php
include ('../Traitement/database.php');
$title = 'Archivage';

$id_article = $_POST['id_article'];

$req=$pdo->prepare("UPDATE article SET statut_Article = 2
WHERE id_Article = :id_article");
$req->execute(array(
    'id_article' => $id_article
));
$req->closeCursor();
header('Location: ../Affichage/archives.php');
