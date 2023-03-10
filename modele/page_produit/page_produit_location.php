<?php

// AFFICHER LA PAGE CAR-PAGE AVEC LES DONNEES DE LA VOITURE SELECTIONNEE

function car_page_location() {
    $_SESSION['car_page_location'] = array();
    
    global $o_bdd;

    $requete = $o_bdd->prepare('SELECT * FROM vehicules_location WHERE id = :idcarlocation');
    $requete -> bindValue(':idcarlocation', $_GET['idCarLocation'], PDO::PARAM_INT);
    $requete -> execute();

    while ($data = $requete->fetch())
    {
        if (!$data) // On teste si la réponse à la requête est vide.
        {
            echo 'La BDD n\'existe pas ou est vide.';
            break;
        }
        else
        {
            array_push($_SESSION['car_page_location'], $data);
        }
    }
    $requete->closeCursor();
}

// SYSTEME DE CHOIX DES DATES DE LOCATION

    // CHOIX DATE DE DEBUT DE LOCATION
    function choix_date_debut() {
        $_SESSION['choixdatedebut'] = array();
        $choixdatedebut = $_GET['choixdatedebut'];
        $idpagelocation = $_GET['idPageLocation'];

        global $o_bdd;
        
        $requete = $o_bdd->prepare("SELECT * FROM `location` WHERE idvehicule = :idpagelocation AND 'debutlocation' <= ':choixdatedebut' >= 'finlocation'");
        $requete -> bindValue(':choixdatedebut', $_GET['choixdatedebut'], PDO::PARAM_STR);
        $requete -> bindValue(':idvehicule', $_GET['idPageLocation'], PDO::PARAM_INT);
        echo $requete;
        $requete -> execute();

        while ($data = $requete->fetch())
        {
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                $verification_dates++;
                echo $_GET['choixdatedebut'];
                break;
            }
            else
            {
                echo 'Veuillez choisir une autre date de départ';
            }
        }
        $requete->closeCursor();
    }

    // CHOIX DATE DE FIN DE LOCATION

    function choix_date_fin() {
        $_SESSION['choixdatefin'] = array();
        $choixdatedebut = $_GET['choixdatefin'];
        $idpagelocation = $_GET['idPageLocation'];

        global $o_bdd;
        
        $requete = $o_bdd->prepare("SELECT * FROM `location` WHERE idvehicule = :idpagelocation AND 'debutlocation' <= ':choixdatefin' >= 'finlocation'");
        $requete -> bindValue(':choixdatefin', $_GET['choixdatefin'], PDO::PARAM_STR);
        $requete -> bindValue(':idvehicule', $_GET['idPageLocation'], PDO::PARAM_INT);
        $requete -> execute();

        while ($data = $requete->fetch())
        {
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                $verification_dates++;
                echo $_GET['choixdatefin'];
                break;
            }
            else
            {
                echo 'Veuillez choisir une autre date de retour';
            }
        }
        $requete->closeCursor();
    }

?>