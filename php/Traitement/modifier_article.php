<?php
include ('../Traitement/database.php');
$title = 'Modification';

$id_article = $_POST['id_article'];
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];
var_dump($titre);

$req=$pdo->prepare("UPDATE article SET nom_Article = :titre, contenu_Article = :contenu
WHERE id_Article = :id_article");
$req->execute(array(
    'id_article' => $id_article,
    'titre' => $titre,
    'contenu' => $contenu
    ));
$req->closeCursor();
header('Location: ../Affichage/articles.php');
