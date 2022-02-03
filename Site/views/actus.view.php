<?php 
ob_start(); ?>

        <h1>L'actualité</h1>
        <?php foreach ($actualites as $actualite) :?>
            <!--DEBUT SECTION ACTU-->
        <section id="actu">

        <div class='row no-gutters align-items-center' style="min-height:300px;">

        <div class="col-12 col-lg-3 text-center">
            <img src="<?= URL ?>public/sources/image/<?= $actualite['image']?>" style="max-height:500px" class="img-fluid p-1"/>
        </div>
        <div class="col-12 col-lg-9">
            <h2><?= $actualite ['titre_actualite'] ?></h2>
            <h3>Posté le : <?=  date("d/m/Y", strtotime($actualite['date_publication_actualite'])) ?></h3>
            <?= $actualite['contenu_actualite'] ?>
        </div>
        <hr>
    </div>

        </section>
        <!--FIN SECTION ACTU-->
        <?php endforeach; ?>



<?php $content = ob_get_clean();
 require "template.php"; ?>