<?php

include('function.php');
// verifie l'envoie du forum
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // recup email et mdp du formulaire
  $email = $_POST['email'];
  $password = $_POST['pass'];

  // Appelle la fonction authenticate avec l'objet de connexion PDO, l'email et le mdp 

  if (authenticate($db, $email, $password)) {

      // If the user is authenticated, redirect to the home page
      header('Location: ../');
      exit;
    } else {
      // If the user is not authenticated, display an error message
      echo "<script>alert('invalid email or password');</script>";
      header('Location: ../login.php');
    }

  }

?>