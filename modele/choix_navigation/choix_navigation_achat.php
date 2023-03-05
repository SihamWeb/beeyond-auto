<?php
    /*-----------------------------------------------------------
    Afficher de manière distincte les états présentes dans la bdd 
    -----------------------------------------------------------*/
    function achat_navigation_a_facettes_etats() {
        $_SESSION['achat_etat'] = array();
        global $o_bdd;

        $requete = $o_bdd->query('SELECT DISTINCT etat FROM vehicules ORDER BY etat ASC');
        while ($data = $requete->fetch())
        {
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else
            {
                array_push($_SESSION['achat_etat'], $data['etat']);
            }
        }
        $requete->closeCursor();
    }
    achat_navigation_a_facettes_etats();

    /*-------------------------------------------------------------
    Afficher de manière distincte les marques présentes dans la bdd 
    -------------------------------------------------------------*/
    function achat_navigation_a_facettes_marques() {
        $_SESSION['achat_marque'] = array();
        global $o_bdd;

        $requete = $o_bdd->query('SELECT DISTINCT marque FROM vehicules ORDER BY marque ASC');
        while ($data = $requete->fetch())
        {
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else
            {
                array_push($_SESSION['achat_marque'], $data['marque']);
            }
        }
        $requete->closeCursor();
    }
    achat_navigation_a_facettes_marques();

    /*----------------------------------------------------------------------
    Afficher de manière distincte les types de voitures présents dans la bdd 
    ----------------------------------------------------------------------*/
    function achat_navigation_a_facettes_types() {
        $_SESSION['achat_type'] = array();
        global $o_bdd;

        $requete = $o_bdd->query('SELECT DISTINCT type FROM vehicules ORDER BY type ASC');
        while ($data = $requete->fetch())
        {
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else
            {
                array_push($_SESSION['achat_type'], $data['type']);
            }
        }
        $requete->closeCursor();
    }
    achat_navigation_a_facettes_types();

    /*----------------------------------------------------------------------
    Afficher de manière distincte les nombres de places présents dans la bdd
    ----------------------------------------------------------------------*/
    function achat_navigation_a_facettes_places() {
        $_SESSION['achat_place'] = array();
        global $o_bdd;

        $requete = $o_bdd->query('SELECT DISTINCT nombredeplaces FROM vehicules ORDER BY nombredeplaces ASC');
        while ($data = $requete->fetch())
        {
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else
            {
                array_push($_SESSION['achat_place'], $data['nombredeplaces']);
            }
        }
        $requete->closeCursor();
    }
    achat_navigation_a_facettes_places();

    /*----------------------------------------------------------------------
    Afficher de manière distincte les nombres de portes présents dans la bdd
    ----------------------------------------------------------------------*/
    function achat_navigation_a_facettes_portes() {
        $_SESSION['achat_porte'] = array();
        global $o_bdd;

        $requete = $o_bdd->query('SELECT DISTINCT nombredeportes FROM vehicules ORDER BY nombredeportes ASC');
        while ($data = $requete->fetch())
        {
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else
            {
                array_push($_SESSION['achat_porte'], $data['nombredeportes']);
            }
        }
        $requete->closeCursor();
    }
    achat_navigation_a_facettes_portes();
?>