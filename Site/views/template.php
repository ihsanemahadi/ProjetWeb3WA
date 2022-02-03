<?php 
require_once "config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="<?=$description ?>" >
        <title><?= $title ?> </title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/797efd2ea2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?= URL ?>public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= URL ?>public/css/style.css">
</head>
    <body>
<!--DEBUT HEADER-->
        <header>

        <div class="container">
            <div id="logo">
            <button class="connexion-button right-fifty"><a href="<?= URL ?>login"><i class="fas fa-user"></i> Connexion</a></button>
        <a href=""><img src="<?= URL ?>public/sources/image/logo.png" alt="logo du site" class="logo"/></a>
        </div>
            <nav>
                <a href="<?= URL ?>accueil"><i class="fas fa-home"></i> Accueil</a>
                <a href="<?= URL ?>produits"><i class="fas fa-candy-cane"></i> Nos Produits</a>
                <a href="<?= URL ?>actus"><i class="fas fa-candy-cane"></i>Actualité</a>
                <a href="<?= URL ?>contact"><i class="fas fa-paper-plane"></i> Contactez-nous</a>

                <?php if(Securite::verifAccessSession()){ ?>
                <a href="<?= URL ?>admin"><i class="fas fa-cog"></i> Administration</a>
                <?php } ?>
                
            </nav>
        </header>
        
        <!--FIN HEADER-->

        <!--DEBUT CONTAINER-->
        <main class="container">
        <?= $content ?>
        </main>
        <!--FIN CONTAINER-->

        <footer>Site réalité par Ihsane Mahadi dans le cadre d'un projet Web</footer>
    </body>
</html>