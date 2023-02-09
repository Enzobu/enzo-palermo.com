<?php include('../php/link_db.php'); ?>
<?php include('../php/isLoged.php'); ?>

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
            <h1>Modifier une ligne</h1>
        </div>
            
        <?php
            $sql = "SELECT * FROM `tableau-recherche-stage` ORDER BY `id` ASC";
            $requete = $db->query($sql);
            $stage = $requete->fetchAll();
        ?>

    </div>
</body>
</html>