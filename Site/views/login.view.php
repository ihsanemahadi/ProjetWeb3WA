<?php 
ob_start(); ?>
<!--DEBUT SECTION LOG-->
<section id="log">
    <h1>Connexion</h1>
    <form class="formulaire-contact" action="" method="POST">

            <input type="text" id="login" name="login" placeholder="Login" class="marbot" required>
            <input type="password" id="password" name="password" placeholder="Password" class="marbot"required>
            <input id="valider" type="submit" value="Valider" name="button" class="marbot">

        </form>
</section>
<!--FIN SECTION LOG-->
<?php if($alert !== ""){ ?>
<div class="alert alert-danger" role="alert">
    <?= $alert ?>
</div>
<?php } ?>


















<?php $content = ob_get_clean();
 require "template.php" ?>




