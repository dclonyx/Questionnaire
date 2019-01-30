<?php
ob_start();
$prenom = $_POST['defaultRegisterFormPrenom'];
$nom = $_POST['defaultRegisterFormNom'];
$mail = $_POST['defaultRegisterFormEmail'];
$pseudo = $_POST['defaultRegisterFormPseudo'];
// Hachage du mot de passe
$mdp = password_hash($_POST['defaultRegisterFormMotDePasse'], PASSWORD_DEFAULT);

include ('./database.php');
$existe = 0;

if (isset($mdp) and isset($mail) and isset($nom) and isset($prenom) and isset($pseudo)){
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
        } elseif ($existe == 1){
            echo "Le pseudo existe deja";
            } elseif ($existe == 2){
                echo "Cet email est deja utilise";
            }
} else {
    echo "Veuilez remplir tous les champs svp";
}
;
$content = ob_get_clean();
require '../php/template/default.php';
