
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="/style/login/login.css">
    <title>Accueil - Enzo Palermo</title>
</head>
<body>
    <header class="header">
        <?php include('../php/navbar.php'); ?>
    </header>

    <div class="login">
        <div class="form">
            <div class="title">Se connecter :</div>
            <form action="/login/index.php" method="post">
                <div class="form-item">Identifiant : <input type="text" required="required" name='id'></div>
                <div class="form-item">Mot de passe : <input type="password" required="required" name='pass'></div>
                <div class="error-message">
                    <?php 
                        if (array_key_exists('error', $_GET)) {
                            if ($_GET['error'] == 'notLog') {
                                echo 'Il faut être connecter pour faire l\'action demander';
                            }
                            if ($_GET['error'] == 'falseValue') {
                                echo 'Mauvais identifiant ou mot de passe';
                            }
                        }
                    ?>
                </div>
                <div class="form-item"><input type="submit" value="Se connecter"></div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    $id = 'enzo.palermo';
    $pass = '$2y$10$Tx5ms9xVTZ/Nc8PoxOovu.acIZcYak.K7yPet5rQokhOTJ3Kz3UGy';

    if(array_key_exists('id', $_POST) and array_key_exists('pass', $_POST)) {
        if ($_POST['id'] == $id and password_verify($_POST['pass'], $pass)) {
            $_SESSION['id'] = $id;
            header('location: /');
        }
    }

    if(array_key_exists('session', $_GET)) {
        if ($_GET['session'] == 'destroy') {
            session_destroy();
            header('location: /');
        }
    }
?>