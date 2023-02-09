<div class="barre-navigation">
    <form action="ajouter.php" method="post">
        <p>Nom <input type="text" name="Nom" /></p>
        <p>Prenom <input type="text" name="Prenom" /></p>
        <p>Âge <input type="number" name="Age" /></p>
        <p>Téléphone <input type="number" name="Tel" /></p>
        <p><input type="submit" value="Envoyer"></p>
    </form>
</div>




function afficherMasquer() {
    if(document.getElementById('insert').style.display == "none")
        document.getElementById('insert').style.display = "block";
    else
        document.getElementById('insert').style.display = "none";
}



if (1 === 1) {
    document.getElementById('insert').style.display = "none";
    document.getElementById('delete').style.display = "none";
    document.getElementById('update').style.display = "none";
    
}

function afficherMasquer(id) {
    const elem = document.getElementById(id);
    const but = document.getElementsByClassName('button');
    
    if (elem.style.display === 'none') {
        elem.style.display = 'block';
        but.style.color = '#fff';
        but.style.background = '#198754';

    } else {
        elem.style.display = 'none';
        but.style.color = '#198754';
        but.style.background = '#fff';
    }
}


function afficherMasquer(id) {
    const elem = document.getElementById(id);
    const but = document.getElementsByClassName('button');
    elem.style.display = 'none';
}

