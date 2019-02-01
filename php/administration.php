<?php
$title = 'Administration';
ob_start();
?>
<div class="text-center">
    <h2>Gestion du site</h2>
</div>
<select class="custom-select"  onChange="choixselect(this.value)">
  <option value="1" selected>Approuver un questionnaire</option>
  <option value="2">Supprimer un questionnaire</option>
  <option value="3">Supprimer un utilsateur</option>
</select>


<?php
$content = ob_get_clean();
require '../php/template/default.php';
?>