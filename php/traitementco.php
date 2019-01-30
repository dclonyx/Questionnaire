<?php
ob_start();
$mail = $_POST['materialLoginFormEmail'];
$mdp = $_POST['materialLoginFormPassword'];

include ('./database.php');
$mdpok = 0;
$emailok = 0;
if (isset($mdp) and isset($mail)){
    $stmt = $pdo->query("SELECT * FROM UTILISATEUR");
   
    while ($row = $stmt->fetch()){
        if ($mail === $row['email_Utilisateur']){
            $emailok = 1;
            $PasswordCorrect = password_verify($mdp, $row['mot_de_passe_Utilisateur']);
            if ($PasswordCorrect){
                $mdpok = 1;
            }
        }
    }

    $stmt->closeCursor();
    if ($mdpok == 1 && $emailok == 1){
        session_start();
        $_SESSION['id'] = $row['id_Utilisateur'];
        $_SESSION['pseudo'] = $row['pseudo'];
        $_SESSION['nom'] = $row['nom_Utilisateur'];
        $_SESSION['prenom'] = $row['prenom_Utilisateur'];
        $_SESSION['statut'] = $row['statut_Utilisateur'];

        echo 'Vous êtes connecté !';

    } elseif($mdpok == 0 || $emailok == 0){
        echo "Mauvais email ou mauvais mot de passe";
    }

    } else {
        echo "Veuilez remplir tous les champs svp";
    }

        

$content = ob_get_clean();
require '../php/template/default.php';


