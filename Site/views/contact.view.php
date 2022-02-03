<?php 
ob_start();
?>
<!--DEBUT SECTION CONTACT-->
    <section id="contact">
    
        <h1> Contactez-Nous !</h1>
        <form class="formulaire-contact" action="" method="post">

            <input type="text" name="prenom" placeholder="Prénom" required>
            <input type="text" name="nom" placeholder="Nom" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="numero" placeholder="Numéro de téléphone" required>
            <textarea name="message" rows="10" cols="30" placeholder="Votre message" required></textarea>
            <label for="captcha" >Combien font 3+5: </label>
            <input type="number" name="captcha" required>
            <button id="envoyer" type="submit" name="button"><i class="fas fa-paper-plane"></i> Envoyer</button>

        </form>
    </section>
<!--FIN SECTION CONTACT-->


<?php $content = ob_get_clean();
 require "template.php" ?>