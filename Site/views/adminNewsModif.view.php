<?php ob_start();  ?>

<h1>Modification d'une actualité</h1>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="etape" value="2">
    <label for="actualite">Quel actualité voulez-vous modifier?</label>
    <select name="actualite" id="actualite" class="form-control" onchange="submit()">
        <option></option>
        <?php foreach($actualites as $actualite) :?>
            <option value="<?= $actualite['id_actualite'] ?>"
                <?php if(isset($_POST['actualite']) && $_POST['actualite'] === $actualite['id_actualite']) echo "selected"?>>
                <?= $actualite['id_actualite'] ?> - <?= $actualite['titre_actualite'] ?> 
            </option>
        <?php endforeach; ?>
    </select>
</form>

<?php if(isset($_POST['etape']) && (int) $_POST['etape'] >=2) {?>
<form class="formulaire-contact" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="etape" value="3">
    <input type="hidden" name="actualite" value="<?= $_POST['actualite'] ?>" id="idActualite">


            <label for="titreActu" class="col-12 cold-md-auto pr-2">titre de l'actualité : </label>
            <input type="text" class="col form-control" id="titreActu" name="titreActu" value="<?= $data['actualite']['titre_actualite'] ?>" required>

            <label for="contenuActu" class="col-12 cold-md-auto pr-2">Contenu de l'actualite : </label>
            <textarea class="form-control" id="contenuActu" name="contenuActu" rows="5"><?=  $data['actualite']['contenu_actualite'] ?></textarea>

            <label for="imageActu" class="col-12 cold-md-auto pr-2">Chemin de l'image de l'actualité: </label>
            <input type="text" class="col form-control" id="imageActu" name="imageActu" value="<?= $data['actualite']['image'] ?>" required>

    <div class="row no-gutters">
        <button type="submit" class="col btn btn-primary">Valider</button>
    </div>
    <?php } ?>

<?php
$contentAdminAction = ob_get_clean();
?>

            