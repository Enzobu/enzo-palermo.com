<nav class="nav">
    <ul class="nav-list">
        <li class="nav-item"><a href="/">Enzo Palermo</a></li>
        <li class="nav-item"><a href="/cv">Mon CV</a></li>
        <li class="nav-item"><a href="/projets">Mes projets</a></li>
        <li class="nav-item"><a href="/tableau-suivi-stage">Tableau suivi stage</a></li>
        <?php
            if (array_key_exists('id', $_SESSION)) {
                echo '<li class="nav-item"><a href="/login?session=destroy">Déconexion</a></li>';
            } else {
                echo '<li class="nav-item"><a href="/login">Login</a></li>';
            }
        ?>
        
    </ul>
</nav>