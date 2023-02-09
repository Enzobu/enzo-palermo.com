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
                <div class="global-container global-resa">
                    <h1>Réservations</h1>

                    <br><br>
                    <div class="responsive"></div>
                    <?php
                        include("php/link_db.php");

                        $url = $_SERVER['REQUEST_URI'];
                        $url = strstr($url,'?');
                        $url = substr($url, 1, 100);

                        if(!empty($url)) {
                            if(substr($url, 0, 3) == 'tri') {
                                $tri = htmlspecialchars($_GET['tri']);
                                $sens = htmlspecialchars($_GET['sens']);
                                $sql = "SELECT * FROM `resa` ORDER BY `$tri` $sens";
                            }
                            else if(substr($url, 0, 10) == 'searchType') {
                                $searchType = htmlspecialchars($_GET['searchType']);
                                $search = htmlspecialchars($_GET['search']);
                                $sql = "SELECT * FROM `resa` WHERE `$searchType` = '$search'";
                            } else {
                                $sql = "SELECT * FROM `resa` ORDER BY `id_resa` ASC";
                            }
                        } else {
                            $sql = "SELECT * FROM `resa` ORDER BY `id_resa` ASC";
                        }

                        $requete = $db->query($sql);
                        $resa = $requete->fetchAll();
                        
                        $sql = "SELECT * FROM `chambre` ORDER BY `num` DESC";
                        $requete = $db->query($sql);
                        $chambres = $requete->fetchAll();

                        $sql = "SELECT * FROM `user` ORDER BY `id` ASC";
                        $requete = $db->query($sql);
                        $users = $requete->fetchAll();
                    ?>

                        <div class="bouton-haut">
                            <div class="insert-line">
                                <a href="#afficher" class="afficher">Ajouter une ligne</a>
                                <a href="resa.php" class="masquer">Ajouter une ligne</a> 
                            </div>
                            <div class="supp-all">
                                <a href="php/gestion_BDD/resa/resa_delete.php?id_resa=all">Tout Supprimer</a>
                            </div>
                            <div class="trier">
                                <a href="#afficher3" class="afficher3">Trier</a>
                                <a href="resa.php" class="masquer3">Trier</a> 
                            </div>
                            <div class="search">
                                <a href="#afficher4" class="afficher4">Rechercher</a>
                                <a href="resa.php" class="masquer4">Rechercher</a> 
                            </div>
                        </div>

                        <table>
                            <tr>
                                <th> Actions </th>
                                <th> id Resa </td>
                                <th> id Utilisateurs</td>
                                <th> Num Chambre</td>
                                <th> Prix </td>
                                <th> Date début </td>
                                <th> Date fin </td>
                                <th> État </td>
                            </tr>
                            <?php foreach ($resa as $reservation){ ?>
                            <tr>
                                <td class="table-center"> 
                                    <a href="php/gestion_BDD/resa/resa_delete.php?id_resa=<?php echo $reservation['id_resa']; ?>"><img src="image/effacer.png" alt="logo effacer"></a>
                                    <a href="?id_resa=<?php echo $reservation['id_resa']; ?>#afficher2" class="afficher2"><img src="image/modifier.png" alt="logo modifier"></a>
                                    <a href="resa.php" class="masquer2"><img src="image/modifier.png" alt="logo modifier"></a>
                                </td>
                                <td> <?php echo $reservation['id_resa']; ?> </td>
                                <td> <?php echo $reservation['id_user']; ?> </td>
                                <td> <?php echo $reservation['num_chambre']; ?> </td>
                                <td> 
                                    <?php
                                        $numch = $reservation['num_chambre'];
                                        $sql = "SELECT `prix/nuit` FROM `chambre` WHERE `num`= '$numch'";
                                        $requete = $db->query($sql);
                                        $prixnt = $requete->fetchAll();
                                        $duree = ((int)substr($reservation['d_fin'], 8, 10)) - ((int)substr($reservation['d_debut'], 8, 10));
                                        $prix = (int)$prixnt[0]['prix/nuit'] * $duree;
                                        $id = $reservation['id_resa'];
                                        $sql = "UPDATE `resa` SET `prix` = $prix WHERE `id_resa` = $id ";
                                        $requete = $db->query($sql);
                                        echo $reservation['prix'];
                                    ?> 
                                </td>
                                <td> <?php echo $reservation['d_debut']; ?> </td>
                                <td> <?php echo $reservation['d_fin']; ?> </td>
                                <td> 
                                    <?php 
                                        $days = date("d");
                                        $mons = date("m");
                                        $years = date("Y");
                                        $date = $years.'-'.$mons.'-'.$days;
                                        if ($reservation['d_debut'] > $date) {
                                            echo 'A venir';
                                        } else if ($reservation['d_fin'] < $date){
                                            echo 'Terminé';
                                        } else {
                                            echo 'En cours';
                                        }
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
                            <form action="php/gestion_BDD/resa/resa_insert.php" method="post">
                                <div class="formulaire">
                                    <div>Utilisateurs : </div>
                                    <div>
                                        <select name="id_user">
                                            <option value="">---- Select user ----</option>
                                            <?php foreach ($users as $user){ ?>
                                                <option value="<?php echo $user['id']; ?>"><?php echo $user['nom']; ?> <?php echo $user['prenom']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div>Chambre : </div>
                                    <div>
                                        <select name="num_chambre">
                                            <option value="">---- Select room ----</option>
                                            <?php foreach ($chambres as $chambre){ ?>
                                                <option value="<?php echo $chambre['num']; ?>"> n° <?php echo $chambre['num']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>                                        
                                    <!-- <div>Prix : </div>
                                    <div><input type="text" name="prix" required="required"/></div> -->
                                    <div>Date début : </div>
                                    <div><input type="date" name="d_debut" required="required"/></div>
                                    <div>Date fin : </div>
                                    <div><input type="date" name="d_fin" required="required"/></div>
                                    <!-- <div>État : </div>
                                    <div><input type="text" name="etat" /></div> -->
                                </div>
                                <button type="submit" class="boutton">Ajouter</button>
                            </form>
                        </div>
                        
                        <br><br>
                            
                        <div class="update-bdd" id="update-bdd">
                            <div class="head-act-bdd">
                                <p>Modifier une ligne</p>
                            </div>
                            <form action="php/gestion_BDD/resa/resa_update.php" method="post">
                                <div class="formulaire">
                                    <div> <!-- Modifier si id : --> </div>
                                    <div><input type="hidden" name="id_resa"  value="<?php echo htmlspecialchars($_GET['id_resa']); ?>" required="required"/></div>
                                    <div>Utilisateurs : </div>
                                    <div>
                                        <select name="id_user">
                                            <option value="">---- Select user ----</option>
                                            <?php foreach ($users as $user){ ?>
                                                <option value="<?php echo $user['id']; ?>"><?php echo $user['nom']; ?> <?php echo $user['prenom']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div>Chambre : </div>
                                    <div>
                                        <select name="num_chambre">
                                            <option value="">---- Select room ----</option>
                                            <?php foreach ($chambres as $chambre){ ?>
                                                <option value="<?php echo $chambre['num']; ?>"> n° <?php echo $chambre['num']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div>Prix : </div>
                                    <!-- <div><input type="text" name="prix"/></div>
                                    <div>Date début : </div> -->
                                    <div><input type="date" name="d_debut"/></div>
                                    <div>Date fin : </div>
                                    <div><input type="date" name="d_fin"/></div>
                                    <!-- <div>État : </div>
                                    <div><input type="text" name="etat"/></div> -->
                                </div>
                                <button type="submit" class="boutton">Modifier</button>
                            </form>
                        </div>

                        <div class="trier-bdd" id="trier-bdd">
                            <div class="head-act-bdd">
                                <p>Trier</p>
                            </div>
                            <form action="resa.php" method="get">
                                <div class="formulaire">
                                    <div>Trier par : </div>
                                    <div>
                                        <select name="tri" required="required">
                                            <option value="">---- Select ----</option>
                                            <option value="id_resa">id Resa</option>
                                            <option value="id_user">id Utilisateurs</option>
                                            <option value="num_chambre">Num chambre</option>
                                            <option value="prix">Prix</option>
                                            <option value="d_debut">Date début</option>
                                            <option value="d_fin">Date fin</option>
                                            <option value="d_debut">État</option>
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
                            
                            <form action="resa.php" method="get">
                                <div class="formulaire">
                                    <div>Rechercher dans : </div>
                                    <div>
                                        <select name="searchType" required="required">
                                            <option value="">---- Select ----</option>
                                            <option value="id_resa">Id resa</option>
                                            <option value="id_user">id Utilisateurs</option>
                                            <option value="num_chambre">Num Chambre</option>
                                            <option value="prix">Prix</option>
                                            <option value="d_debut">Date début</option>
                                            <option value="d_fin">Date Fin</option>
                                            <option value="etat">État</option>
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

