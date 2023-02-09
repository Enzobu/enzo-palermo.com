<?php
    include("php/isAdmin.php");
    include("../../link_db.php");
    $num = htmlspecialchars($_POST['num']);
    $nb_place = htmlspecialchars($_POST['nb_place']);
    $prixnuit = htmlspecialchars($_POST['prixnuit']);
    $expo = htmlspecialchars($_POST['expo']);
    $etage = htmlspecialchars($_POST['etage']);
    if ($num != '' and $nb_place != '') {
        $sql = "UPDATE `chambre` SET `nb_place`='$nb_place' WHERE `num`=$num";
        $requete = $db->query($sql);
    }
    if ($num != '' and $prixnuit != '') {
        $sql = "UPDATE `chambre` SET `prix/nuit`='$prixnuit' WHERE `num`=$num";
        $requete = $db->query($sql);
    }
    if ($num != '' and $expo != '') {
        $sql = "UPDATE `chambre` SET `expo`='$expo' WHERE `num`=$num";
        $requete = $db->query($sql);
    }
    if ($num != '' and $etage != '') {
        $sql = "UPDATE `chambre` SET `etage`='$etage' WHERE `num`=$num";
        $requete = $db->query($sql);
    }

    header('Location: /admin/chambre.php');
    exit();