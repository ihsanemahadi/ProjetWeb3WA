var btnSup = document.querySelector("#btnSup");

btnSup.addEventListener("click",function(){
    event.preventDefault();
    var idBonbon = document.querySelector("#idBonbon").value;
    var nomBonbon = document.querySelector("#nomBonbon").value;
    if(confirm("Voulez-vous supprimer le produit "+idBonbon+" - "+ nomBonbon+ " ?")){
        document.location.href = "genererProduitAdminSup&sup="+idBonbon;
    }
});