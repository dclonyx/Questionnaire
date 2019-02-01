<?php
session_start();
$title = 'Connexion';
ob_start();
$mail = $_POST['materialLoginFormEmail'];
$mdp = $_POST['materialLoginFormPassword'];

include ('./database.php');

if (!empty($mdp) and !empty($mail)){
    $mdpok = 0;
    $emailok = 0;
    $stmt = $pdo->query("SELECT * FROM UTILISATEUR");
   
    while ($row = $stmt->fetch()){
        if ($mail === $row['email_Utilisateur']){
            $emailok = 1;
            $PasswordCorrect = password_verify($mdp, $row['mot_de_passe_Utilisateur']);
            if ($PasswordCorrect){
                $mdpok = 1;
                $_SESSION['id'] = $row['id_Utilisateur'];
                $_SESSION['pseudo'] = $row['pseudo'];
                $_SESSION['nom'] = $row['nom_Utilisateur'];
                $_SESSION['prenom'] = $row['prenom_Utilisateur'];
                $_SESSION['statut'] = $row['statut_Utilisateur'];
            }
        }
    }

    
    if ($mdpok == 1 && $emailok == 1){
        echo '<div class="text-center"><p class="text-primary">Vous êtes connecté !</p></div>';
        

    } elseif($mdpok == 0 || $emailok == 0){
        echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span>E-mail ou Mot de passe invalide</div>';
    }

    } else {
        echo '<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> <span class="sr-only">Error:</span>Veuilez remplir tous les champs svp</div>';   
    }
$stmt->closeCursor();
        

$content = ob_get_clean();
require '../php/template/default.php';


