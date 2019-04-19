<?php
session_start();
$title = 'Connexion';
ob_start();
$mail = $_POST['materialLoginFormEmail'];
$mdp = $_POST['materialLoginFormPassword'];

include ('./database.php');

if (!empty($mdp) and !empty($mail)){
    $mdpok = false;
    $emailok = false;
    $stmt = $pdo->query("SELECT * FROM UTILISATEUR");
       
    while ($row = $stmt->fetch()){
        if ($mail === $row['email_Utilisateur']){
            $emailok = true;
            $PasswordCorrect = password_verify($mdp, $row['mot_de_passe_Utilisateur']);
            if ($PasswordCorrect){
                $mdpok = true;
                $_SESSION['id'] = $row['id_Utilisateur'];
                $_SESSION['pseudo'] = $row['pseudo'];
                $_SESSION['nom'] = $row['nom_Utilisateur'];
                $_SESSION['prenom'] = $row['prenom_Utilisateur'];
                $_SESSION['statut'] = $row['statut_Utilisateur'];
            }
        }
    }

    if ($mdpok && $emailok){
        echo '<div class="text-center"><p class="text-primary">Vous êtes connecté en tant que '. $_SESSION['pseudo'].' !</p></div>';
        
    } elseif(!$mdpok || !$emailok){
        echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>E-mail ou Mot de passe invalide</div>';
    }
    $stmt->closeCursor();
        } else {
            echo '<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Veuilez remplir tous les champs svp</div>';
        }     

$content = ob_get_clean();
require '../template/default.php';

