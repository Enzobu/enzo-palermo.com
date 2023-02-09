<?php
    session_start();
    include("link_db.php");
    $id_user = $_SESSION['id'];
    $num_chambre = htmlspecialchars($_GET['num_chambre']);
    $d_debut = htmlspecialchars($_GET['d_debut']);
    $d_fin = htmlspecialchars($_GET['d_fin']);
    if ($id_user == '' or $d_debut == '' or $d_fin == '') {
        header('Location: /');
        exit();
    }
    $sql = "INSERT INTO `resa`(`id_user`, `num_chambre`, `d_debut`, `d_fin`) VALUES ($id_user, $num_chambre, '$d_debut', '$d_fin')";
    $requete = $db->query($sql);

    header('Location: /');
    exit();
