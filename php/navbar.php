<nav class="nav">
    <div class="bouton-cacher-responsive" onclick="changerLeft('-19rem');"><img src="/image/croix.svg" alt=""></div>
    <ul class="nav-list">
        <li class="nav-item"><a href="/">Enzo Palermo</a></li>
        <!-- <li class="nav-item"><a href="/cv">Mon CV</a></li> -->
        <li class="nav-item"><a href="/projets">Mes projets</a></li>
        <li class="nav-item"><a href="/tableau-suivi-stage">Tableau suivi stage</a></li>
        <?php
            if (array_key_exists('id', $_SESSION)) {
                echo '<li class="nav-item"><a href="/my-account"><img src="/image/compte_noir.svg" alt="Mon compte" class="icon-nav">Mon compte</a></li>';
                echo '<li class="nav-item"><a href="/login?session=destroy"><img src="/image/exit.svg" alt="Déconnexion" class="icon-nav">Déconnexion</a></li>';
            } else {
                echo '<li class="nav-item"><a href="/login">Login</a></li>';
            }
        ?>
        
    </ul>
</nav>

<script src="/js/main.js"></script>