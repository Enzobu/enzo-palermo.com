<?php

session_start();
$statut = $_SESSION['isAdmin'];
if ($statut != 1) {
    header("location: ../");
}