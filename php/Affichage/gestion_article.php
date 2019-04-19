<?php
$title = 'Administration';
ob_start();
?>
<div class="text-center">
    <h2>Gestion du site</h2>
</div>
<select class="custom-select"  onChange="choixselectarticle(this.value)">
  <option value="1" selected>Ajouter article</option>
  <option value="2">Archiver un article</option>
  <option value="3">Supprimer un article</option>
</select>

<?php
$content = ob_get_clean();
require '../template/default.php';
?>