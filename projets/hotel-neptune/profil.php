<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('php/head.php') ?>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Profil</title>
</head>
<body>
<?php include('php/header.php') ?>
    <img src="img\profile.svg" alt="">
    <div class="actionTable">   
        <div class="update-bdd">
                <form action="php/update_profil.php" method="post">
                    <div class="formulaire">
                        <p>Modifier une ligne</p>
                        <br>
                        <div>Nom : </div>
                        <div><input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>"></div>
                        <div>Prénom : </div>
                        <div><input type="text" name="prenom" value="<?php echo $_SESSION['prenom']; ?>"/></div>
                    <div>Email : </div>
                    <div><input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"/></div>
                    <div>Password : </div>
                    <div><input type="text" name="password" value="<?php echo $_SESSION['password']; ?>"/></div>
                </div>
                <p><button type="submit" class="boutton" name='valid'>Modifier</button></p>
            </form>
        </div>
    </div>


</body>
</html>
