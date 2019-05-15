<?php
session_start();
$title = 'Administration';
if($_SESSION['statut'] == 2) {
    include ('../Traitement/database.php');
    $req = $pdo->prepare("SELECT * FROM Article
    NATURAL JOIN utilisateur
    GROUP BY id_Article DESC");
    $req -> execute();
    ob_start();
    while ($row = $req -> fetch()) {
        $nomArticle = $row['nom_Article'];
        $contenuArticle = $row['contenu_Article'];
        $nom = $row['nom_Utilisateur'];
        $pseudo = $row['pseudo'];
        $statutArticle = $row['statut_Article'];
        $id_article = $row['id_Article'];
        ?>
        <div class="pb-4 border-primary border-top border-bottom">
            <h2 class="text-capitalize text-center mt-2"><?php echo $nomArticle; ?></h2>
                <p class="p-2"><?php echo nl2br($contenuArticle); ?></p>
                <div class="row m-0">
                    <p class="text-center m-0 col-12">Auteur : <?php echo $pseudo; ?></p>
                </div>
                <div class="row m-0">
                    <?php
                    if (!empty($_SESSION['id'])){
                        if ($_SESSION['statut'] == 2 && $statutArticle == 1){?>
                        <form action="../Affichage/modifier.php" method="POST" class="col-6 col-md-3 text-center">
                                <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                                <button type="submit" class="mr-auto btn border-primary">Modifier</button>
                            </form>
                        <form action="../Traitement/archiver_article.php" method="POST" class="col-6 col-md-3 text-center">
                            <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                            <button type="submit" class="btn border-primary">Archiver</button>
                        </form>
                        <p class="col-12 col-md-5 text-center">Cet article est publié</p>
                        <?php
                            } elseif ($_SESSION['statut'] == 2 && $statutArticle == 0){?>
                                <form action="../Affichage/modifier.php" method="POST" class="col-6 col-md-3 text-center">
                                        <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                                        <button type="submit" class="mr-auto btn border-primary">Modifier</button>
                                    </form>
                                <form action="../Traitement/publier_article.php" method="POST" class="col-6 col-md-3 text-center">
                                    <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                                    <button type="submit" class="btn border-primary">Publier</button>
                                </form>
                                <p class="col-12 col-md-5 text-center">Cet article est n'est pas encore publié</p>
                                <?php
                                } elseif ($_SESSION['statut'] == 2 && $statutArticle == 2) {?>
                                    <form action="../Affichage/modifier.php" method="POST" class="col-6 col-md-3 text-center">
                                        <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                                        <button type="submit" class="mr-auto btn border-primary">Modifier</button>
                                    </form>
                                    <form action="../Traitement/publier_article.php" method="POST" class="col-6 col-md-3 text-center">
                                        <input type="hidden" value="<?php echo $id_article; ?>" name="id_article">
                                        <button type="submit" class="btn border-primary">Publier</button>
                                    </form>
                                    <p class="col-12 col-md-5 text-center">Cet article est archivé</p>
                        <?php
                        }
                    }?>
                </div>
        </div>
    <?php    
    }
} else {
    header('Location: ../template/redirection.php');
}
$content = ob_get_clean();
require '../template/default.php';
?>