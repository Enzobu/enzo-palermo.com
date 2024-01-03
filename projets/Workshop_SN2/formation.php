<?php
session_start();

if(empty($_SESSION)) {
    // Vérification si la clé 'isAdmin' existe dans la variable de session
    header("Refresh: 0;url=/projets/Workshop_SN2/login.php?error=2");
} else {
    if($_SESSION['isFormer'] == 0) {
        header("Refresh: 0;url=/projets/Workshop_SN2/");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/projets/Workshop_SN2/style/page-formation.css">
<head>
    <?php include("php/head.php"); ?>
    <title>Workshop Sn2</title>
</head>
<body>
    <header class="header">
        <?php include("php/header.php"); ?>
    </header>
    
</div>
    <main class="main">
        <div class="global-element">
            <div class="navbar">
                <div class="first-item">
                    <p>Formations</p>
                </div>
                <div class="second-item">
                    <p>Statistiques</p>
                </div>
            <div class="third-item">
                <p>Infos</p>
            </div>
            <div class="fourth-item">
                <p>Sécurité</p>
            </div>
        </div>
        <div class="container">
            <div class="global-image-formation">
                <img src="/projets/Workshop_SN2/images/first-video" alt="photo de la formation" class="image-formation">
            </div>
            <div class="global-image-formation">
                <img src="/projets/Workshop_SN2/images/second-video" alt="photo de la formation" class="image-formation">
            </div>
            <div class="global-image-formation">
                <img src="/projets/Workshop_SN2/images/third-video" alt="photo de la formation" class="image-formation">
            </div>
            <div class="upload">
                <form action="" class="form-loader">
                    <label for="file">Ajouter une nouvelle formation :</label>
                    <input type="file" name="file" id="file" required>
                    <input type="submit" value="Ajouter !">
                </form>
            </div>
        </div>
    </main>

    <footer class="footer">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>