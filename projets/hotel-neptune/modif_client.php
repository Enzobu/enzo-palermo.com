<?php
session_start();
// Connect to the database
$dsn = "mysql:host=localhost;dbname=projet_neptune";
$username = "root";
$password = "";

try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  // Handle the error
}

// Check if the form has been submitted
if (isset($_POST["submit"])) {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  // Update the data in the database
  $query = "UPDATE users SET name = :name, email = :email, phone = :phone WHERE id = :user_id";
  $stmt = $db->prepare($query);
  $stmt->bindValue(":name", $name, PDO::PARAM_STR);
  $stmt->bindValue(":email", $email, PDO::PARAM_STR);
  $stmt->bindValue(":phone", $phone, PDO::PARAM_STR);
  $stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
  $stmt->execute();

  // Redirect to the homepage
  header("Location: index.php");
}

// Get the current user's data from the database
$user_id = $_SESSION["user_id"];
$query = "SELECT * FROM users WHERE id = :user_id";
$stmt = $db->prepare($query);
$stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit User Data</title>
  <style>
    /* CSS styles go here */
  </style>
</head>
<body>
  <h1>Edit User Data</h1>
  <form method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo $user["nom"]; ?>"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" value="<?php echo $user["email"]; ?>"><br>
    <label for="phone">Phone:</label><br>
    <input type="text" id="phone" name="phone" value="<?php echo $user["pass"]; ?>"><br><br>
    <input type="submit" name="submit" value="Save">
  </form>
</body
