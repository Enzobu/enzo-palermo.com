<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="../style/cv/main.css">
    <title>Accueil - Enzo Palermo</title>
</head>

<body class="body">
    <header class="header" id="header">
        <?php include('../php/navbar.php'); ?>
    </header>

    <main class="main">
        <div class="bouton-cacher-responsive" onclick="changerLeft('0');"><img src="/image/menu.svg" alt=""></div>
        <div class="CV">
            <img src="../image/CV_Enzo_Palermo.png" alt="CV">
        </div>
        <a href="https://drive.google.com/uc?export=download&id=1kfCyAQum7GG0pWeF_RZ7IPvV_3AQoXBf">
            <div class="dnl">Télécharger le CV</div>
        </a>
    </main>
    
    <footer class="footer" id="footer">
        <?php include('../php/footer.php'); ?>
    </footer>
</body>

</html>

