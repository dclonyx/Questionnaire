<?php
$title = 'Supprimer un utilisateur';
ob_start();
?>

<div class="contenair text-center"> 
    <?php
    include ('./database.php');

    $requesuti = $pdo->query('SELECT DISTINCT pseudo FROM utilisateur WHERE statut_Utilisateur =1');
    $messages = $requesuti->fetchAll(PDO::FETCH_OBJ); 
    echo '<form action="validationsupression.php" method="post" class="text-center border border-light p-5">';
    echo '<select id="pseudo" name="pseudo" class="form-control mb-4">';
    foreach($messages as $message){
        echo $message->pseudo.'<option value="'.$message->pseudo.'">'.$message->pseudo.'</option>';
    }
    echo '</select>';
    echo '<button class="btn btn-info my-4 btn-block" type="submit">Supprimer</button>';
    echo '</form>';
    echo '<h2 class="text-danger">Attention, toute suppression est définitive</h2>';
    $requesuti->closeCursor();
    ?>
</div>


<?php
$content = ob_get_clean();
require '../php/template/default.php';
?>