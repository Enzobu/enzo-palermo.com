<?php
    include("php/isAdmin.php");
    include("../../link_db.php");
    $nb_place = htmlspecialchars($_POST['nb_place']);
    $prixnuit = htmlspecialchars($_POST['prixnuit']);
    $expo = htmlspecialchars($_POST['expo']);
    $etage = htmlspecialchars($_POST['etage']);
    if ($nb_place == '' or $prixnuit == '' or $expo == ''or $etage == '') {
        header('Location: /admin/chambre.php');
        exit();
    }
    $sql = "INSERT INTO `chambre`(`nb_place`, `prix/nuit`, `expo`, `etage`) VALUES ('$nb_place', '$prixnuit', '$expo', '$etage')";
    $requete = $db->query($sql);

    header('Location: /admin/chambre.php');
    exit();