<?php

include('../php/link_db.php');
include('../php/isLoged.php');
itsAllowed(10);

if (array_key_exists('date_candid', $_GET) and !empty($_GET['date_candid']) and
    array_key_exists('entreprise', $_GET) and !empty($_GET['entreprise']) and
    array_key_exists('activite_secteur', $_GET) and !empty($_GET['activite_secteur']) and
    array_key_exists('ville', $_GET) and !empty($_GET['ville']) and
    array_key_exists('poste', $_GET) and !empty($_GET['poste']) and
    array_key_exists('contact_nom', $_GET) and !empty($_GET['contact_nom']) and
    array_key_exists('contact_tel', $_GET) and !empty($_GET['contact_tel']) and
    array_key_exists('contact_mail', $_GET) and !empty($_GET['contact_mail']) and
    array_key_exists('date_relance', $_GET) and !empty($_GET['date_relance']) and
    array_key_exists('etat', $_GET) and !empty($_GET['etat']) and
    array_key_exists('commentaire', $_GET) and !empty($_GET['commentaire'])) {
        $date_candid = $_GET['date_candid'];
        $entreprise = $_GET['entreprise'];
        $activite_secteur = $_GET['activite_secteur'];
        $ville = $_GET['ville'];
        $poste = $_GET['poste'];
        $contact_nom = $_GET['contact_nom'];
        $contact_tel = $_GET['contact_tel'];
        $contact_mail = $_GET['contact_mail'];
        $date_relance = $_GET['date_relance'];
        $etat = $_GET['etat'];
        $commentaire = $_GET['commentaire'];

        $sql = "INSERT INTO `tableau-recherche-stage`
                    (`date_candid`, `entreprise`, `activite_secteur`, `ville`, `poste`, `contact_nom`, `contact_tel`, `contact_mail`, `date_relance`, `etat`, `commentaire`) 
                    VALUES 
                    ('$date_candid', '$entreprise', '$activite_secteur', '$ville', '$poste', '$contact_nom', '$contact_tel', '$contact_mail', '$date_relance', '$etat', '$commentaire')";
        $requete = $db->query($sql);

        header("Refresh:0; url=/tableau-suivi-stage/index.php");
    }




