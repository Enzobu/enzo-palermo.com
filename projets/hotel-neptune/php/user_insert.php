<?php
    include("link_db.php");
    $nom = strtoupper(htmlspecialchars($_POST['nom']));
    $prenom = ucfirst(htmlspecialchars($_POST['prenom']));
    $civilite = htmlspecialchars($_POST['civilite']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if ($nom == '' or $prenom == '' or $civilite == '' or $email == ''or $password == '') {
        ?><html><meta http-equiv="Refresh" content="0; url=../signin.php" /></html><?php
        exit();
    }
    $sql = "INSERT INTO `user`(`nom`, `prenom`, `civilite`, `email`, `password`) VALUES ('$nom', '$prenom', '$civilite', '$email', '$password')";
    $requete = $db->query($sql);
    header('location: /');
?>