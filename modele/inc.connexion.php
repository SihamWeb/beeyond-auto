<?php
	// Param�tres de connexion
	$serveur  = "localhost:3306";
	$database = "beeyondauto";
	$user     = "beeyondauto";
	$password = "[Ty0Jab57rmpYbK8";
	
	// CONNEXION A LA BASE DE DONNEES mysql //
	/* 
		La structure try ... catch permet de r�aliser les actions suivantes :
		PHP essaie d'ex�cuter les instructions pr�sentes � l'int�rieur du bloc "try"
		En cas d'erreur, les instructions du bloc "catch" sont ex�cut�es.
		Dans ce cas, un message d'erreur est affich�.
	*/
	try
	{
		// Connexion � la base de donn�es
		// $bdd est un objet correspondant � la connexion � la BDD
		$bdd=new PDO('mysql:host='.$serveur.';charset=utf8;dbname='.$database.'',$user,$password);
		
		/* La ligne ci-dessous permet d'activer les erreurs lors de la connexion � la BDD via PDO.
		Les messages d'erreur li� � des requ�tes SQL comportant des erreurs seront plus clairs. */
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e)
	{
		// On lance une fonction PHP qui permet de conna�tre l'erreur renvoy�e lors de la connection � la base (en r�cup�rant le message li� � l'exception)
		die('<strong>Erreur d�tect�e !!! </strong> : ' . $e->getMessage());
	}
?>