<?php
require_once "pdo.php"; 
function getProduit(){

    $bdd = connexionPDO();
    $req = '
    SELECT * 
    FROM produit
    ';
    $stmt = $bdd->prepare($req);
    $stmt->execute();
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $produits;
}

function getBonbonFromIdBonbonBD($idBonbon){
    $bdd = connexionPDO();
    $req = '
    SELECT * 
    FROM produit
    where id_bonbon = :idBonbon';
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":idBonbon",$idBonbon,PDO::PARAM_INT);
    $stmt->execute();
    $produit = $stmt->fetch(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $produit;
}



function insertProduitIntoBD($nomBonbon,$reference,$description,$prix,$imageBonbon,$idHtml){
    $bdd = connexionPDO();
    $req = '
    INSERT INTO `produit`( `nom_bonbon`, `reference`,`description`, `prix`, `image`,`id_html`)
    VALUES (:nomBonbon, :reference, :description, :prix, :imageBonbon, :idHtml)
    ';
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":nomBonbon",$nomBonbon,PDO::PARAM_STR);
    $stmt->bindValue(":reference",$reference,PDO::PARAM_STR);
    $stmt->bindValue(":description",$description,PDO::PARAM_STR);
    $stmt->bindValue(":prix",$prix,PDO::PARAM_STR);
    $stmt->bindValue(":imageBonbon",$imageBonbon,PDO::PARAM_STR);
    $stmt->bindValue(":idHtml",$idHtml,PDO::PARAM_STR);
    $resultat = $stmt->execute();
    $resultat = $bdd->lastInsertId();
    $stmt->closeCursor();
    return $resultat;
} 


function updateProduitIntoBD($idBonbon,$nomBonbon,$reference,$description,$prix,$imageBonbon,$idHtml){
    $bdd = connexionPDO();
    $req = '
    UPDATE `produit`
    SET nom_bonbon = :nomBonbon, reference = :reference, 
    description = :description, prix = :prix, image = :imageBonbon, id_html = :idHtml
    WHERE id_bonbon = :idBonbon
    ';
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":idBonbon",$idBonbon,PDO::PARAM_INT);
    $stmt->bindValue(":nomBonbon",$nomBonbon,PDO::PARAM_STR);
    $stmt->bindValue(":reference",$reference,PDO::PARAM_STR);
    $stmt->bindValue(":description",$description,PDO::PARAM_STR);
    $stmt->bindValue(":prix",$prix,PDO::PARAM_STR);
    $stmt->bindValue(":imageBonbon",$imageBonbon,PDO::PARAM_STR);
    $stmt->bindValue(":idHtml",$idHtml,PDO::PARAM_STR);
    $resultat = $stmt->execute();
    $stmt->closeCursor();
    if($resultat > 0) return true;
    return false;
}


function deleteProduitFromBD($idBonbon){
    $bdd = connexionPDO();
    $req = '
    DELETE FROM `produit` WHERE id_bonbon= :idBonbon
    ';
    $stmt = $bdd->prepare($req);
    $stmt->bindValue(":idBonbon",$idBonbon,PDO::PARAM_INT);
    $resultat = $stmt->execute();
    $stmt->closeCursor();
    if($resultat > 0) return true;
    return false;
}




?>