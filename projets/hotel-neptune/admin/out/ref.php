<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="cache-control" content="max-age=0">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="expires" content="0">
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
        <meta http-equiv="pragma" content="no-cache">
        <title>Document</title>
    </head>
    <body>
        <?php
            //constante d'environnement
            define("DBHOST", "localhost");
            define("DBUSER", "root");
            define("DBPASS", "");
            define("DBNAME", "test");

            //DSN de connection
            $dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

            //On se connecte à la base de données
            try{
                    //On instancie PDO
                $db = new PDO($dsn, DBUSER, DBPASS);

                //echo "On est connectés";

                    //On s'assure d'envoyer les données en utf8
                //$db->exec("SET NAME utf8");

                    //On défini le mode de fetch par default
                $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            } catch (PDOException $e) {
                die($e->getMessage());
            }

                //Ici, on est connecter à la base
                //On peut récupérer la liste des utilisateurs
            $sql = "SELECT * FROM `users`";

                //On execute directement la requête
            $requete = $db->query($sql);

            //var_dump($requete);

                //On récupère les données (fetch ou fetchAll)
            $user = $requete->fetchAll();

            var_dump($user);

            //echo "\n 0".$user[2]['Tel'];

                //Ajouter un utilisateur
            //$sql = "INSERT INTO `users`(`Nom`, `Prenom`, `Age`, `Tel`) VALUES ('Zemmour', 'Eric', 64, 0658961023)";

            //$requete = $db->query($sql);

            //---------- Toute les requete SQL ----------//
            

        ?>
    </body>
</html>







<?php
//            include("php/link_db.php");
//                //On peut récupérer la liste des utilisateurs
//            $sql = "SELECT * FROM `users`";
//            $requete = $db->query($sql);
//                //On récupère les données (fetch ou fetchAll) dans une variable
//            $user = $requete->fetchAll();
//            //echo "\n 0".$user[2]['Tel'];
?>