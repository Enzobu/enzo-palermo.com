<?php include('../php/link_db.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="/style/tableau_suivi_stage/tableau_suivi_stage.css">
    <title>Accueil - Enzo Palermo</title>
</head>
<body>
    <header class="header">
        <?php include('../php/navbar.php'); ?>
    </header>

    <div class="global-container">
        <div class="title">
            <h1>Tableau de suivi de la recherche de stage</h1>
        </div>
        <div class="tableau">
            
            <?php
                $sql = "SELECT * FROM `tableau-recherche-stage` ORDER BY `id` ASC";
                $requete = $db->query($sql);
                $stage = $requete->fetchAll();
            ?>

            <table>
                <tr>
                    <th>Date candidature</th>
                    <th>Entreprise</td>
                    <th>Activité / Secteur</td>
                    <th>Ville</td>
                    <th>Poste pourvoir/rechercher</td>
                    <th>contact Nom</td>
                    <th>Contact tel</td>
                    <th>Contact mail</td>
                    <th>Date relance prévue</td>
                    <th>État</td>
                    <th>Commentaire</td>
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
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>

    <a href="/tableau-suivi-stage/modifier.php">z</a>
</body>
</html>