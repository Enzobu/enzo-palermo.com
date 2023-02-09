<?php
    include("php/isAdmin.php");
    include("../../link_db.php");
    $id_resa = htmlspecialchars($_POST['id_resa']);
    $id_user = htmlspecialchars($_POST['id_user']);
    $d_debut = htmlspecialchars($_POST['d_debut']);
    $d_fin = htmlspecialchars($_POST['d_fin']);
    if ($id_resa != '' and $id_user != '') {
        $sql = "UPDATE `resa` SET `id_user`=$id_user WHERE `id_resa`=$id_resa";
        $requete = $db->query($sql);
    }
    if ($id_resa != '' and $d_debut != '') {
        $sql = "UPDATE `resa` SET `d_debut`=$d_debut WHERE `id_resa`=$id_resa";
        $requete = $db->query($sql);
    }
    if ($id_resa != '' and $d_fin != '') {
        $sql = "UPDATE `resa` SET `d_fin`=$d_fin WHERE `id_resa`=$id_resa";
        $requete = $db->query($sql);
    }
    
    header('Location: /admin/resa.php');
    exit();