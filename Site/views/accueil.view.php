<?php 
ob_start(); ?>
<?php 
require_once "models/pdo.php" ;
require_once "models/produit.dao.php" ;
 ?>
 
    
        <h1>Bienvenue chez Sweets Family !</h1>

        <!--DEBUT SECTION SLIDER-->
        <section id="section_slider">

            <div id="slides">
                <img src="<?= URL ?>public/sources/image/slide1.jpg" alt="bonbon" class="slide"/>

                <img src="<?= URL ?>public/sources/image/slide2.jpg" alt="bonbon" class="slide"/>
            </div>
            <!-- The dots/circles -->
            <div>
                <span class="point" data-pos=0></span>
                <span class="point" data-pos=1></span>
            </div>
        </section>
        <!--FIN SECTION SLIDER--> 



        <!-- DEBUT SECTION SELECTION-->
        <section id="bonbon">
				<article class="list">
					<h2><span>Notre nouveauté</span></h2>
					<img src="<?= URL ?>public/sources/image/bonbon-3.jpg" alt="coeur bonbon" />
					<h3>Fraise Tagada</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<section class="prix">
						<p>À partir de <strong>8,50€</strong></p>
					</section>
					<a class="btn" href="#">Voir ce produit</a>
				</article>
				<article class="list">
					<h2><span>Notre best-seller</span></h2>
					<img src="<?= URL ?>public/sources/image/bonbon-8.jpg" alt="coeur bonbon" />
					<h3>Fraisy</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<section class="prix">
						<p>À partir de <strong>8,50€</strong></p>
					</section>
					<a class="btn" href="#">Voir ce produit</a>
				</article>
				<article class="list">
					<h2><span>Notre coup de coeur</span></h2>
					<img src="<?= URL ?>public/sources/image/bonbon-4.jpg" alt="coeur bonbon" />
					<h3>Banan's</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<section class="prix">
						<p>À partir de <strong>8,50€</strong></p>
					</section>
					<a class="btn" href="">Voir ce produit</a>
				</article>
			</section>
        <!-- FIN SECTION SELECTION-->

        <!-- DEBUT SECTION INFO-->
        <section id="info">
            <h2>En savoir plus sur nous</h2>
            <article class="clear">
                <img src="<?= URL ?>public/sources/image/coeur.png" alt="coeur bonbon" />
                <p>Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat 
                    eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum 
                    emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum 
                    beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec 
                    miseratione ulla posse deflecti.
                    Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat
                    emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum 
                    beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec 
                    miseratione ulla posse deflecti.
                    Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat  
                </p>
            </article>

        </section>
        <!--FIN SECTION INFO-->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="<?= URL ?>public/js/slider.js"></script>

<?php $content = ob_get_clean();
 require "template.php" ?>