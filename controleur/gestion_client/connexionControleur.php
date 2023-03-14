<?php

include '../../../modele/gestion_client/connexion.php';

if (isset($_POST['submit_connexion'])) { // Clique sur le bouton de soumission

    $correct = 0;  

    if ($_POST && count($_POST)) { // Vérification si le formulaire a bien été transmis

        if (
            // Vérifier si la variable $username existe
            (isset($username))&&
            // Vérifier que la variable est de type alphanumérique
            (ctype_alnum($username))&&
            // Vérifier qu'un pseudo a été saisi
            (!empty($username))&&
            // Vérifier le format
            (preg_match("/^[a-zA-Z0-9]+$/", $username))&& 
            ((strlen($username) <= 25)&&(strlen($username) >= 3))&&
            // Vérification si le pseudo existe déjà dans la BDD
            ($data_login)
        ){

            $correct++;

            if (
                // Vérifier si la variable $motdepasse existe
                (isset($motdepasse))&&
                // Vérifier que la variable est de type chaîne de caractères
                (is_string($motdepasse))&&
                // Vérifier qu'un mot de passe a été saisi
                (!empty($motdepasse))&&
                // Vérifier le format
                (strlen($motdepasse) >= 8)&&
                (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_])(?=.*\\d).+$/", $motdepasse))&&

                // Tester si la variable $correct existe
                (isset($correct))&&
                // Vérifier si la variable est de type numérique
                (is_numeric($correct))&&
                // Vérifier si la variable a bien un résultat
                (!empty($correct))&&
                // Vérification si la variable est égal à 1 : validation du pseudo (+ validation du mot de passe dans cette condition)
                ($correct == 1)&&
                // Vérification si le mot de passe et le pseudo correspondent bien 
                (password_verify($motdepasse, $data_login['motdepasse']))
            ) {
            
                header('Location: mon-compte.php'); // Redirection vers la page compte quand l'utilisateur se connecte
                $_SESSION['utilisateurs'] = $data_login;

            } else {

                $login_incorrect= 'Identifiants invalides'; // Message d'erreur 
            }

        } else {

            $login_incorrect= 'Identifiants invalides'; // Message d'erreur 
        }
    }
    $verif_login->closeCursor();
}

?>