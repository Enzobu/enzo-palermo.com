<?php include("php/isAdmin.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <?php include("php/head.php"); ?>
        <link rel="stylesheet"  href="style/style_table.css">
    </head>

    <body>
        <header>
            <?php include("php/header.php"); ?>
        </header>

        <div id="afficher">
        <div id="afficher2">
        <div id="afficher3">
        <div id="afficher4">
            <div id="masquer">
            <div id="masquer2">
            <div id="masquer3">
            <div id="masquer4">
                <div class="global-container global-chambre">
                    <h1>Chambres</h1>

                    <br><br>

                    <?php
                        include("php/link_db.php");
                        $url = $_SERVER['REQUEST_URI'];
                        $url = strstr($url,'?');
                        $url = substr($url, 1, 10);

                        if(!empty($url)) {
                            if(substr($url, 0, 3) == 'tri') {
                                $tri = htmlspecialchars($_GET['tri']);
                                $sens = htmlspecialchars($_GET['sens']);
                                $sql = "SELECT * FROM `chambre` ORDER BY `$tri` $sens";
                            }
                            else if(substr($url, 0, 10) == 'searchType') {
                                $searchType = htmlspecialchars($_GET['searchType']);
                                $search = htmlspecialchars($_GET['search']);
                                $sql = "SELECT * FROM `chambre` WHERE `$searchType` = '$search'";
                            } else {
                                $sql = "SELECT * FROM `chambre` ORDER BY `num` ASC";
                            }
                        } else {
                            $sql = "SELECT * FROM `chambre` ORDER BY `num` ASC";
                        }
                        $requete = $db->query($sql);
                        $chambres = $requete->fetchAll();

                        $sql = "SELECT * FROM `resa` ORDER BY `d_fin` ASC";
                        $requete = $db->query($sql);
                        $resa = $requete->fetchAll();
                    ?>

                        <div class="bouton-haut">
                            <div class="insert-line">
                                <a href="#afficher" class="afficher">Ajouter une ligne</a>
                                <a href="chambre.php" class="masquer">Ajouter une ligne</a> 
                            </div>
                            <div class="supp-all">
                                <a href="php/gestion_BDD/chambre/chambre_delete.php?num=all">Tout Supprimer</a>
                            </div>
                            <div class="trier">
                                <a href="#afficher3" class="afficher3">Trier</a>
                                <a href="chambre.php" class="masquer3">Trier</a> 
                            </div>
                            <div class="search">
                                <a href="#afficher4" class="afficher4">Rechercher</a>
                                <a href="chambre.php" class="masquer4">Rechercher</a> 
                            </div>
                        </div>

                        <table>
                            <tr>
                                <th> Actions </th>
                                <th> Num </td>
                                <th> Nb places</td>
                                <th> Prix / nuits </td>
                                <th> Exposition </td>
                                <th> Étage </td>
                                <th> Disponibilité </td>
                            </tr>
                            <?php foreach ($chambres as $chambre){ ?>
                            <tr>
                                <td class="table-center"> 
                                    <a href="php/gestion_BDD/user/chambre_delete.php?num=<?php echo $chambre['num']; ?>"><img src="image/effacer.png" alt="logo effacer"></a>
                                    
                                    <a href="?num=<?php echo $chambre['num']; ?>#afficher2" class="afficher2"><img src="image/modifier.png" alt="logo modifier"></a>
                                    <a href="chambre.php" class="masquer2"><img src="image/modifier.png" alt="logo modifier"></a>
                                
                                </td>
                                <td> <?php echo $chambre['num']; ?> </td>
                                <td> <?php echo $chambre['nb_place']; ?> </td>
                                <td> <?php echo $chambre['prix/nuit'].' €'; ?> </td>
                                <td> 
                                    <?php 
                                        if($chambre['expo'] == 'N') {
                                            echo 'Nord';
                                        }
                                        if($chambre['expo'] == 'S') {
                                            echo 'Sud';
                                        }
                                        if($chambre['expo'] == 'E') {
                                            echo 'Est';
                                        }
                                        if($chambre['expo'] == 'W') {
                                            echo 'Ouest';
                                        }
                                    ?>
                                </td>
                                <td> <?php echo $chambre['etage']; ?> </td>
                                <td> 
                                    <?php
                                        $tab = [];
                                        $df = [];
                                        foreach($resa as $reservation){
                                            $num_resa = (int)$reservation['num_chambre'];
                                            $num_chambre = (int)$chambre['num'];
                                            $dif = $num_chambre - $num_resa;
                                            array_push($tab, $dif);
                                            if($dif == 0) {
                                                $date_resa = $reservation['d_fin'];
                                                array_push($df, $date_resa);
                                            }
                                        }
                                        if(in_array(0, $tab)) {
                                            $days = date("d");
                                            $mons = date("m");
                                            $years = date("Y");
                                            $date = $years.'-'.$mons.'-'.$days;
                                            // $df = asort($df);
                                            foreach($df as $date_compare) {
                                                if ($date_compare < $date){
                                                    $sql = "UPDATE `chambre` SET `dispo` = 1 WHERE `num` = $num_chambre";
                                                } else {
                                                    $sql = "UPDATE `chambre` SET `dispo` = 0 WHERE `num` = $num_chambre";
                                                }
                                            }
                                        } else {
                                            $sql = "UPDATE `chambre` SET `dispo` = 1 WHERE `num` = $num_chambre ";
                                        }
                                        $requete = $db->query($sql);
                                        echo $sql[31]; 
                                    ?> 
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                            
                    <br><br><br>
                            
                    <div class="actionTable">
                        <div class="insert-bdd" id="insert-bdd">
                            <div class="head-act-bdd">
                                <p>Ajouter une ligne</p>
                            </div>
                            <form action="php/gestion_BDD/chambre/chambre_insert.php" method="post">
                                <div class="formulaire">
                                    <!-- Champs -->
                                    <div>Nb places : </div>
                                    <div><input type="number" name="nb_place" required="required"/></div>
                                    <div>Prix / nuits : </div>
                                    <div><input type="text" name="prixnuit" required="required"/></div>
                                    <div>Exposition : </div>
                                    <div class="radio radio-expo">
                                        <div class="radio-item"> N <input type="radio" name="expo" value="N" required="required"/> </div> 
                                        <div class="radio-item"> S <input type="radio" name="expo" value="S" required="required"/> </div> 
                                        <div class="radio-item"> E <input type="radio" name="expo" value="E" required="required"/> </div> 
                                        <div class="radio-item"> W <input type="radio" name="expo" value="W" required="required"/> </div> 
                                    </div>                                        
                                    <div>Étage : </div>
                                    <div>
                                        <select name="etage" required="required">
                                            <option value="">---- Select stage ----</option>
                                            <option value="0">Stage 0</option>
                                            <option value="1">Stage 1</option>
                                            <option value="2">Stage 2</option>
                                            <option value="3">Stage 3</option>
                                            <option value="4">Stage 4</option>
                                            <option value="5">Stage 5</option>
                                            <option value="6">Stage 6</option>
                                        </select>
                                    </div>
                                    <!-- <div>Disponibilité : </div>
                                    <div class="radio"> YES <input type="radio" name="dispo" value="1" required="required"/> NO <input type="radio" name="dispo" value="0" required="required"/></div> -->
                                    <!-- Champs -->
                                </div>
                                <button type="submit" class="boutton">Ajouter</button>
                            </form>
                        </div>
                        
                        <br><br>
                        
                        <div class="update-bdd" id="update-bdd">
                            <div class="head-act-bdd">
                                <p>Modifier une ligne</p>
                            </div>
                            <form action="php/gestion_BDD/chambre/chambre_update.php" method="post">
                                <div class="formulaire">
                                    <div><!--Modifier si num : --></div>
                                    <div><input type="hidden" name="num"  value="<?php echo htmlspecialchars($_GET['num']); ?>" required="required"/></div>
                                    <!-- champs -->
                                    <div>Nb places : </div>
                                    <div><input type="number" name="nb_place" /></div>
                                    <div>Prix / nuits : </div>
                                    <div><input type="text" name="prixnuit"/></div>
                                    <div>Exposition : </div>
                                    <div class="radio radio-expo">
                                        <div class="radio-item"> N <input type="radio" name="expo" value="N"/> </div> 
                                        <div class="radio-item"> S <input type="radio" name="expo" value="S"/> </div> 
                                        <div class="radio-item"> E <input type="radio" name="expo" value="E"/> </div> 
                                        <div class="radio-item"> W <input type="radio" name="expo" value="W"/> </div> 
                                    </div>
                                    <div>Étage : </div>
                                    <div>
                                        <select name="etage">
                                            <option value="">---- Select stage ----</option>
                                            <option value="0">Stage 0</option>
                                            <option value="1">Stage 1</option>
                                            <option value="2">Stage 2</option>
                                            <option value="3">Stage 3</option>
                                            <option value="4">Stage 4</option>
                                            <option value="5">Stage 5</option>
                                            <option value="6">Stage 6</option>
                                        </select>
                                    </div>
                                    <!-- <div>Disponibilité : </div>
                                    <div class="radio radio-dispo"> YES <input type="radio" name="dispo" value="1"/> NO <input type="radio" name="dispo" value="0"/></div> -->
                                    <!-- Champs -->
                                    
                                </div>
                                <button type="submit" class="boutton">Modifier</button>
                            </form>
                        </div>

                        <div class="trier-bdd" id="trier-bdd">
                            <div class="head-act-bdd">
                                <p>Trier</p>
                            </div>
                            <form action="chambre.php" method="get">
                                <div class="formulaire">
                                    <div>Trier par : </div>
                                    <div>
                                        <select name="tri" required="required">
                                            <option value="">---- Select ----</option>
                                            <option value="num">Num</option>
                                            <option value="nb_place">Nb places</option>
                                            <option value="prix/nuit">Prix / nuits</option>
                                            <option value="expo">Exposition</option>
                                            <option value="etage">Étage</option>
                                            <option value="dispo">Disponibilité</option>
                                        </select>
                                    </div>
                                    <div>Ordre : </div>
                                    <div class="radio">
                                        <img src="image/croissant2.png" alt="croissant">
                                        <input type="radio" name="sens" value="ASC"/>
                                        <img src="image/decroissant2.png" alt="decroissant">
                                        <input type="radio" name="sens" value="DESC"/>
                                    </div>
                                </div>
                                <button type="submit" class="boutton user-bouton">Trier</button>
                            </form>
                        </div>

                        <div class="search-bdd" id="search-bdd">
                            <div class="head-act-bdd">
                                <p>Rechercher</p>
                            </div>
                            
                            <form action="chambre.php" method="get">
                                <div class="formulaire">
                                    <div>Rechercher dans : </div>
                                    <div>
                                        <select name="searchType" required="required">
                                            <option value="">---- Select ----</option>
                                            <option value="num">Num</option>
                                            <option value="nb_place">Nb place</option>
                                            <option value="prix/nuit">Prix / Nuit</option>
                                            <option value="expo">Exposition</option>
                                            <option value="etage">Étage</option>
                                            <option value="dispo">Disponibilité</option>
                                        </select>
                                    </div>
                                    <div>Rechercher : </div>
                                    <div><input type="text" name="search" required="required"/></div>
                                </div>
                                <button type="submit" class="boutton user-bouton">Rechercher</button>
                            </form>
                        </div>
                            
                    </div>
                            
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>

