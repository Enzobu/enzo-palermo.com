<nav class="nav">
    <ul class="nav-list">
        <li class="nav-item"><a href="index.php" class='logo'>Hotel Neptune</a></li>
        <?php
        if (empty($_SESSION)) {
            echo "<li class=\"nav-item\"><a href=\"login.php\" class='logo'>Se connecter / s'inscrire</a></li>";
        } else {
            echo "<li class=\"nav-item\">
                    <a href=\"\" class='logo'>Mon compte</a>
                    <ul class=\"sub-nav-list\">
                        <li class=\"sub-item\"><a href=\"profil.php\" class='logo'>Mes info</a></li>
                        <li class=\"sub-item\"><a href=\"my_resa.php\" class='logo'>Reservations</a></li>";
                        if ($_SESSION['isAdmin'] == 1) {
                            echo "<li class=\"sub-item\"><a href=\"admin\" class='logo'>Admin</a></li>";
                        }
                        echo "<li class=\"sub-item deco\"><a href=\"php/deco.php\" class='logo'>Se déconnecter</a></li>
                    </ul>
                </li>";
            
        } ?>
    </ul>
</nav>