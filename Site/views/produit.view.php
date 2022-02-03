<?php ob_start();?>
<?php 
require_once "models/pdo.php" ;
require_once "models/produit.dao.php" ;
 ?>

<h1>Découvrez tous nos produits</h1>
<?php foreach ($produits as $produit) : ?>
	<section id="produit">
                <article id="<?= $produit['id_html']?>">   
                <img src="<?= URL ?>public/sources/image/<?= $produit['image']?>" alt="image de bonbon"/>
		    <div class="block-texte">

                        <h2><?= $produit['nom_bonbon']?></h2> 
                        <p class="ref"> Référence :<?= $produit['reference']?></p>
                        <p>DESCRIPTION DU PRODUIT : <?= $produit['description']?></p>
                        <p class="price">Prix : <?= $produit['prix']?>€</p>
                        <div id="label">
                            <p>Nos produits sont certifiés 100% BIO !</p>
                            <img src="<?= URL ?>public/sources/image/label.png" alt="label bio"/>
                        </div>
                    </div>


                </article>


    </section>
        <?php endforeach; ?>
<?php $content = ob_get_clean();
 require "template.php" ?>