<?php 
    session_start();
    include('php/link_db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php"); ?>
    <link rel="stylesheet" href="css/suite.css">
</head>
<body>
    <?php include("php/header.php"); ?>
    <div class="global-container-suite">
        <div class="titre">
            <h1>Les chambres</h1>
        </div>
        <?php
            $sql = "SELECT * FROM chambre ORDER BY num";
            $requete = $db->query($sql);
            $chambres = $requete->fetchAll();

            foreach($chambres as $chambre) {
                
                $numero = $chambre['num']; ?>
                <div class="suite-chambre">
                    <div class="info">
                        <div class="num-chambre">
                            Chambre n° : <?php echo $numero; ?>
                        </div>
                        <div class="prix-chambre">
                            Prix : <?php echo $chambre['prix/nuit']; ?> €
                        </div>
                        <br><br>
                        <div class="form-resa">
                            <form action="php/insert_resa.php" method="GET">
                                <input type="hidden" name="num_chambre" value="<?php echo $numero; ?>">
                                <input class="date" type="date" name='d_debut' min='<?php $days = date("d"); $mons = date("m"); $years = date("Y"); $date = $years.'-'.$mons.'-'.$days; echo $date; ?>'>
                                <input class="date" type="date" name='d_fin' min='<?php $days = date("d"); $mons = date("m"); $years = date("Y"); $date = $years.'-'.$mons.'-'.$days; echo $date;?>'>
                                <div class="boutton-resa-chambre">
                                    <input type="submit" value="Réserver !" class="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="img">
                        <img src="img-chambre\<?php echo $numero; ?>\img.jfif" alt="">
                    </div>
                </div>



            <?php }
        ?>
    </div>

    
    <?php include("php/footer.php"); ?>
</body>
<script src='js/script.js'></script>
</html>