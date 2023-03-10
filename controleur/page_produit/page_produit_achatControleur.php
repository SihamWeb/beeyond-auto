<?php 

// AFFICHER LA PAGE CAR-PAGE AVEC LES DONN2ES DE LA VOITURE SELECTIONNEE
if(isset($_GET) && count($_GET)){

    if (array_key_exists('idCarAchat', $_GET) 
    && !empty($_GET['idCarAchat'])){

        settype($_GET['idCarAchat'],"integer");
            
        if (gettype($_GET['idCarAchat']) === 'integer') {

            car_page_achat();
            
        }
    }
}

?>