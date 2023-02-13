<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="/style/source_icones/source_icones.css">
    <title>Accueil - Enzo Palermo</title>
</head>
<body class="body">
    <header class="header" id="header">
        <?php include('../php/navbar.php'); ?>
    </header>
    <main class="main">
        <div class="title">Icônes et leurs créteurs :</div>
        <div class="mention">
            <a href="https://www.flaticon.com/free-icons/open-menu" title="open menu icons"><img src="/image/menu.svg" alt="Open menu">Open menu icons created by Freepik - Flaticon</a>
            <a href="https://www.flaticon.com/free-icons/cross-mark" title="cross mark icons"><img src="/image/croix.svg" alt="Cross mark icons">Cross mark icons created by Andrean Prabowo - Flaticon</a>
            <a href="https://www.flaticon.com/free-icons/linkedin" title="linkedin icons"><img src="/image/linkedin_bleu.svg" alt="Linkedin icons">Linkedin icons created by Google - Flaticon</a>
            <a href="https://www.flaticon.com/free-icons/logout" title="logout icons"><img src="/image/exit.svg" alt="Logout icons">Logout icons created by Freepik - Flaticon</a>
            <a href="https://www.flaticon.com/free-icons/github" title="github icons"><img src="/image/github.svg" alt="Github icons">Github icons created by Freepik - Flaticon</a>
        </div>
    </main>

    <footer class="footer" id="footer">
        <?php include('../php/footer.php'); ?>
    </footer>
</body>
</html>