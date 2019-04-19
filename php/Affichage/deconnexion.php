<?php
session_start();
$title = 'Deconnexion';
ob_start();
$_SESSION = array();

session_destroy();
?>
<div class="contenair text-center">
    <p>Vous etes deconnecte</p>
</div>


<?php
$content = ob_get_clean();
require '../template/default.php';
?>