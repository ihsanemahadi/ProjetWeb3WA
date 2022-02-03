<?php ob_start();  ?>

<h1>Ajout d'un produit</h1>

<form class="formulaire-contact" action="" method="POST" enctype="multipart/form-data">

        
        <label for="nomBonbon">Nom du bonbon: </label>
        <input type="text" class="form-control" name="nomBonbon" id="nomBonbon" required>

        <label for="reference">Référence du bonbon: </label>
        <input type="text" class="form-control" name="reference" id="reference" required>

        <label for="description">Description : </label>
        <textarea class="form-control" id="description" name="description" rows="5" required></textarea>


        <label for="prix">prix du bonbon </label>
        <input type="text" class="form-control" name="prix" id="prix" required>

        <label for="imageBonbon">Chemin de l'image: </label>
        <input type="text" class="form-control" name="imageBonbon" id="imageBonbon" required>

        <label for="idHtml"> l'id html: </label>
            <input type="text" class="form-control" name="idHtml" id="idHtml" required>
    


        <input type="submit" value="Valider" class="validate">


</form>



<?php
$contentAdminAction = ob_get_clean();
?>

            
      