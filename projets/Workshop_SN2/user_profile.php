<?php
session_start();

if(empty($_SESSION)) {
    // Vérification si la clé 'isAdmin' existe dans la variable de session
    header("Refresh: 0;url=/projets/Workshop_SN2/login.php?error=2");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php"); ?>
    <title>Workshop Sn2</title>
    <link rel="stylesheet" href="/projets/Workshop_SN2/style/user_profile.css">
</head>
<body>
    <header class="header">
        <?php include("php/header.php"); ?>
    </header>
    
    <main class="main">
        <div class="block-1">
            <h2>Initiation au code</h2>
        </div>
        <div class="content">
            <div class="left-menu">
                <li>Les bases de l'aglorithmie</li>
                <li>Introduction à la programmation en python</li>
                <li>Les bases de la programmation Java</li>
                <li>Les Fondamentaux du Codage HTML et CSS</li>
            </div>
            <div class="right-content">
                <a href="/projets/Workshop_SN2/cours"><img src="/projets/Workshop_SN2/images/capt1" alt=""></a>
                <a href=""><img src="/projets/Workshop_SN2/images/capt2" alt=""></a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>