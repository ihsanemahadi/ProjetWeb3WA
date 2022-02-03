<?php 
require_once "public/utile/formatage.php"; 
require_once "models/produit.dao.php";
require_once "models/actualite.dao.php";
require_once "config/config.php";
require_once "models/admin.dao.php";

function getPageLogin(){
    $title = "Page de login du site";
    $description = "Page de login";

    if(Securite::verificationAccess()){
        
            header ("Location: admin");
        
    }
    $alert = "";
    if(isset($_POST['login']) && !empty($_POST['login']) &&
    isset($_POST['password']) && !empty($_POST['password'])){
        $login = Securite::secureHTML($_POST['login']);
        $password = Securite::secureHTML($_POST['password']);
        if(isConnexionValid($login,$password)){
            $_SESSION['acces'] = "admin";
            Securite::genereCookiePassword();
            header ("Location: admin");
        } else {
            $alert = "Mot de passe invalide";
        }
    }

    require_once "views/login.view.php";
}


function getPageAdmin(){
    if(isset($_POST['deconnexion']) && $_POST['deconnexion'] === "true"){
        session_destroy();
        header("Location: accueil");
    }

    if(Securite::verificationAccess()){
        Securite::genereCookiePassword();
        $title = "Page d'admin du site";
        $description = "Page d'admin";
        require_once "views/adminAccueil.view.php";
    } else {
        throw new Exception ("Vous n'avez pas le droit d'accéder à cette page");
    }
    
}

function getPageProduitAdmin($require ="", $alert="",$alertType="", $data=""){

    if(Securite::verificationAccess()){
        Securite::genereCookiePassword();
        $title = "Page de gestion des produits";
        $description = "Page de gestion des produits";
        $contentAdminAction="";
        $produits = getProduit();
        if($require !=="") require_once $require;
        require_once "views/adminProduit.view.php";
    } else {
        throw new Exception ("Vous n'avez pas le droit d'accéder à cette page");
    }

}

function getPageProduitAdminAjout(){
    $alert = "" ;
    $alertType=0;
    if(isset($_POST['nomBonbon']) && !empty($_POST['nomBonbon'])
    
    ){  $nomBonbon= Securite::secureHTML($_POST['nomBonbon']);
        $reference= Securite::secureHTML($_POST['reference']);
        $description = Securite::secureHTML($_POST['description']);
        $prix = Securite::secureHTML($_POST['prix']);
        $imageBonbon= Securite::secureHTML($_POST['imageBonbon']);
        $idHtml= Securite::secureHTML($_POST['idHtml']);
        try{

            $idBonbon = insertProduitIntoBD($nomBonbon,$reference,$description,$prix,$imageBonbon,$idHtml);
            if($idBonbon >0){
                $alert = "La création du Produit est effectuée";
                $alertType = ALERT_SUCCESS;
            } else {
               throw new Exception("L'insertion en BD n'a pas fonctionné");
            }
        } catch(Exception $e){
            $alert = "La création du Produit n'a pas fonctionné <br />". $e->getMessage();
            $alertType = ALERT_DANGER;
        }
}
    getPageProduitAdmin("views/adminProduitAjout.view.php",$alert,$alertType);
}

function getPageProduitAdminModif(){
    $alert = "";
    $alertType="";
    $data = [];
    if(isset($_POST['etape']) && (int)$_POST['etape']>=1){
        $idBonbon = Securite::secureHTML($_POST['produit']);
        $data['produit'] = getBonbonFromIdBonbonBD((int) $idBonbon);
    }
    if(isset($_POST['etape']) && (int)$_POST['etape']>=3){
        $idBonbon= $data['produit']['id_bonbon'];
        $nomBonbon= Securite::secureHTML($_POST['nomBonbon']);
        $reference= Securite::secureHTML($_POST['reference']);
        $description = Securite::secureHTML($_POST['description']);
        $prix = Securite::secureHTML($_POST['prix']);
        $imageBonbon= Securite::secureHTML($_POST['imageBonbon']);
        $idHtml= Securite::secureHTML($_POST['idHtml']);
        
        try{
            if(updateProduitIntoBD($idBonbon,$nomBonbon,$reference,$description,$prix,$imageBonbon,$idHtml)){
                
                $alert = "La modification du produit est effectuée";
                $alertType = ALERT_SUCCESS;
            } else {
               throw new Exception("La modification en BD n'a pas fonctionné");
            }
        } catch(Exception $e){
            $alert = "La modification du produitn'a pas fonctionnée <br />". $e->getMessage();
            $alertType = ALERT_DANGER;
        }
        $data['produit'] = getBonbonFromIdBonbonBD((int) $idBonbon);
        
    
    
    
    }
   
    getPageProduitAdmin("views/adminProduitModif.view.php",$alert,$alertType,$data);
}

