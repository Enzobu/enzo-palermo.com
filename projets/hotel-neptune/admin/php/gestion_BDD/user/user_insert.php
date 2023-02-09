<?php
    include("php/isAdmin.php");
    include("../../link_db.php");
    $insert = htmlspecialchars($_GET['id']);
    $nom = strtoupper(htmlspecialchars($_POST['nom']));
    $prenom = ucfirst(htmlspecialchars($_POST['prenom']));
    $civilite = htmlspecialchars($_POST['civilite']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $isAdmin = htmlspecialchars($_POST['isAdmin']);
    if ($nom == '' or $prenom == '' or $civilite == '' or $email == ''or $password == '') {
        header('Location: /admin/user.php');
        exit();
    }
    $sql = "INSERT INTO `user`(`nom`, `prenom`, `civilite`, `email`, `password`, `isAdmin`) VALUES ('$nom', '$prenom', '$civilite', '$email', '$password', $isAdmin)";
    $requete = $db->query($sql);
    
    header('Location: /admin/user.php');
    exit();
