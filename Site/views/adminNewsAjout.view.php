<?php 
ob_start(); ?>
<h1>Ajout d'une News</h1>
<form class="formulaire-contact" action="" method="POST" enctype="multipart/form-data">
    
        <label for="titreActu">Titre de l'actualité : </label>
        <input type="text" class="form-control" name="titreActu" id="titreActu" required>

        <label for="contenuActu">Contenu de l'actualité: </label>
        <textarea class="form-control" id="contenuActu" name="contenuActu" rows="5" required></textarea>

        <label for="imageActu">Chemin de l'image: </label>
        <input type="text" class="form-control" name="imageActu" id="imageActu" required>

        <input type="submit" value="Valider" class="validate"">

</form>




<?php $contentAdminAction= ob_get_clean();
 ?>