<?php
require_once "pdo.php"; 

function getActualitesFromBD(){
        $bdd = connexionPDO();
        $req = '
        SELECT * 
        FROM actualite
        ';
        $stmt = $bdd->prepare($req);
        $stmt->execute();
        $actualites = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $actualites;
    }
function insertActualiteIntoBD($titreActu,$contenuActu,$date,$imageActu){
    $bdd = connexionPDO();
    $req = '
    INSERT INTO `actualite`(`titre_actualite`, `contenu_actualite`, `date_publication_actualite`, `image`)
    VALUES (:titre, :contenu, :date, :image)
    ';
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":titre",$titreActu,PDO::PARAM_STR);
    $stmt->bindValue(":contenu",$contenuActu,PDO::PARAM_STR);
    $stmt->bindValue(":date",$date,PDO::PARAM_STR);
    $stmt->bindValue(":image",$imageActu,PDO::PARAM_STR);
    $resultat = $stmt->execute();
    $stmt->closeCursor();
    if($resultat >0) return true;
    else return false;
} 



function getActualiteFromBD($idActualite){
    $bdd = connexionPDO();
    $req = '
    SELECT id_actualite, titre_actualite, contenu_actualite, image 
    FROM actualite
    where id_actualite = :idActualite
    ';
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":idActualite",$idActualite,PDO::PARAM_INT);
    $stmt->execute();
    $actualite = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $actualite;
}

function updateActualiteIntoBD($idActualite,$titreActu,$contenuActu,$imageActu){
    $bdd = connexionPDO();
    $req = '
    UPDATE `actualite`
    SET `titre_actualite` = :titre, `contenu_actualite`= :contenu, `image` = :image
    WHERE id_actualite = :idActualite
    ';
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":titre",$titreActu,PDO::PARAM_STR);
    $stmt->bindValue(":contenu",$contenuActu,PDO::PARAM_STR);
    $stmt->bindValue(":image",$imageActu,PDO::PARAM_STR);
    $stmt->bindValue(":idActualite",$idActualite,PDO::PARAM_INT);
    $resultat = $stmt->execute();
    $stmt->closeCursor();
    if($resultat > 0) return true;
    return false;
}

    
?>