<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('php/head.php'); ?>
    <link rel="stylesheet" href="/style/index/index.css">
    <title>Accueil - Enzo Palermo</title>
</head>
<body class="body">
    <header class="header" id="header">
        <?php include('php/navbar.php'); ?>
    </header>
    <main class="main">
        <div class="bouton-cacher-responsive" onclick="changerLeft('0');"><img src="/image/menu.svg" alt=""></div>
        <div class="global-container">
            <div class="portfolio">
                <div class="image-portfolio">
                    <div class="cadre-image"></div>
                    <img src="/image/enzo_palermo.jpg" alt="">
                </div>
                <div class="txt-presentation">
                    <h1>
                        Qui suis-je ?
                    </h1>
                    <p>
                        Je suis étudiant en première année à L'EPSI Montpellier. Je suis très 
                        intéresser par l'univers qui s'offre à moi et, plus particulièrement, 
                        par le développement avec un penchant pour le web.
                    </p>
                    <div class="action">
                        <a href="/cv"><div class="content">Voir mon CV</div></a>
                        <a href="/cv/CV_Enzo_Palermo.pdf" download="CV_enzo_palermo"><div class="content">Télécherger mon CV</div></a>
                        <a href="mailto:enzo.palermo@epsi.fr"><div class="content">M'envoyer un mail</div></a>
                    </div>
                </div>
                <div class="presentation">
                    <div class="global-competences">
                        <h2 class="title">
                            Mes compétences
                        </h2>
                        <div class="competences">
                            <div class="competence">
                                <img src="/image/html.svg" alt="Logo HTML" class="competence-logo">
                                <div class="competence-description">
                                    HTML 5 une version améliorée du langage de balisage HTML, 
                                    utilisée pour développer des pages web modernes et interactives.
                                </div>
                            </div>
                            <div class="competence">
                                <img src="/image/css-3.svg" alt="Logo CSS" class="competence-logo">
                                <div class="competence-description">
                                    CSS 3 est une feuille de style en cascade utilisée pour la mise en 
                                    forme et la présentation de contenu HTML sur le Web.
                                </div>
                            </div>
                            <div class="competence">
                                <img src="/image/sass.svg" alt="Logo SASS" class="competence-logo">
                                <div class="competence-description">
                                    Sass est le langage d'extension CSS de qualité professionnelle 
                                    le plus mature, le plus stable et le plus puissant.
                                </div>
                            </div>
                            <div class="competence">
                                <img src="/image/js.svg" alt="Logo JS" class="competence-logo">
                                <div class="competence-description">
                                    JavaScript (JS) est un langage de programmation léger, interprété 
                                    avec des fonctions de première classe.
                                </div>
                            </div>
                            <div class="competence">
                                <img src="/image/php.svg" alt="Logo PHP" class="competence-logo">
                                <div class="competence-description">
                                    PHP est un langage de script côté serveur intégré à HTML. Il est 
                                    utilisé pour gérer le contenu dynamique, les bases de données, le suivi 
                                    des sessions, voire créer des sites de e-commerce entiers.
                                </div>
                            </div>
                            <div class="competence">
                                <img src="/image/mysql.svg" alt="Logo MySQL" class="competence-logo">
                                <div class="competence-description">
                                    MySQL est un système de gestion de base de données relationnelle 
                                    développé par Oracle qui est basé sur le langage de requête structuré (SQL)
                                </div>
                            </div>
                            <div class="competence">
                                <div class="python">
                                    <!-- <img src="/image/python.svg" alt="Logo Python" class="competence-logo img-python">
                                    <img src="/image/pythonReverse.svg" alt="Logo Python" class="competence-logo img-python-reverse"> -->
                                    <img src="/image/python.png" alt="Logo Python" class="competence-logo">
                                </div>
                                <div class="competence-description">
                                    Python est un langage de programmation informatique souvent utilisé pour 
                                    créer des sites Web et des logiciels, automatiser des tâches et effectuer 
                                    des analyses de données.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer" id="footer">
        <?php include('php/footer.php'); ?>
    </footer>
</body>
</html>