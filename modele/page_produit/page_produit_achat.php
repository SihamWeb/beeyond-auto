<?php

// AFFICHER LA PAGE CAR-PAGE AVEC LES DONN2ES DE LA VOITURE SELECTIONNEE

function car_page_achat() {
    $_SESSION['car_page_achat'] = array();
    global $o_bdd;

    $requete = $o_bdd->prepare('SELECT * FROM vehicules WHERE id = :idcarachat');
    $requete -> bindValue(':idcarachat', $_GET['idCarAchat'], PDO::PARAM_INT);
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
            array_push($_SESSION['car_page_achat'], $data);
        }
    }
    $requete->closeCursor();
}

?>