<?php
    include("php/isAdmin.php");
    include("../../link_db.php");
    $id = htmlspecialchars($_GET['id']);
    if ($id == 'all') {
        $sql = "DELETE FROM `user`";
        $requete = $db->query($sql);
    }
    else {
        $id = (int)$id;
        $sql = "DELETE FROM `user` WHERE id = $id";
        $requete = $db->query($sql);
    }
    
    header('Location: /admin/user.php');
    exit();
