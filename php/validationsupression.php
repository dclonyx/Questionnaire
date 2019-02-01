<?php
$title = 'Validation supression';
ob_start();
?>
<h1>coucou</h1>
<?php
$content = ob_get_clean();
require '../php/template/default.php';
?>