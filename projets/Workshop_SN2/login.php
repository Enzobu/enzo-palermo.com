<?php
include("php/link_db.php");
session_start();
// Vérification si la variable de session '$_SESSION' est définie

// Vérification si des données ont été envoyées via GET
if(!empty($_GET)) {
    // Vérification si la clé 'destroy' existe dans les données GET
    if(array_key_exists('destroy', $_GET)) {
        // Destruction de la session
        session_destroy();
        // Redirection vers la page d'accueil ('/')
        header("Refresh: 0;url=/projets/Workshop_SN2/");
        // Arrêt de l'exécution du script
        die();
    }
}

if(!empty($_SESSION)) {
    // Vérification si la clé 'isAdmin' existe dans la variable de session
    header("Refresh: 0;url=/projets/Workshop_SN2/");
}
// Vérification si des données ont été envoyées via POST
if(!empty($_POST)) {
    // Vérification si les clés 'mail' et 'password' existent dans les données POST
    if(array_key_exists('mail', $_POST) and array_key_exists('password', $_POST) ) {
        // Récupération des valeurs des champs 'mail' et 'password' avec la fonction htmlspecialchars() pour éviter les attaques XSS
        $mail = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['password']);

        // Requête pour récupérer tous les utilisateurs
        $sql = "SELECT * FROM `wusers`";
        $requete = $db->query($sql);
        $users = $requete->fetchAll();

        // Boucle sur les utilisateurs pour vérifier les identifiants
        foreach($users as $user) {
            // Vérification de la correspondance entre l'adresse e-mail et le mot de passe avec ceux stockés en base de données
            if($mail == $user['mail_user'] and password_verify($password, $user['password_user'])) {
                // Début de la session et stockage des informations de l'utilisateur dans des variables de session
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['name_user'] = $user['name_user'];
                $_SESSION['surname_user'] = $user['surname_user'];
                $_SESSION['mail_user'] = $mail;
                $_SESSION['isFormer'] = 0;
                // Redirection vers la page d'administration ('/admin')
                header("Refresh: 0;url=/projets/Workshop_SN2/");
                // Arrêt de l'exécution du script
                die();
            } else {
                // Redirection vers la page de connexion avec un message d'erreur ('error=0')
                // header("Refresh: 0;url=/projets/Workshop_SN2/login.php?error=0");
                // die();
            }
        }

        // Requête pour récupérer tous les utilisateurs
        $sql = "SELECT * FROM `formers`";
        $requete = $db->query($sql);
        $users = $requete->fetchAll();

        // Boucle sur les utilisateurs pour vérifier les identifiants
        foreach($users as $user) {
            // Vérification de la correspondance entre l'adresse e-mail et le mot de passe avec ceux stockés en base de données
            if($mail == $user['mail_former'] and password_verify($password, $user['password_former'])) {
                // Début de la session et stockage des informations de l'utilisateur dans des variables de session
                $_SESSION['id_former'] = $user['id_former'];
                $_SESSION['name_former'] = $user['name_former'];
                $_SESSION['surname_former'] = $user['surname_former'];
                $_SESSION['mail_former'] = $mail;
                $_SESSION['isFormer'] = 1;
                // Redirection vers la page d'administration ('/admin')
                header("Refresh: 0;url=/projets/Workshop_SN2/");
                // Arrêt de l'exécution du script
                die();
            } else {
                // Redirection vers la page de connexion avec un message d'erreur ('error=0')
                header("Refresh: 0;url=/projets/Workshop_SN2/login.php?error=0");
                die();
            }
        }
    }
}

// Variable pour stocker un message d'erreur
$error_message = '';

// Vérification si la clé 'error' existe dans les données GET
if(array_key_exists('error', $_GET)) {
    // Vérification de la valeur de 'error'
    if($_GET['error'] == '0') {
        $error_message = 'Identifiant ou mot de passe incorrect !';
    }
    if($_GET['error'] == '1') {
        $error_message = 'Case non cochée';
    }
    if($_GET['error'] == '2') {
        $error_message = 'Connecter vous pour continuer';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php"); ?>
    <link rel="stylesheet" href="/projets/Workshop_SN2/style/login.css">
    <title>Workshop Sn2</title>
</head>
<body>
    <header class="header">
        <?php include("php/header.php"); ?>
    </header>
    
    <main class="main">
        <div class="login-space"></div>
        <div class="circle-global-container">
            <div class="circle-top-container">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            <div class="circle-bottom-container">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>

        <div class="form-login-global-container">
            <div class="account-img">
                <img src="/projets/Workshop_SN2/images/account.svg" alt="Account illustration">
            </div>
            <div class="form-login-container">
                <form action="" class="form-login" method="POST">
                    <input id="mail" type="mail" name="mail" required>
                    <label id="mail-label" class="form-login-label label-mail label-active" for="mail">Email</label>

                    <input id="password" type="password" name="password" required>
                    <label id="password-label" class="form-login-label label-password label-active" for="password" >Mot de passe</label>

                    <a href="" class="forget-password">Mot de passe oublié ?</a>
                    <div class="error-message"><?php echo $error_message; ?></div>
                    <input type="submit" value="Se connecter">
                </form>
            </div>
        </div>

        <script src="/projets/Workshop_SN2/js/formLogin.js"></script>
    </main>

    <footer class="footer">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>