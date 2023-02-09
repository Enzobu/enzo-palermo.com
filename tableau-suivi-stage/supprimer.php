<?php
    include('../php/link_db.php');
    include('../php/isLoged.php');
    itsAllowed(10);

    if (array_key_exists('id', $_GET)) {
        $id = $_GET['id'];
        $sql = "DELETE FROM `tableau-recherche-stage` WHERE id = $id";
        $requete = $db->query($sql);
    }
    
    header("Refresh:0; url=/tableau-suivi-stage/index.php");
    exit();