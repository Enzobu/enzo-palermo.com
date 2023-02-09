function ajouter (){
    var element1 = document.getElementById("ligne-ajouter");
    var element2 = document.getElementById("double-ligne");
    element1.classList.toggle("ligne-ajouter");
    element2.classList.toggle("ligne-ajouter");
}

function modifier (id){
    var element1 = document.getElementById(id);
    element1.classList.toggle("ligne-modifier");
}

function effacer (id){
    var element1 = document.getElementById(id);
    element1.classList.toggle("ligne-modifier");
    if (confirm("Etes vous sur de vouloir supprimer la ligne "+id)) {
        document.location.href="supprimer.php?id="+id; 
      } else {
        document.location.href="/tableau-suivi-stage/index.php"; 
      }
}