function getPageProduitAdminSup(){
    $alert = "";
    $alertType="";

    if(isset($_GET['sup'])){
        try{
            if(deleteProduitFromBD(Securite::secureHTML($_GET['sup']))<1){
                throw new Exception ("la suppression n'a pas fonctionné en BD");
            }
            $alert = "La suppression du produit a fonctionné";
            $alertType = ALERT_SUCCESS;
        } catch(Exception $e){
            $alert = "La suppression du produit n'a pas fonctionné";
            $alertType = ALERT_DANGER;
        }
    }
    getPageProduitAdmin("",$alert,$alertType);
}



function getPageNewsAdmin($require ="", $alert="",$alertType="", $data=""){
    
    if(Securite::verificationAccess()){
        Securite::genereCookiePassword();
        $title = "Page de gestion des news";
        $description = "Page de gestion des news";

        $actualites = getActualitesFromBD();
        $contentAdminAction="";
        if($require !=="") require_once $require;
        require_once "views/adminNews.view.php";
    } else {
        throw new Exception("Vous n'avez pas le droit d'accéder à cette page");
    }
}

function getPageNewsAdminAjout(){

    $alert = "" ;
    $alertType=0;
    if(isset($_POST['titreActu']) && !empty($_POST['titreActu']) &&
    isset($_POST['contenuActu']) && !empty($_POST['contenuActu']) &&
    isset($_POST['imageActu']) && !empty($_POST['imageActu'])
    
    ){  $titreActu =Securite::secureHTML($_POST['titreActu']);
        $contenuActu =Securite::secureHTML($_POST['contenuActu']);
        $imageActu =Securite::secureHTML($_POST['imageActu']);
        $date = date("Y-m-d H:i:s",time());
        try{
            if(insertActualiteIntoBD($titreActu,$contenuActu,$date,$imageActu)){
                $alert = "La création de l'actualité est effectuée";
                $alertType = ALERT_SUCCESS;
            } else {
               throw new Exception("L'insertion en BD n'a pas fonctionné");
            }
        } catch(Exception $e){
            $alert = "La création de l'actualité n'a pas fonctionné <br />". $e->getMessage();
            $alertType = ALERT_DANGER;
        }
}
getPageNewsAdmin("views/adminNewsAjout.view.php",$alert,$alertType);
}


function getPageNewsAdminModif(){
    $alert = "";
    $alertType="";
    $data = [];

    if(isset($_POST['etape']) && (int)$_POST['etape']>=1){
        $idActualite = Securite::secureHTML($_POST['actualite']);
        $data['actualite'] = getActualiteFromBD((int) $idActualite);
    }
    if(isset($_POST['etape']) && (int)$_POST['etape']>=3){
        $titreActu = Securite::secureHTML($_POST['titreActu']);
        $contenuActu = Securite::secureHTML($_POST['contenuActu']);
        $imageActu = Securite::secureHTML($_POST['imageActu']);
        $idActualite = $data['actualite']['id_actualite'];
        
        try{
            if(updateActualiteIntoBD($idActualite,$titreActu,$contenuActu,$imageActu)){
                
                $alert = "La modification de l'actualité est effectuée";
                $alertType = ALERT_SUCCESS;
            } else {
               throw new Exception("La modification en BD n'a pas fonctionné");
            }
        } catch(Exception $e){
            $alert = "La modification de l'actualité n'a pas fonctionnée <br />". $e->getMessage();
            $alertType = ALERT_DANGER;
        }
        $data['actualite'] = getActualiteFromBD((int) $idActualite);
    
    }
   
    getPageNewsAdmin("views/adminNewsModif.view.php",$alert,$alertType,$data);

}

function getPageNewsAdminSup(){
    $alert = "";
    $alertType="";

    if(isset($_GET['sup'])){
        try{
            if(deleteActualiteFromBD(Securite::secureHTML($_GET['sup']))<1){
                throw new Exception ("la suppression n'a pas fonctionné en BD");
            }
            $alert = "La suppression de l'actualité a fonctionné";
            $alertType = ALERT_SUCCESS;
        } catch(Exception $e){
            $alert = "La suppression de l'actualité n'a pas fonctionné";
            $alertType = ALERT_DANGER;
        }
    }
    getPageNewsAdmin("",$alert,$alertType);
}


