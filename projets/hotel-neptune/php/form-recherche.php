<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/acceuil.css">
    <title>Acceuil</title>
</head>
<body>
    <header>
    <div class="search-form">
                <!-- Formulaire de recherche -->
                <form method="post">
                    <div class='box'>
                    <div class="form">                

                        <div class="form-group">
                            <label for="debut-s">Début du séjour</label>
                            <input type="date" name="debut-s" id="debut-s" value="13/04/2020">

                            <label for="fin-s">Fin du séjour</label>
                            <input type="date" name="fin-s" id="fin-s" value="14/04/2020">
                        </div>

                        <div class="form-group">
                            <label for="adultes">Nombre d'adultes</label>
                            <select name="adultes" id="adultes">
                                <option selected="selected">0 Adulte</option>
                                <option>1 Adulte</option>
                                <option>2 Adultes</option>
                                <option>3 Adultes</option>
                                <option>4 Adultes</option>
                                <option>5 Adultes</option>
                            </select>

                            <label for="enfants">Nombre d'enfants</label>
                            <select name="enfants" id="enfants">
                                <option selected="selected">0 Enfant</option>
                                <option>1 Enfant</option>
                                <option>2 Enfants</option>
                                <option>3 Enfants</option>
                                <option>4 Enfants</option>
                                <option>5 Enfants</option>
                            </select>

                            <label for="prix">prix</label>
                            <select name="type" id="type">
                                <option selected="selected">pas chère</option>
                                <option>un peu chère mais ca va</option>
                                <option>vla chère</option>
                            </select>
                        </div>

                        <div class="button-submit">
                            <input type="submit" value="Lancer la recherche" name="recherche" id="recherche">
                        </div>
                    </div>
                    </div>
                </form>
            </div>
    </header>
    
</body>
</html>