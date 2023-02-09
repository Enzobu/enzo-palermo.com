<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php"); ?>
    <link rel="stylesheet" href="css/accueil.css">
</head>
<body>
    <?php include("php/header.php"); ?>
    <div class='bordermr'></div>

    <div class='contmomaccueil'>
        <div class='menuroulant'>


            <button class="slide-arrow" id="slide-arrow-prev"><p class='prev'>&#8249;</p></button>
            <button class="slide-arrow" id="slide-arrow-next"><p class='next'>&#8250;</p></button>


            <ul class="slides-container" id="slides-container">
                <li class="slide"><img src="img/f00.png" alt="f00" class='fcaroussel'></li>
                <li class="slide"><img src="img/f0.jpg" alt="f0" class='fcaroussel'></li>
                <li class="slide"><img src="img/f1.jpg" alt="f1" class='fcaroussel'></li>
                <li class="slide"><img src="img/f2.jpg" alt="f2" class='fcaroussel'></li>
                <li class="slide"><img src="img/c1.jpg" alt="f3" class='fcaroussel'></li>
            </ul>

        </div>


        <div class='presentationchambre'>
            <div class='presentation'>
                <h2>Présentation :</h2>
                <br>
                <p>
                    Si vous cherchez un endroit idéal pour passer vos vacances ou un séjour d'affaires, notre hôtel 
                    est l'endroit qu'il vous faut ! Nous offrons des chambres confortables et bien équipées, avec des 
                    lits confortables et une vue imprenable sur la ville. Notre équipe d'employés expérimentés sera ravie 
                    de vous accueillir et de vous offrir un service attentif et personnalisé. Nous avons également une piscine 
                    extérieure, un centre de fitness et un restaurant gastronomique pour vous faire plaisir. Réservez dès 
                    maintenant votre séjour à notre hôtel pour une expérience inoubliable !
                </p>
        
        
            </div>
            <div class='suite1'>
                <h2>La suite familiale :</h2>
                <br>
                <p>
                    Notre suite familiale est l'endroit idéal pour les familles en voyage. Spacieuse et confortable,
                    elle comprend deux chambres séparées, une salle de bain privée, un salon confortable et une 
                    cuisine entièrement équipée. Profitez de tous les avantages de l'hôtel, tels que le petit déjeuner 
                    gratuit, la piscine et le centre de fitness, tout en bénéficiant d'un espace privé pour vous détendre
                    en famille. Réservez notre suite familiale pour des vacances inoubliables.
                </p>
            </div>
            <div class='suite2'>
                <h2>La suite luxe :</h2>
                <br>
                <p>
                    Notre suite de luxe offre le summum du confort et de l'élégance. Spacieuse et raffinée, elle comprend une
                    chambre luxueusement aménagée avec un lit king-size, une salle de bain spacieuse avec baignoire et douche 
                    séparées, ainsi qu'un salon confortable avec vue sur la ville. Profitez de tous les avantages de l'hôtel,
                    tels que le service d'étage 24h/24, le petit déjejuner gratuit et l'accès au club de loisirs, tout en bénéficiant
                    d'un espace privé pour vous détendre dans le luxe. Réservez notre suite de luxe pour une expérience de voyage inoubliable.
                </p>
            </div>
            <div class='suite3'>
                <h2>La suite amis :</h2>
                <br>
                <p>
                    Notre suite pour amis est l'endroit idéal pour les groupes d'amis en voyage. Spacieuse et confortable, 
                    elle comprend deux chambres séparées avec lits queen-size, une salle de bain privée, un salon confortable 
                    et une cuisine entièrement équipée. Profitez de tous les avantages de l'hôtel, tels que le petit déjeuner 
                    gratuit, la piscine et le centre de fitness, tout en bénéficiant d'un espace privé pour vous détendre en 
                    compagnie de vos amis. Réservez notre suite pour amis pour des vacances inoubliables.
                </p>
            </div>
            <div class="global-boutton-resa">
                <a href="resa_suite.php">
                    <div class="boutton-resa">
                        RESERVER VOTRE SUITE !
                    </div>
                </a>
            </div>
        </div> 
        
        
    </div>
    
    
    

    
    <?php include("php/footer.php"); ?>
</body>
<script src='js/script.js'></script>
</html>