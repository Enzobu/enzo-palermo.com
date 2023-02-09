<?php

$host = '127.0.0.1';
$port = '3306';
$dataname = 'hotel_neptune';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);
} catch (Exception $e) {
    die('Impossible de se connecter à la base de données : ' . $e->getMessage())
}