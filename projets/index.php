<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <title>Projets - Enzo Palermo</title>
</head>
<body class="body">
    <header class="header" id="header">
        <?php include('../php/navbar.php'); ?>
    </header>

    <main class="main">
        <div class="bouton-cacher-responsive" onclick="changerLeft('0');"><img src="/image/menu.svg" alt=""></div>
        <h1>Mes projets</h1>
        <br>
        <h3>REMARQUE : TOUS les sites suivants sont des projets fait uniquement
            dans un esprit d'apprentissage et ne sont en aucun cas des sites 
            réels.
        </h3>
        <br><br>
        <h2><a href="/projets/hi-mix" target="blank" style="a { color: #000; }">Hi-mix</a></h2>
        <h2><a href="/projets/hotel-neptune" target="blank" style="a { color: #000; }">Hotel Neptune</a></h2>
        <h2><a href="/projets/bts-lycee-jean-rostand" target="blank" style="a { color: #000; }">TOP-SECRET</a></h2>
    </main>

    <footer class="footer" id="footer">
        <?php include('../php/footer.php'); ?>
    </footer>
</body>
</html>