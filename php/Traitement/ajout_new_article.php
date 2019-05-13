<?php
session_start();
include ('../Traitement/database.php');

$titre = $_POST['titre'];
$contenu = htmlspecialchars($_POST['contenu']);
if ($_SESSION['statut'] == 2) {
    $publier = $_POST['publier'];
}

if(!empty($titre)){
    if (!empty($contenu) && $publier){
        $req = $pdo-> prepare("INSERT INTO article (nom_article, contenu_Article, statut_Article ,id_Utilisateur)
        Value (:titre, :contenu, :statut, :utilisateur)");
        $req -> execute(array(
            'titre' => $titre,
            'contenu' => $contenu,
            'statut' => 1,
            'utilisateur' => $_SESSION['id']
        ));
    } else if (!empty($contenu)) { 
        $req = $pdo-> prepare("INSERT INTO article (nom_article, contenu_Article, statut_Article ,id_Utilisateur)
        Value (:titre, :contenu, :statut, :utilisateur)");
        $req -> execute(array(
            'titre' => $titre,
            'contenu' => $contenu,
            'statut' => 0,
            'utilisateur' => $_SESSION['id']
        ));
    }
} 

header('Location: ../Affichage/articles.php');