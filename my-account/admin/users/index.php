<?php include('../../php/link_db.php'); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('../../php/head.php'); ?>
    <link rel="stylesheet" href="/style/admin/users/users.css">
    <title>Accueil - Enzo Palermo</title>
</head>
<body>
    <script src="/js/tableau_suivi_stage.js"></script>
    <header class="header">
        <?php include('../../php/navbar.php'); ?>
    </header>

    <div class="global-container">
        <div class="title">
            <h1>Utiliateur</h1>
        </div>
        <div class="bouton">
            <button class="bouton-action" onclick="ajouter();">Ajouter une ligne</button>
        </div>
        <div class="global-tableau">
            
            <?php
                $sql = "SELECT * FROM `users_enzo_palermo` ORDER BY `num` ASC";
                $requete = $db->query($sql);
                $users = $requete->fetchAll();
            ?>


            <table class="tableau">
                <tr class="ligne-ajouter" id="ligne-ajouter">
                    <form action="/admin/users/inserer.php" method="GET">
                        <td> <input type="text" name="id" required="required" placeholder="id"> </td>
                        <td> <input type="text" name="pass" required="required" placeholder="pass"> </td>
                        <td> <input type="number" name="permission" required="required" placeholder="permission"> </td>
                        <td> <input type="submit" value="Ajouter"> </td>
                    </form>
                </tr>
                <tr class="ligne-ajouter" id="double-ligne">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Pass</td>
                    <th>Permision</td>
                    <th>Action</td>
                </tr>
                <?php foreach ($user as $users){ ?>
                <tr class="ligne-modifier" id="<?php echo $user['id']; ?>">

                    <form action="/admin/users/modifier.php" method="GET">
                        <input type="hidden" name="num" value="<?php echo $user['num']; ?>">
                        <td> <input type="date" name="id" required="required" value="<?php echo $user['id']; ?> "> </td>
                        <td> <input type="text" name="pass" required="required" value="<?php echo $user['pass']; ?> "> </td>
                        <td> <input type="number" name="permission" required="required" value="<?php echo $user['permission']; ?> "> </td>
                        <td> <input type="submit" value="Modifier"> </td>
                    </form>
                </tr>
                <tr>
                    <td> <?php echo $user['date_candid']; ?> </td>
                    <td> <?php echo $user['entreprise']; ?> </td>
                    <td> <?php echo $user['activite_secteur']; ?> </td>
                    <td class="bouton-action-ligne">
                        <!-- <a href="/tableau-suivi-stage/supprimer.php?id=<?php echo $user['id']; ?>"><img src="/image/effacer_rouge.svg" alt="Icone effacer" class="image-bouton-action"></a> -->
                        <img src="/image/effacer_rouge.svg" alt="Icone effacer" class="image-bouton-action" onclick="effacer(<?php echo $user['num']; ?>);">
                        <img src="/image/editer.svg" alt="Icone éditer" class="image-bouton-action" onclick="modifier(<?php echo $user['num']; ?>);">
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>