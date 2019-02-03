<?php
$title = 'Validation supression';
ob_start();

$utilisateur = $_POST['pseudo'];
include ('./database.php');

$stmt = $pdo->prepare("DELETE FROM UTILISATEUR WHERE PSEUDO=:utilisateur");
$stmt->execute(array(
    'utilisateur' => $utilisateur
));
$stmt->closeCursor();

$content = ob_get_clean();
require '../php/template/default.php';
?>