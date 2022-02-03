<?php 
ob_start(); ?>

<h1>Page d'administrateur</h1>
<div class="row">
    <div class="col text-center">
        <a href="genererProduitAdmin" class="btn btn-primary">Gestion des produits </a>
    </div>
    <div class="col text-center">
        <a href="genererNewsAdmin" class="btn btn-primary">Gestion des news </a>
    </div>
    <div class="col text-center">
        <form method="POST" action="">
            <input type='hidden' name='deconnexion' value="true" />
            <input type="submit" class="deco" value="se déconnecter" />
        </form>
    </div>
</div>

<?php $content = ob_get_clean();
 require "template.php" ?>