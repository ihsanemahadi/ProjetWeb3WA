<?php 
require_once "public/utile/formatage.php"; 
require_once "models/produit.dao.php";
require_once "models/actualite.dao.php";
require_once "config/config.php";

function getPageProduits () {
    


    $title = "Page des Produits";
    $descritpion = "C'est la page des produits";
    $produits = getProduit();



    require_once "views/produit.view.php"; 
}

function getPageAccueil(){
    $title = "Page d'accueil";
    $descritpion = "C'est la page d'accueil";
    $produits = getProduit();
    require_once "views/accueil.view.php";
}

function getPageActus(){
    $title = "Page d'actualité";
    $descritpion = "C'est la page de l'actualité";
    $actualites = getActualitesFromBD();
    require_once "views/actus.view.php";

}


function getPageContact(){
    $title = "Page de Contact";
    $descritpion = "C'est la page de contact";
    require_once "views/contact.view.php";

    if(isset($_POST['prenom']) && !empty($_POST['prenom']) && 
    isset($_POST['nom']) && !empty($_POST['nom']) &&
    isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['numero']) && !empty($_POST['numero']) &&
    isset($_POST['message']) && !empty($_POST['message']) &&
    isset($_POST['captcha']) && !empty($_POST['captcha']) 

){ 
    $captcha = (int) $_POST['captcha'];
    if($captcha === 8){
        $prenom = htmlentities($_POST['prenom']);
        $nom = htmlentities($_POST['nom']);
        $email = htmlentities($_POST['email']);
        $numero = htmlentities($_POST['numero']);
        $message = htmlentities($_POST['message']);
        $destinataire = "ihsane_mahadi@hotmail.com";
        mail($destinataire, $numero. " - " . $nom, $prenom, "Mail : ". $email. " Message : " . $message);
        echo '<div class="alert alert-success" role="alert">';
            echo 'Message envoyé';
        echo '</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">';
        echo 'Erreur de Captcha, recommencer';
        echo '</div>';
    }


}
}




?>