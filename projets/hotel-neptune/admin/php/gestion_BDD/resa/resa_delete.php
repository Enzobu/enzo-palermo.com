<?php
    include("php/isAdmin.php");
    include("../../link_db.php");
    $id_resa = htmlspecialchars($_GET['id_resa']);
    if ($id_resa == 'all') {
        $sql = "DELETE FROM `resa`";
        $requete = $db->query($sql);
    }
    else {
        $id_resa = (int)$id_resa;
        $sql = "DELETE FROM `resa` WHERE id_resa = $id_resa";
        $requete = $db->query($sql);
    }
    
    header('Location: /admin/resa.php');
    exit();