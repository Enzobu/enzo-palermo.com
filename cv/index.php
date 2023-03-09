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
            <iframe src="CV_Enzo_Palermo_DEV.pdf"> </iframe>
        </div>
    </main>
    
    <footer class="footer" id="footer">
        <?php include('../php/footer.php'); ?>
    </footer>
</body>

</html>

