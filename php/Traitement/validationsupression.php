<?php
$title = 'Validation supression';
ob_start();

$utilisateur = $_POST['pseudo'];
include ('./Database.php');

$stmt = $pdo->prepare("DELETE FROM UTILISATEUR WHERE PSEUDO=:utilisateur");
$stmt->execute(array(
    'utilisateur' => $utilisateur
));
$stmt->closeCursor();

$content = ob_get_clean();
require '../template/default.php';
?>