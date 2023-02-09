<?php
include('function.php');

if (isset($_POST["valid"])) {

    $nom = strtoupper($_POST["nom"]);
    $prenom = ucfirst($_POST["prenom"]);
    $email = $_POST["email"];
    $password = $_POST["password"];
    $id = $_SESSION['id'];
    $sql = "UPDATE user SET nom='$nom', prenom='$prenom', email='$email', password='$password' WHERE id=$id";
    $requete = $db->query($sql);

    session_unset();

    authenticate($db, $email, $password);

    header('Location: ../profil.php');
    exit();
}