<?php include('../php/link_db.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="/style/tableau_suivi_stage/tableau_suivi_stage.css">
    <title>Accueil - Enzo Palermo</title>
</head>
<body>
    <script src="/js\tableau_suivi_stage.js"></script>
    <header class="header">
        <?php include('../php/navbar.php'); ?>
    </header>

    <div class="global-container">
        <div class="title">
            <h1>Tableau de suivi de la recherche de stage</h1>
        </div>
        <div class="bouton">
            <button class="bouton-action" onclick="ajouter();">Ajouter une ligne</button>
        </div>
        <div class="global-tableau">
            
            <?php
                $sql = "SELECT * FROM `tableau-recherche-stage` ORDER BY `id` ASC";
                $requete = $db->query($sql);
                $stage = $requete->fetchAll();
            ?>


            <table class="tableau">
                <tr class="ligne-ajouter" id="ligne-ajouter">
                    <form action="/tableau-suivi-stage/inserer.php" method="GET">
                        <td> <input type="date" name="date_candid" required="required" placeholder="Date de candidature"> </td>
                        <td> <input type="text" name="entreprise" required="required" placeholder="Entreprise"> </td>
                        <td> <input type="text" name="activite_secteur" required="required" placeholder="Activité / Secteur"> </td>
                        <td> <input type="text" name="ville" required="required" placeholder="Ville"> </td>
                        <td> <input type="text" name="poste" required="required" placeholder="Poste à pourvoir / Rechercher"> </td>
                        <td> <input type="text" name="contact_nom" required="required" placeholder="Contact Nom"> </td>
                        <td> <input type="text" name="contact_tel" required="required" placeholder="Contact Tel"> </td>
                        <td> <input type="mail" name="contact_mail" required="required" placeholder="Contact Mail"> </td>
                        <td> <input type="date" name="date_relance" required="required" placeholder="Date de relance prévue"> </td>
                        <td> <input type="text" name="etat" required="required" placeholder="État"> </td>
                        <td> <input type="text" name="commentaire" required="required" placeholder="Commentaire"> </td>
                        <td> <input type="submit" value="Ajouter"> </td>
                    </form>
                </tr>
                <tr class="ligne-ajouter" id="double-ligne">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Date candidature</th>
                    <th>Entreprise</td>
                    <th>Activité / Secteur</td>
                    <th>Ville</td>
                    <th>Poste pourvoir/rechercher</td>
                    <th>contact Nom</td>
                    <th>Contact Tel</td>
                    <th>Contact Mail</td>
                    <th>Date relance prévue</td>
                    <th>État</td>
                    <th>Commentaire</td>
                    <th>Action</td>
                </tr>
                <?php foreach ($stage as $stages){ ?>
                <tr>
                    <td> <?php echo $stages['date_candid']; ?> </td>
                    <td> <?php echo $stages['entreprise']; ?> </td>
                    <td> <?php echo $stages['activite_secteur']; ?> </td>
                    <td> <?php echo $stages['ville']; ?> </td>
                    <td> <?php echo $stages['poste']; ?> </td>
                    <td> <?php echo $stages['contact_nom']; ?> </td>
                    <td> <?php echo $stages['contact_tel']; ?> </td>
                    <td> <?php echo $stages['contact_mail']; ?> </td>
                    <td> <?php echo $stages['date_relance']; ?> </td>
                    <td> <?php echo $stages['etat']; ?> </td>
                    <td> <?php echo $stages['commentaire']; ?> </td>
                    <td class="bouton-action-ligne">
                        <!-- <a href="/tableau-suivi-stage/supprimer.php?id=<?php echo $stages['id']; ?>"><img src="/image/effacer_rouge.svg" alt="Icone effacer" class="image-bouton-action"></a> -->
                        <img src="/image/effacer_rouge.svg" alt="Icone effacer" class="image-bouton-action" onclick="effacer(<?php echo $stages['id']; ?>);">
                        <img src="/image/editer.svg" alt="Icone éditer" class="image-bouton-action" onclick="modifier(<?php echo $stages['id']; ?>);">
                    </td>
                </tr>
                <tr class="ligne-modifier" id="<?php echo $stages['id']; ?>">

                    <form action="/tableau-suivi-stage/modifier.php" method="GET">
                        <input type="hidden" name="id" value="<?php echo $stages['id']; ?>">
                        <td> <input type="date" name="date_candid" required="required" value="<?php echo $stages['date_candid']; ?> "> </td>
                        <td> <input type="text" name="entreprise" required="required" value="<?php echo $stages['entreprise']; ?> "> </td>
                        <td> <input type="text" name="activite_secteur" required="required" value="<?php echo $stages['activite_secteur']; ?> "> </td>
                        <td> <input type="text" name="ville" required="required" value="<?php echo $stages['ville']; ?> "> </td>
                        <td> <input type="text" name="poste" required="required" value="<?php echo $stages['poste']; ?> "> </td>
                        <td> <input type="text" name="contact_nom" required="required" value="<?php echo $stages['contact_nom']; ?> "> </td>
                        <td> <input type="text" name="contact_tel" required="required" value="<?php echo $stages['contact_tel']; ?> "> </td>
                        <td> <input type="mail" name="contact_mail" required="required" value="<?php echo $stages['contact_mail']; ?> "> </td>
                        <td> <input type="date" name="date_relance" required="required" value="<?php echo $stages['date_relance']; ?> "> </td>
                        <td> <input type="text" name="etat" required="required" value="<?php echo $stages['etat']; ?> "> </td>
                        <td> <input type="text" name="commentaire" required="required" value="<?php echo $stages['commentaire']; ?> "> </td>
                        <td> <input type="submit" value="Modifier"> </td>
                    </form>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>