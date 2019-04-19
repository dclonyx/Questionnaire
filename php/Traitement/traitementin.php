<?php
$title = 'Inscription';
ob_start();

$prenom = $_POST['defaultRegisterFormPrenom'];
$nom = $_POST['defaultRegisterFormNom'];
$mail = $_POST['defaultRegisterFormEmail'];
$pseudo = $_POST['defaultRegisterFormPseudo'];

$passe = $_POST['defaultRegisterFormMotDePasse'];
$passe2 = $_POST['defaultRegisterMotDePasse2'];
if($passe == $passe2){
    // Hachage du mot de passe

    $mdp = password_hash($_POST['defaultRegisterFormMotDePasse'], PASSWORD_DEFAULT);

    include ('./database.php');
    $existe = 0;

    if (!empty($mail) and !empty($nom) and !empty($prenom) and !empty($pseudo)){
        $stmt = $pdo->query("SELECT PSEUDO, EMAIL_UTILISATEUR FROM UTILISATEUR");
        while ($row = $stmt->fetch()){
            if ($pseudo == $row['PSEUDO']){
                $existe = 1;
            } elseif ($mail == $row['EMAIL_UTILISATEUR']){
                $existe = 2;
            }
        }
        if($existe == 0){
            $req = $pdo->prepare("INSERT INTO UTILISATEUR (NOM_UTILISATEUR, PRENOM_UTILISATEUR, EMAIL_UTILISATEUR, STATUT_UTILISATEUR, DATE_INSCRIPTION_UTILISATEUR, MOT_DE_PASSE_UTILISATEUR, PSEUDO) VALUES (:nom, :prenom, :mail,:statut, NOW() ,:mdp,:pseudo)");
            $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'mail' => $mail,
                'statut' => 1,
                'mdp' => $mdp,
                'pseudo' => $pseudo
            ));
            $req->closeCursor();
            echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span> Votre inscription a bien ete prise en compte. Vous pouvez vous connecter.</div>';
            } elseif ($existe == 1){
                echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Ce pseudo existe deja !</div>';
                } elseif ($existe == 2){
                    echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Cet email est deja utilise !</div>';
                }
    } else {
        echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span> Veuillez remplir tous les champs svp</div>';
    }
    ;

} else{
    echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>Les mots de passe ne correspondent pas !</div>';
}

$content = ob_get_clean();
require '../template/default.php';
