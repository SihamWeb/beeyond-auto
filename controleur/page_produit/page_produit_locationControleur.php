<?php 

// AFFICHER LA PAGE CAR-PAGE AVEC LES DONNEES DE LA VOITURE SELECTIONNEE

if(isset($_GET) && count($_GET)){

    if (array_key_exists('idCarLocation', $_GET) 
    && !empty($_GET['idCarLocation'])){
        
        settype($_GET['idCarLocation'],"integer");
            
        if (gettype($_GET['idCarLocation']) === 'integer'){

            car_page_location();
            
        }
    }
}

// SYSTEME DE CHOIX DES DATES DE LOCATION

$verification_dates = 0;

    // CHOIX DATE DE DEBUT DE LOCATION
    if(isset($_GET) && count($_GET)){
        
        if (array_key_exists('choixdatedebut', $_GET) 
        && !empty($_GET['choixdatedebut'])
        && array_key_exists('idPageLocation', $_GET) 
        && !empty($_GET['idPageLocation'])){

            settype($_GET['idPageLocation'], 'integer');

            choix_date_debut();
            
        }
    }

    // CHOIX DATE DE FIN DE LOCATION
    
    if(isset($_GET) && count($_GET)){

        if (array_key_exists('choixdatefin', $_GET) 
        && !empty($_GET['choixdatefin'])
        && array_key_exists('idPageLocation', $_GET) 
        && !empty($_GET['idPageLocation'])){

            settype($_GET['idPageLocation'], 'integer');

            choix_date_fin();
            
        }
    }

?>