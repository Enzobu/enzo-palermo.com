<?php 
    session_start();
    include('php/link_db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php"); ?>
    <link rel="stylesheet" href="css/my-resa.css">
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include("php/header.php"); ?>

    <?php
        $user_id = $_SESSION['id'];
        $sql = "SELECT * FROM resa WHERE id_user=$user_id ORDER BY d_debut";
        $requete = $db->query($sql);
        $resa = $requete->fetchAll();
    ?>

    <div class="global-my-resa">

        <h1>Mes réservations</h1>
        <div class="all-resa">
            <?php
                foreach($resa as $reservation) { ?>
                <div class="global-resa-item">
                    <div class="resa-item"> Chambre : <?php echo $reservation['id_resa']; ?></div>
                    <br>
                    <div class="resa-item"> Du : <?php echo $reservation['d_debut']; ?></div>
                    <div class="resa-item"> Au : <?php echo $reservation['d_fin']; ?></div>
                </div>
            <?php }?>
        </div>
    </div>
    




    <?php include("php/footer.php"); ?>
</body>
<script src='js/script.js'></script>
</html>