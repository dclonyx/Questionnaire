<?php
$title = 'Administration';
ob_start();
?>
<div class="text-center">
    <h1>Gestion du site</h1>
</div>
<select class="custom-select">
  <option selected>Approuver un questionnaire</option>
  <option value="1">Supprimer un questionnaire</option>
  <option value="2">Supprimer un utilsateur</option>
</select>


<?php
$content = ob_get_clean();
require '../php/template/default.php';
?>