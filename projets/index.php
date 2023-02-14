<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="/style/projets/projets.css">
    <title>Projets - Enzo Palermo</title>
</head>
<body class="body">
    <header class="header" id="header">
        <?php include('../php/navbar.php'); ?>
    </header>

    <main class="main">
        <div class="bouton-cacher-responsive" onclick="changerLeft('0');"><img src="/image/menu.svg" alt=""></div>
        <div class="global-container">
            <div class="title">
                <h1>Mes projets *</h1>
            </div>

            <div class="projets">
                <div class="projet">
                    <div class="projet-title">Hotel Neptune</div>
                    <div class="global-projet-description">
                        <img src="/image/hotel-neptune.png" alt="" class="image-projet">
                        <div class="projet-description">
                            <div class="description">
                                L'hotel Neptume est un projet visant à réaliser le site de l'hotel Neptune.
                                Il à été réaliser durant le premier projet de l'année.
                            </div>
                            <div class="bouton-action">
                                <a href="/projets/hotel-neptune" target="blank"><div class="bouton">Ouvrir</div></a>
                                <a href="https://github.com/Enzobu/hotel-neptune" target="blank"><div class="bouton">Voir dans <img src="/image/github.svg" alt="Logo GitHub"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projet">
                    <div class="projet-title">Hi-Mix</div>
                    <div class="global-projet-description">
                        <img src="/image/hi-mix.png" alt="" class="image-projet">
                        <div class="projet-description">
                            <div class="description">
                                Hi-mix est un projet visant à réaliser le site de la marque : 
                                un site de vente d'alimentation sportive. 
                                Il à été développer durant un cours et un porjet.
                            </div>
                            <div class="bouton-action">
                                <a href="/projets/hi-mix" target="blank"><div class="bouton">Ouvrir</div></a>
                                <a href="https://github.com/Enzobu/Hi-mix" target="blank"><div class="bouton">Voir dans <img src="/image/github.svg" alt="Logo GitHub"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projet">
                    <div class="projet-title">Mon site</div>
                    <div class="global-projet-description">
                        <img src="/image/enzo-palermo.com.png" alt="" class="image-projet">
                        <div class="projet-description">
                            <div class="description">
                                Je crée mon site pour mettre en avant mon portfolio, mon CV 
                                ainsi que les projets réalisés
                            </div>
                            <div class="bouton-action">
                                <a href="/" target="blank"><div class="bouton">Ouvrir</div></a>
                                <a href="https://github.com/Enzobu/enzo-palermo.com" target="blank"><div class="bouton">Voir dans <img src="/image/github.svg" alt="Logo GitHub"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projet">
                    <div class="projet-title">TOP SECRET</div>
                    <div class="global-projet-description">
                        <img src="/image/top_secret.jpg" alt="" class="image-projet">
                        <div class="projet-description">
                            <div class="description">
                                PROJECT TOP SECRET.
                            </div>
                            <div class="bouton-action">
                                <a href="/projets/bts-lycee-jean-rostand" target="blank"><div class="bouton">Ouvrir</div></a>
                                <a href="/projets/bts-lycee-jean-rostand/github" target="blank"><div class="bouton">Voir dans <img src="/image/github.svg" alt="Logo GitHub"></div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="remarque">
                <b>* : REMARQUE :</b> TOUS les sites suivants sont des projets fait uniquement
                dans un esprit d'apprentissage et ne sont en aucun cas des sites 
                réels.
            </div>
        </div>
    </main>

    <footer class="footer" id="footer">
        <?php include('../php/footer.php'); ?>
    </footer>
</body>
</html>