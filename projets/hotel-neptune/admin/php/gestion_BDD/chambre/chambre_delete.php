<?php
    include("php/isAdmin.php");
    include("../../link_db.php");
    $num = htmlspecialchars($_GET['num']);
    if ($num == 'all') {
        $sql = "DELETE FROM `chambre`";
        $requete = $db->query($sql);
        exit();
    }
    else {
        $id = (int)$id;
        $sql = "DELETE FROM `chambre` WHERE num = $num";
        $requete = $db->query($sql);
    }
    
    header('Location: /admin/chambre.php');
    exit();