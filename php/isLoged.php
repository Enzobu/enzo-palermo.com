<?php

$sql = "SELECT * FROM `users_enzo_palermo`";
$requete = $db->query($sql);
define("USERS", $requete->fetchAll());
// $users = $requete->fetchAll();

function isLoged() {
    if (array_key_exists('id', $_SESSION)) {
        return true;
    } else {
        return false;
    }
}

function loged() {
    if (!isLoged()) {
        header('Refresh: 0;url=/login/?error=notLog');
        die();
    }
}

function havePermission() {
    foreach (USERS as $user) {
        if ($_SESSION['id'] == $user['id']) {
            return $user['permission'];
        }
    }
}

function itsAllowed($permissionRequired) {
    if (isLoged()) {
        if (!(havePermission() >= $permissionRequired)) {
            // header('location: ../login/?error=notAllowed');
            header("Refresh: 0;url=/login/?error=notAllowed");
            die();
        }
    } else {
        header('Refresh: 0;url=/login/?error=notLog');
        die();
    }
}

?>