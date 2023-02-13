<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../php/head.php'); ?>
    <link rel="stylesheet" href="/style/login/login.css">
    <title>Accueil - Enzo Palermo</title>
</head>
<body class="body">
    <header class="header" id="header">
        <?php include('../php/navbar.php'); ?>
    </header>

    <div class="login">
        <div class="form">
            <div class="title">Se connecter :</div>
            <form action="/login/index.php" method="post">
                <div class="form-item">Identifiant : <input type="text" required="required" name='id' placeholder="Identifiant"></div>
                <div class="form-item">Mot de passe : <input type="password" required="required" name='pass' placeholder="Mot de passe"></div>
                <div class="error-message">
                    <?php 
                        if (array_key_exists('error', $_GET)) {
                            if ($_GET['error'] == 'notLog') {
                                echo 'Il faut être connecter pour réaliser l\'action demander';
    <main class="main">
        <div class="bouton-cacher-responsive" onclick="changerLeft('0');"><img src="/image/menu.svg" alt=""></div>
                            }
                            if ($_GET['error'] == 'notAllowed') {
                                echo 'Vous n\'avez pas les droits nécessaire pour réaliser l\'action demander';
                            }
                            if ($_GET['error'] == 'falseValue') {
                                echo 'Mauvais identifiant ou mot de passe';
                            }
                            if ($_GET['error'] == 'newPass') {
                                echo 'Après modification du mot de passe, reconnectez vous';
                            }
                        }
                    ?>
                </div>
                <div class="form-item"><input type="submit" value="Se connecter"></div>
            </form>
        </div>
    </div>
    <footer class="footer" id="footer">
        <?php include('../php/footer.php'); ?>
    </footer>
</body>
</html>

<?php

    include('../php/link_db.php');
    // $id = 'enzo.palermo';
    // $pass = '$2y$10$Tx5ms9xVTZ/Nc8PoxOovu.acIZcYak.K7yPet5rQokhOTJ3Kz3UGy';

    $sql = "SELECT * FROM `users_enzo_palermo`";
    $requete = $db->query($sql);
    $users = $requete->fetchAll();

    if(array_key_exists('id', $_POST) and array_key_exists('pass', $_POST)) {
        foreach ($users as $user) {
            if ($_POST['id'] == $user['id'] and password_verify($_POST['pass'], $user['pass'])) {
               $_SESSION['id'] = $user['id'];
               header('location: /');
               die();
           }
        }
        header('location: ?error=falseValue');

    }

    if(array_key_exists('session', $_GET)) {
        if ($_GET['session'] == 'destroy') {
            session_destroy();
            header('location: /');
        }
    }

?>