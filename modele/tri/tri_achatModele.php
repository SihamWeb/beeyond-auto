<?php

if(isset($_GET) && count($_GET)){

    /*-------------------------------------------------------------
    Résultat afficher de la plus ancienne à la plus récente
    -------------------------------------------------------------*/
    if (array_key_exists('tri_achat', $_GET) 
    && !empty($_GET['tri_achat'])) {
        
        $tri_achat = strip_tags ($_GET['tri_achat']);

        if (gettype($tri_achat) === 'string'){

            $_tri_achat = array(
                "achat_prix_croissant",
                "achat_prix_decroissant",
                "achat_annee_croissant",
                "achat_annee_decroissant"
            );

            if (in_array($tri_achat, $_tri_achat)
            && $tri_achat === 'achat_annee_croissant') {
            
                function achat_resultat_tri_annee_croissant() {
                    $_SESSION['achat'] = array();
                    global $o_bdd;
                    global $premier_article_achat;
                    global $nb_vehicules_achat_par_page;
        
                    $requete = $o_bdd->prepare('SELECT * FROM vehicules ORDER BY anneedesortie ASC LIMIT :premier_article_achat, :nb_vehicules_achat_par_page');
                    
                    $requete->bindValue('premier_article_achat', $premier_article_achat,PDO::PARAM_INT);
                    $requete->bindValue('nb_vehicules_achat_par_page', $nb_vehicules_achat_par_page,PDO::PARAM_INT);
        
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
                            array_push($_SESSION['achat'], $data);
                        }
                    }
                    $requete->closeCursor();
                }
                achat_resultat_tri_annee_croissant();	
            }
        }
    }

    /*-------------------------------------------------------------
    Résultat afficher de la plus récente à la plus ancienne
    -------------------------------------------------------------*/
    if (array_key_exists('tri_achat', $_GET) 
    && !empty($_GET['tri_achat'])) {
        
        $tri_achat = $_GET['tri_achat'];

        if (gettype($tri_achat) === 'string'){

            $_tri_achat = array(
                "achat_prix_croissant",
                "achat_prix_decroissant",
                "achat_annee_croissant",
                "achat_annee_decroissant"
            );

            if (in_array($tri_achat, $_tri_achat)
            && $tri_achat === 'achat_annee_decroissant') {
            
                function achat_resultat_tri_annee_decroissant() {
                    $_SESSION['achat'] = array();
                    global $o_bdd;
                    global $premier_article_achat;
                    global $nb_vehicules_achat_par_page;
        
                    $requete = $o_bdd->prepare('SELECT * FROM vehicules ORDER BY anneedesortie DESC LIMIT :premier_article_achat, :nb_vehicules_achat_par_page');
                    
                    $requete->bindValue('premier_article_achat', $premier_article_achat,PDO::PARAM_INT);
                    $requete->bindValue('nb_vehicules_achat_par_page', $nb_vehicules_achat_par_page,PDO::PARAM_INT);
        
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
                            array_push($_SESSION['achat'], $data);
                        }
                    }
                    $requete->closeCursor();
                }
                achat_resultat_tri_annee_decroissant();		
            }
        }
    }

    /*-------------------------------------------------------------
    Résultat afficher de la moins chère à la plus chère
    -------------------------------------------------------------*/
    if (array_key_exists('tri_achat', $_GET) 
    && !empty($_GET['tri_achat'])) {
        
        $tri_achat = $_GET['tri_achat'];

        if (gettype($tri_achat) === 'string'){

            $_tri_achat = array(
                "achat_prix_croissant",
                "achat_prix_decroissant",
                "achat_annee_croissant",
                "achat_annee_decroissant"
            );

            if (in_array($tri_achat, $_tri_achat)
            && $tri_achat === 'achat_prix_croissant') {
            
                function achat_resultat_tri_prix_croissant() {
                    $_SESSION['achat'] = array();
                    global $o_bdd;
                    global $nb_vehicules_achat_par_page;
                    global $premier_article_achat;
        
                    $requete = $o_bdd->prepare('SELECT * FROM vehicules ORDER BY prix_vente ASC LIMIT :premier_article_achat, :nb_vehicules_achat_par_page');
                    
                    $requete->bindValue('premier_article_achat', $premier_article_achat,PDO::PARAM_INT);
                    $requete->bindValue('nb_vehicules_achat_par_page', $nb_vehicules_achat_par_page,PDO::PARAM_INT);
        
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
                            array_push($_SESSION['achat'], $data);
                        }
                    }
                    $requete->closeCursor();
                }
                achat_resultat_tri_prix_croissant();	
            }
        }
    }
    
    /*-------------------------------------------------------------
    Résultat afficher de la plus chère à la moins chère
    -------------------------------------------------------------*/
    if (array_key_exists('tri_achat', $_GET) 
    && !empty($_GET['tri_achat'])) {
        
        $tri_achat = $_GET['tri_achat'];

        if (gettype($tri_achat) === 'string'){

            $_tri_achat = array(
                "achat_prix_croissant",
                "achat_prix_decroissant",
                "achat_annee_croissant",
                "achat_annee_decroissant"
            );

            if (in_array($tri_achat, $_tri_achat)
            && $tri_achat === 'achat_prix_decroissant') {
            
                function achat_resultat_tri_prix_decroissant() {
                    $_SESSION['achat'] = array();
                    global $o_bdd;
                    global $nb_vehicules_achat_par_page;
                    global $premier_article_achat;
        
                    $requete = $o_bdd->prepare('SELECT * FROM vehicules ORDER BY prix_vente DESC LIMIT :premier_article_achat, :nb_vehicules_achat_par_page');
                    
                    $requete->bindValue('premier_article_achat', $premier_article_achat,PDO::PARAM_INT);
                    $requete->bindValue('nb_vehicules_achat_par_page', $nb_vehicules_achat_par_page,PDO::PARAM_INT);
        
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
                            array_push($_SESSION['achat'], $data);
                        }
                    }
                    $requete->closeCursor();
                }
                achat_resultat_tri_prix_decroissant();			
            }
        }
    }
}

?>