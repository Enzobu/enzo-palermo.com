<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/part/head.php'); ?>
    <link rel="stylesheet" href="css/index/index_main.css">
    <title>Hi-mix - Où l'innovation se marie avec restauration</title>
</head>
<body id="body">
    <header>
        <div class="header">
            <?php  include("php/part/header.php"); ?>
            <div class="title">
                <h1><strong>HI-MIX</strong></h1>
                <h2>Où L'INNOVATION SE MARIE AVEC RESTAURATION</h2>
            </div>
        </div>
    </header>

    <div class="bg-body-1" id="menus">
        <div class="global-menu-titre"> <!-- J'ai enlever les 'e' au nom de la classe espece d'abruti -->
            <div class="titre-global-menu" id="titre">
                <h2>Nos menus</h2>
                <h3>Mangez innovant, mangez sainement et à bas prix grâce à Hi-mix !</h3>
            </div>

            <div class="global-menu" id="menu">
                <div class="menu first-menu">
                    <div class="titre-menu">
                        <h4>Menu étudiant</h4>
                        <h5>Pour un petit budget !</h5>
                    </div>
                    <div class="body-menu"></div>
                    <div class="footer-menu">
                        <div class="prix">4.90 €</div>
                        <a href="menu-etudiant"><div class="buton-choisir">Choisir</div></a>
                    </div>
                </div>
                
                <div class="menu second-menu">
                    <div class="titre-menu">
                        <h4>Menu simple</h4>
                        <h5>Pour quelqu'un de simple !</h5>
                    </div>
                    <div class="body-menu"></div>
                    <div class="footer-menu">
                        <div class="prix">7.90 €</div>
                        <a href="menu-simple"><div class="buton-choisir">Choisir</div></a>
                    </div>
                </div>
                
                <div class="menu third-menu">
                    <div class="titre-menu">
                        <h4>Menu maxi</h4>
                        <h5>Pour une maxi faim !</h5>
                    </div>
                    <div class="body-menu"></div>
                    <div class="footer-menu">
                        <div class="prix">10.90 €</div>
                        <a href="menu-maxi"><div class="buton-choisir"><p>Choisir</p></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-body-2">
        <!-- Bandeau info livraison/payment -->
        <div class="info-livraison-paiement">
            <div class="item-info-livraison-paiement"><img src="img/livraison-rapide.svg" alt="livraison rapide" class="img-ifo-livr_paymt">Livraison en moins de 24H</div>
            <div class="item-info-livraison-paiement"><img src="img/meilleur-prix.svg" alt="meilleur prix" class="img-ifo-livr_paymt">Prix juste et dégressif (entre 3 et 5€ par repas)</div>
            <div class="item-info-livraison-paiement"><img src="img/livraison-de-colis.svg" alt="livraison gratuite" class="img-ifo-livr_paymt">Livraison offerte dès 60€</div>
            <div class="item-info-livraison-paiement"><img src="img/paiement-par-carte-de-credit.svg" alt="paiement en 3x" class="img-ifo-livr_paymt">Paiement sécuriser. Disponible en 3 ou 4x sans frais dès 69€</div>
        </div>
    </div>
    
    <div class="bg-body-3" id="pourquoi-hi-mix">
        <div class="img-txt-description">
            <div class="img-description">
                <img src="img/shaker-ctrl.jpg" alt="image shaker">
            </div>

            <div class="txt-description">
                <h3>
                    Pourquoi Hi-Mix ?
                </h3>
                <p>
                    <b>➔ Gardez le controle !</b>
                    <br><br>
                    <b>➔ Résultats faciles.</b> Les repas So Shape font le travail pour vous.
                    <br><br>
                    <b>➔ Résultats fiables.</b> Le minimum de calories pour bien s’affiner.
                    <br><br>
                    <b>➔ Résultats durables.</b> Sans yoyo grâce à tous les nutriments essentiels recommandés.
                    <br><br>
                    <b>➔ Résultats prouvés.</b> Pas d’ingrédient miracle. Juste une nutrition optimale réglementaire.
                    <br><br>
                    <b>➔ Résultats voulus.</b> On garde ses muscles ! Jusqu’à 25 g de protéines par repas.
                </p>
            </div>
        </div>
    </div>
    
    <div class="bg-body-4" onclick="popUpMail ();">
        <p class="title-mail">Restons en contact !</p>
        <p class="text-mail">Inscrivez-vous pour être informé des sorties produit et promos exclusives, des infos, des recettes, et des conseils pour toujours être au top.</p>
        <form action="" method="GET">
            <input type="mail" name="mail" placeholder="Votre e-mail" required>
            <input type="submit" value="HOP !" id="button" onclick="popUpMail ();">
        </form>
        <div class="pop-up-mail" id="pop-up-mail">azertyuio</div>
    </div>

    <div class="scrollUp">
        <a href="#top"><img src="img/up-arrow.svg"/></a>
    </div>

    <footer>
        <?php include("php/part/footer.php"); ?>
    </footer>
    
</body>
</html>    


<!-- rgba(255, 239, 231, 1) -->