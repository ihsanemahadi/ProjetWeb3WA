<?php ob_start();  ?>

<h1>Gestion des produits</h1>

<a href="genererProduitAdminAjout" class="btn btn-primary">Ajouter</a>
<a href="genererProduitAdminModif" class="btn btn-primary">Modifier</a>

<?= $contentAdminAction ?>

<?php if($alert !== ""){ 
    echo afficherAlert($alert,$alertType);
 } ?>

<?php
$content = ob_get_clean();
require "views/template.php"
?>

            