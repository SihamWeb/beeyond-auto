<?php

if(isset($_GET) && count($_GET)){

    /*-------------------------------------------------------------
    Résultat afficher de la plus ancienne à la plus récente
    -------------------------------------------------------------*/
    if (array_key_exists('tri_location', $_GET) 
    && !empty($_GET['tri_location'])) {
        
        $tri_location = strip_tags ($_GET['tri_location']);

        if (gettype($tri_location) === 'string'){

            $_tri_location = array(
                "location_prix_croissant",
                "location_prix_decroissant",
                "location_annee_croissant",
                "location_annee_decroissant"
            );

            if (in_array($tri_location, $_tri_location)
            && $tri_location === 'location_annee_croissant') {
            
                function louer_resultat_tri_annee_croissant() {
                    $_SESSION['louer'] = array();
                    global $o_bdd;
                    global $nb_vehicules_louer_par_page;
                    global $premier_article_louer;
        
                    $requete = $o_bdd->prepare('SELECT * FROM vehicules_location ORDER BY anneedesortie ASC LIMIT :premier_article_louer, :nb_vehicules_louer_par_page');
                    
                    $requete->bindValue('premier_article_louer', $premier_article_louer,PDO::PARAM_INT);
                    $requete->bindValue('nb_vehicules_louer_par_page', $nb_vehicules_louer_par_page,PDO::PARAM_INT);
        
                    $requete->execute();
                    
                    while ($data = $requete->fetch())
                    {
                        if (!$data) // On teste si la réponse à la requête est vide.
                        {
                            echo 'La BDD n\'existe pas ou est vide.';
                            break;
                        }
                        else
                        {
                            array_push($_SESSION['louer'], $data);
                        }
                    }
                    $requete->closeCursor();
                }
                louer_resultat_tri_annee_croissant();	
            }
        }
    }
    
    /*-------------------------------------------------------------
    Résultat afficher de la plus récente à la plus ancienne
    -------------------------------------------------------------*/
    if (array_key_exists('tri_location', $_GET) 
    && !empty($_GET['tri_location'])) {
        
        $tri_location = $_GET['tri_location'];

        if (gettype($tri_location) === 'string'){

            $_tri_location = array(
                "location_prix_croissant",
                "location_prix_decroissant",
                "location_annee_croissant",
                "location_annee_decroissant"
            );

            if (in_array($tri_location, $_tri_location)
            && $tri_location === 'location_annee_decroissant') {
            
                function louer_resultat_tri_annee_decroissant() {
                    $_SESSION['louer'] = array();
                    global $o_bdd;
                    global $nb_vehicules_louer_par_page;
                    global $premier_article_louer;
        
                    $requete = $o_bdd->prepare('SELECT * FROM vehicules_location ORDER BY anneedesortie DESC LIMIT :premier_article_louer, :nb_vehicules_louer_par_page');
                    
                    $requete->bindValue('premier_article_louer', $premier_article_louer,PDO::PARAM_INT);
                    $requete->bindValue('nb_vehicules_louer_par_page', $nb_vehicules_louer_par_page,PDO::PARAM_INT);
        
                    $requete->execute();
                    
                    while ($data = $requete->fetch())
                    {
                        if (!$data) // On teste si la réponse à la requête est vide.
                        {
                            echo 'La BDD n\'existe pas ou est vide.';
                            break;
                        }
                        else
                        {
                            array_push($_SESSION['louer'], $data);
                        }
                    }
                    $requete->closeCursor();
                }
                louer_resultat_tri_annee_decroissant();		
            }
        }
    }

    /*-------------------------------------------------------------
    Résultat afficher de la moins chère à la plus chère
    -------------------------------------------------------------*/
    if (array_key_exists('tri_location', $_GET) 
    && !empty($_GET['tri_location'])) {
        
        $tri_location = $_GET['tri_location'];

        if (gettype($tri_location) === 'string'){

            $_tri_location = array(
                "location_prix_croissant",
                "location_prix_decroissant",
                "location_annee_croissant",
                "location_annee_decroissant"
            );

            if (in_array($tri_location, $_tri_location)
            && $tri_location === 'location_prix_croissant') {
            
                function louer_resultat_tri_prix_croissant() {
                    $_SESSION['louer'] = array();
                    global $o_bdd;
                    global $nb_vehicules_louer_par_page;
                    global $premier_article_louer;
        
                    $requete = $o_bdd->prepare('SELECT * FROM vehicules_location ORDER BY prix_journalier ASC LIMIT :premier_article_louer, :nb_vehicules_louer_par_page');
                    
                    $requete->bindValue('premier_article_louer', $premier_article_louer,PDO::PARAM_INT);
                    $requete->bindValue('nb_vehicules_louer_par_page', $nb_vehicules_louer_par_page,PDO::PARAM_INT);
        
                    $requete->execute();
                    
                    while ($data = $requete->fetch())
                    {
                        if (!$data) // On teste si la réponse à la requête est vide.
                        {
                            echo 'La BDD n\'existe pas ou est vide.';
                            break;
                        }
                        else
                        {
                            array_push($_SESSION['louer'], $data);
                        }
                    }
                    $requete->closeCursor();
                }
                louer_resultat_tri_prix_croissant();
            }
        }
    }
    
    /*-------------------------------------------------------------
    Résultat afficher de la plus chère à la moins chère
    -------------------------------------------------------------*/
    if (array_key_exists('tri_location', $_GET) 
    && !empty($_GET['tri_location'])) {
        
        $tri_location = $_GET['tri_location'];

        if (gettype($tri_location) === 'string'){

            $_tri_location = array(
                "location_prix_croissant",
                "location_prix_decroissant",
                "location_annee_croissant",
                "location_annee_decroissant"
            );

            if (in_array($tri_location, $_tri_location)
            && $tri_location === 'location_prix_decroissant') {

                function louer_resultat_tri_prix_decroissant() {
                    $_SESSION['louer'] = array();
                    global $o_bdd;
                    global $nb_vehicules_louer_par_page;
                    global $premier_article_louer;
            
                    $requete = $o_bdd->prepare('SELECT * FROM vehicules_location ORDER BY prix_journalier DESC LIMIT :premier_article_louer, :nb_vehicules_louer_par_page');
                    
                    $requete->bindValue('premier_article_louer', $premier_article_louer,PDO::PARAM_INT);
                    $requete->bindValue('nb_vehicules_louer_par_page', $nb_vehicules_louer_par_page,PDO::PARAM_INT);
            
                    $requete->execute();
                    
                    while ($data = $requete->fetch())
                    {
                        if (!$data) // On teste si la réponse à la requête est vide.
                        {
                            echo 'La BDD n\'existe pas ou est vide.';
                            break;
                        }
                        else
                        {
                            array_push($_SESSION['louer'], $data);
                        }
                    }
                    $requete->closeCursor();
                }

                louer_resultat_tri_prix_decroissant();	

            }
        }
    }
}
?>