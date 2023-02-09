<?php

//constante d'environnement

// define("DBHOST", "enzopak162.mysql.db");
// define("DBUSER", "enzopak162");
// define("DBPASS", "5G4de67f");
// define("DBNAME", "enzopak162");

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "tableauRechercheStage");

//DSN de connection
$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

//On se connecte à la base de données
try{
        //On instancie PDO
    $db = new PDO($dsn, DBUSER, DBPASS);

    //echo "On est connectés";

        //On s'assure d'envoyer les données en utf8
    $db->exec("SET NAMES utf8");

        //On défini le mode de fetch par default
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die($e->getMessage());
    echo'CPT';
}

?>