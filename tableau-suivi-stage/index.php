<?php include('../php/link_db.php'); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="/style/tableau_suivi_stage/tableau_suivi_stage.css">
    <title>Accueil - Enzo Palermo</title>
</head>
    <body class="body">
        <script src="/js/tableau_suivi_stage.js"></script>
        <header class="header" id="header">
            <?php include('../php/navbar.php'); ?>
        </header>

        <main class="main">
            <div class="bouton-cacher-responsive" onclick="changerLeft('0');"><img src="/image/menu.svg" alt=""></div>
            <div class="global-container">
                <div class="title">
                    <h1>Tableau de suivi de la recherche de stage</h1>
                </div>
                <div class="bouton">
                    <button class="bouton-action" onclick="ajouter();">Ajouter une ligne</button>
                </div>
                <div class="global-tableau">

                    <table class="tableau">
                        <tr class="ligne-ajouter" id="ligne-ajouter">
                            <form action="/tableau-suivi-stage/inserer.php" method="GET">
                                <td> <input type="date" name="date_candid" placeholder="Date de candidature"> </td>
                                <td> <input type="text" name="entreprise" placeholder="Entreprise"> </td>
                                <td> <input type="text" name="activite_secteur" placeholder="Activité / Secteur"> </td>
                                <td> <input type="text" name="ville" placeholder="Ville"> </td>
                                <td> <input type="text" name="poste" placeholder="Poste à pourvoir / Rechercher"> </td>
                                <td> <input type="text" name="contact_nom" placeholder="Contact Nom"> </td>
                                <td> <input type="text" name="contact_tel" placeholder="Contact Tel"> </td>
                                <td> <input type="mail" name="contact_mail" placeholder="Contact Mail"> </td>
                                <td> <input type="date" name="date_relance" placeholder="Date de relance prévue"> </td>
                                <td> <input type="text" name="etat" placeholder="État"> </td>
                                <td> <input type="text" name="commentaire" placeholder="Commentaire"> </td>
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
                            <th>Contact Nom</td>
                            <th>Contact Tel</td>
                            <th>Contact Mail</td>
                            <th>Date relance prévue</td>
                            <th>État</td>
                            <th>Commentaire</td>
                            <th>Action</td>
                        </tr>
                        <?php
                            $sql = "SELECT * FROM `tableau_recherche_stage` ORDER BY `id` ASC";
                            $requete = $db->query($sql);
                            $stage = $requete->fetchAll();
                            foreach ($stage as $stages){
                        ?>
                        <tr class="ligne-modifier" id="<?php echo $stages['id']; ?>">

                            <form action="/tableau-suivi-stage/modifier.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $stages['id']; ?>">
                                <td> <input type="date" name="date_candid" value="<?php echo $stages['date_candid']; ?> "> </td>
                                <td> <input type="text" name="entreprise" value="<?php echo $stages['entreprise']; ?> "> </td>
                                <td> <input type="text" name="activite_secteur" value="<?php echo $stages['activite_secteur']; ?> "> </td>
                                <td> <input type="text" name="ville" value="<?php echo $stages['ville']; ?> "> </td>
                                <td> <input type="text" name="poste" value="<?php echo $stages['poste']; ?> "> </td>
                                <td> <input type="text" name="contact_nom" value="<?php echo $stages['contact_nom']; ?> "> </td>
                                <td> <input type="text" name="contact_tel" value="<?php echo $stages['contact_tel']; ?> "> </td>
                                <td> <input type="mail" name="contact_mail" value="<?php echo $stages['contact_mail']; ?> "> </td>
                                <td> <input type="date" name="date_relance" value="<?php echo $stages['date_relance']; ?> "> </td>
                                <td> <input type="text" name="etat" value="<?php echo $stages['etat']; ?> "> </td>
                                <td> <input type="text" name="commentaire" value="<?php echo $stages['commentaire']; ?> "> </td>
                                <td> <input type="submit" value="Modifier"> </td>
                            </form>
                        </tr>
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
                        <?php } ?>
                    </table>
                </div>
            </div>
        </main>
        <footer class="footer" id="footer">
            <?php include('../php/footer.php'); ?>
        </footer>
    </body>
</html>