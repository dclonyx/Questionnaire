<?php
session_start();
$title = 'Archives';
include ('../Traitement/database.php');
?>
<div class="w-100 text-center mt-2">
    <h4 class="text-danger">Veuillez n'avez pas accès à cette page</h4>
</div>
<?php
$content = ob_get_clean();
require '../template/default.php';
?>