<?php
include('link_db.php');
session_start();


function authenticate($db, $email, $password) {

  $sql = "SELECT * FROM user WHERE email='$email' and password='$password'";
  $requete = $db->query($sql);
  $stmt = $requete->fetchAll();
  if (!empty($stmt)) {
    $id = $stmt[0]['id'];
    $nom = $stmt[0]['nom'];
    $prenom = $stmt[0]['prenom'];
    $email = $stmt[0]['email'];
    $password = $stmt[0]['password'];
    $isAdmin = $stmt[0]['isAdmin'];

    $_SESSION['id'] = $id;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['isAdmin'] = $isAdmin;

    return TRUE;
 } else {
    return FALSE;
 }
  
}



