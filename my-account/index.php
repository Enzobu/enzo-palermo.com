<?php
session_start();
include('../php/link_db.php');
include('../php/isLoged.php');
loged()

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="/style/my-account/my-account.css">
    <title>Accueil - Enzo Palermo</title>
</head>
<body class="body">
    <header class="header" id="header">
        <?php include('../php/navbar.php'); ?>
    </header>

    <div class="global-container">
        <div class="title">
            <h1>Utiliateur</h1>
        </div>
        <div class="modif-pass">
    <main class="main">

            <div class="form">
                <div class="title-update-pass">Modifier son mot de passe</div>
                <form action="" method="POST" class="form-update-pass">
                    <div class="form-update-pass-input">Votre ancien mot de passe :<input type="password" name="hold_pass" placeholder="Ancien password" required></div>
                    <div class="form-update-pass-input">Votre nouveau mot de passe :<input type="password" name="new_pass" placeholder="Nouveau password" required></div>
                    <div class="form-update-pass-input">Répétez le nouveaux mot de passe :<input type="password" name="check_new_pass" placeholder="Nouveau password" required></div>
                    <div class="error-message">
                        <?php
                            if (array_key_exists('error', $_GET)) {
                                if ($_GET['error'] == 'wrongHoldPass') {
                                    echo 'Mauvais mot de passe actuel';
                                }
                                if ($_GET['error'] == 'wrongNewPass') {
                                    echo 'les nouveaux mot de passe ne correspondent pas';
                                }
                            }

                        ?>
                    </div>
                    <div class="form-update-pass-input"><input type="submit" value="Valider"></div>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer" id="footer">
        <?php include('../php/footer.php'); ?>
    </footer>
</body>
</html>


<?php

$sql = "SELECT * FROM `users_enzo_palermo` ORDER BY `num` ASC";
$requete = $db->query($sql);
$users = $requete->fetchAll();

if (array_key_exists('hold_pass', $_POST) and array_key_exists('new_pass', $_POST) and array_key_exists('check_new_pass', $_POST)) {
    foreach ($users as $user) {
        if ($_SESSION['id'] == $user['id'] and !password_verify($_POST['hold_pass'], $user['pass'])) {
            header("Refresh:0; url=/my-account/index.php/?error=wrongHoldPass");
        }
        if ($_SESSION['id'] == $user['id'] and password_verify($_POST['hold_pass'], $user['pass'])) {
            if (!($_POST['new_pass'] == $_POST['check_new_pass'])) {
                header("Refresh:0; url=/my-account/index.php/?error=wrongNewPass");
            }
            if (($_POST['new_pass'] == $_POST['check_new_pass'])) {
                $pass = password_hash($_POST['new_pass'], PASSWORD_DEFAULT);
                $num = $user['num'];
                $sql = "UPDATE `users_enzo_palermo` SET `pass`='$pass' WHERE num = $num";
                $requete = $db->query($sql);
                session_destroy();
                header("Refresh:0; url=/login/?error=newPass");
            }
        }
    }
}