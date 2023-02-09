<?php
    include("php/isAdmin.php");
    include("../../link_db.php");
    $id_user = htmlspecialchars($_POST['id_user']);
    $num_chambre = htmlspecialchars($_POST['num_chambre']);
    $d_debut = htmlspecialchars($_POST['d_debut']);
    $d_fin = htmlspecialchars($_POST['d_fin']);
    if ($id_user == '' or $d_debut == '' or $d_fin == '') {
        header('Location: /admin/resa.php');
        exit();
    }
    $sql = "INSERT INTO `resa`(`id_user`, `num_chambre`, `d_debut`, `d_fin`) VALUES ($id_user, $num_chambre, '$d_debut', '$d_fin')";
    $requete = $db->query($sql);

    header('Location: /admin/resa.php');
    exit();