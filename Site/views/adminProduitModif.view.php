<?php ob_start();  ?>

<h1>Modification d'un produit</h1>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="etape" value="2">
    <label for="produit">Quel bonbon voulez-vous modifier ? </label>
    <select name="produit" id="produit" class="form-control" onchange="submit()">
        <option></option>
        <?php foreach($produits as $produit) :?>
            <option value="<?= $produit['id_bonbon'] ?>"
                <?php if(isset($_POST['produit']) && $_POST['produit'] === $produit['id_bonbon']) echo "selected"?>>
                <?= $produit['id_bonbon'] ?> - <?= $produit['nom_bonbon'] ?> 
            </option>
        <?php endforeach; ?>
    </select>
</form>

<?php if(isset($_POST['etape']) && (int) $_POST['etape'] >=2) {?>
<form class="formulaire-contact" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="etape" value="3">
    <input type="hidden" name="produit" value="<?= $_POST['produit'] ?>" id="idBonbon">


            <label for="nomBonbon" class="col-12 cold-md-auto pr-2">Nom du bonbon : </label>
            <input type="text" class="col form-control" id="nomBonbon" name="nomBonbon" value="<?= $data['produit']['nom_bonbon'] ?>" required>

            <label for="reference" class="col-12 cold-md-auto pr-2">Référence du bonbon : </label>
            <input type="text" class="col form-control" id="reference" name="reference" value="<?= $data['produit']['reference'] ?>">

            <label for="description" class="col-12 cold-md-auto pr-2">Description du bonbon : </label>
            <textarea class="form-control" id="description" name="description" rows="5"><?=  $data['produit']['description'] ?></textarea>
    
            <label for="prix" class="col-12 cold-md-auto pr-2">Prix du bonbon : </label>
            <input type="text" class="col form-control" id="prix" name="prix" value="<?= $data['produit']['prix'] ?>" required>
      
            <label for="imageBonbon" class="col-12 cold-md-auto pr-2">Image du bonbon : </label>
            <input type="text" class="col form-control" id="imageBonbon" name="imageBonbon" value="<?= $data['produit']['image'] ?>" required>
     
            <label for="idHtml" class="col-12 cold-md-auto pr-2">id html du bonbon :</label>
            <input type="text" class="col form-control" id="idHtml" name="idHtml" value="<?= $data['produit']['id_html'] ?>" required>
 

    <div class="row no-gutters">
        <button type="submit" class="col btn btn-primary">Valider</button>
        <button id="btnSup" class="btn btn-danger col">Supprimer</button>
    </div>

    <script src="public/js/verificationSuppressionProduit.js"></script>
    <?php } ?>

<?php
$contentAdminAction = ob_get_clean();
?>

            
      