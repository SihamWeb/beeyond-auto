<?php
    global $o_bdd;

	$limit = '9';
	$page = 1;
	if(isset($_POST['page'])){
		if($_POST['page'] > 1) {
			$start = (($_POST['page'] - 1) * $limit);
			$page = $_POST['page'];
		  } else {
			$start = 0;
		  }
	}else{
		$start = 0;
	}

	$query = "SELECT * FROM vehicules";
	if(isset($_POST["search_text"]) && !empty($_POST["search_text"])){
		if($_POST["search_text"]!=" "){
	 		$query .= " AND title LIKE '%".$_POST["search_text"]."%'";
		}
	}
	if(isset($_POST["choice_etat"])){
		$types_filter = implode("','", $_POST["choice_etat"]);
		$query .= " AND `etat` IN('".$types_filter."')";
	}

	if(isset($_POST["choice_marque"])){
		$types_filter = implode("','", $_POST["choice_marque"]);
		$query .= " AND `marque` IN('".$types_filter."')";
	}

	if(isset($_POST["choice_type"])){
		$difficulty_filter = implode("','", $_POST["choice_type"]);
		$query .= "AND `type` IN('".$difficulty_filter."')";
	}
	if(isset($_POST["choice_moteur"])){
		$check_filter = implode("','", $_POST["choice_moteur"]);
		$query .= " AND `moteur` IN('".$check_filter."')";
	}
    if(isset($_POST["choice_boitedevitesse"])){
		$check_filter = implode("','", $_POST["choice_boitedevitesse"]);
		$query .= " AND `boitedevitesse` IN('".$check_filter."')";
	}
    if(isset($_POST["choice_place"])){
		$check_filter = implode("','", $_POST["choice_place"]);
		$query .= " AND `nombredeplaces` IN('".$check_filter."')";
	}
    if(isset($_POST["choice_porte"])){
		$check_filter = implode("','", $_POST["choice_porte"]);
		$query .= " AND `nombredeportes` IN('".$check_filter."')";
	}



	$filter_query = $query . ' LIMIT '.$start.', '.$limit.'';	


	$statement = $o_bdd->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total = $statement->rowCount();

	$statement = $o_bdd->prepare($filter_query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();


	$output = '';
    if($total_row > 0)
	{
		foreach($result as $requete)
		{
			$output .= '
            <a href="car-page.php" title="" class="result">
					<div class="result-top">
						<p>'.$requete["marque"]. '  '.$requete["modelFamily"]. '  '.$requete["anneedesortie"].'<p>
						<p>'.$requete["prix_vente"]. '€</p>
					</div>
					<img src="https://cdn.imagin.studio/getImage?&customer=frbeeyond-auto&make='.$requete["marque"].'&modelFamily='.$requete["modelFamily"].'&modelRange='.$requete["modelRange"].'&modelVariant='.$requete["modelVariant"].'&angle=23" title="Photo dune '.$requete['marque']." ".$requete['modelFamily']." alt= Photo d'une " .$requete['marque']." ".$requete['modelFamily'] >
					'<div class="result-bottom">
						<div>
							<img src="/groupe2/vue/assets/images/car/gas.png" alt="">'
							.$requete['moteur'].'
						</div>
						<div>
							<img src="/groupe2/vue/assets/images/car/gauge.png" alt="">
							'.$requete['puissance_ch']. ' ch
						</div>
						<div>
							<img src="/groupe2/vue/assets/images/car/car.png" alt="">
							'.$requete['type'].'
						</div>
					</div>
				</a>';
		}
	}
	else
	{
		$output = '<h3 class="text-danger">Aucun résultat</h3>';
	}
	$output .= '
	<div style="margin-top: 15px" class="d-flex justify-content-center">
	  <ul class="pagination">';

	$totalLinks = ceil($total/$limit);
	$previousLink = '';
	$nextLink = '';
	$pageLink = '';	

	if($totalLinks > 4){
	  if($page < 5){
		for($count = 1; $count <= 5; $count++){
		  $pageData[] = $count;
		}
		$pageData[] = '...';
		$pageData[] = $totalLinks;
	  } else {
		$endLimit = $totalLinks - 5;
		if($page > $endLimit){
		  $pageData[] = 1;
		  $pageData[] = '...';
		  for($count = $endLimit; $count <= $totalLinks; $count++)
		  {
			$pageData[] = $count;
		  }
		} else {
		  $pageData[] = 1;
		  $pageData[] = '...';
		  for($count = $page - 1; $count <= $page + 1; $count++)
		  {
			$pageData[] = $count;
		  }
		  $pageData[] = '...';
		  $pageData[] = $totalLinks;
		}
	  }
	} else {
	  for($count = 1; $count <= $totalLinks; $count++) {
		$pageData[] = $count;
	  }
	}

	for($count = 0; $count < count($pageData); $count++){
	  if($page == $pageData[$count]){
		$pageLink .= '
		<li class="page-item active">
		  <a class="page-link" href="#">'.$pageData[$count].'</a>
		</li>';

		$previousData = $pageData[$count] - 1;
		if($previousData > 0){
		  $previousLink = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$previousData.'">Previous</a></li>';
		} else {
		  $previousLink = '
		  <li class="page-item disabled">
			<a class="page-link" href="#">Previous</a>
		  </li>';
		}
		$nextData = $pageData[$count] + 1;
		if($nextData > $totalLinks){
		  $nextLink = '
		  <li class="page-item disabled">
			<a class="page-link" href="#">Next</a>
		  </li>';
		} else {
		  $nextLink = '<li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$nextData.'">Next</a></li>';
		}
	  } else {
		if($pageData[$count] == '...'){
		  $pageLink .= '
		  <li class="page-item disabled">
			  <a class="page-link" href="#">...</a>
		  </li>';
		} else {
		  $pageLink .= '
		  <li class="page-item"><a class="page-link" href="javascript:void(0)" data-page_number="'.$pageData[$count].'">'.$pageData[$count].'</a></li>';
		}
	  }
	}
	
	$output .= $previousLink . $pageLink . $nextLink;
	echo $output;


/*$_SESSION['navigation_facettes'] = 
    array(
        'etat' => '', 
        'marque' => '', 
        'type'=> '', 
        'moteur'=> '',
        'boitedevitesse'=> '',
        'porte'=> '',
        'place'=> '',
        'prix'=> '',
        'annee'=> ''
    );

$_choice_marque = "";
$_choice_etat = "";

if (isset($_GET['choice_marque']) && isset($_GET['choice_etat'])){
    global $o_bdd;
    $_choice_marque = $_GET['choice_marque'][0];
    $_choice_etat = $_GET['choice_etat'][0];

    $requete = $o_bdd->prepare('SELECT COUNT(*) 
    FROM vehicules 
    WHERE marque = :marqueUtilisateur AND etat = :etatUtilisateur');

    $requete->execute(array(
        'marqueUtilisateur' => $_choice_marque,
        'etatUtilisateur' => $_choice_etat
    ));
    if ($ligne = $requete->fetch()) {
        if ($ligne[0] > 0){
        print_r ($ligne);

        exit();
        } else {
        echo 'Adresse email introuvable ou mot de passe erroné !';
        exit();
        }
    }
}

        
        global $premier_article_achat;
        global $nb_vehicules_achat_par_page;

        $requete = $o_bdd->prepare('SELECT * FROM vehicules WHERE marque = ? AND etat = ?');
        $requete->execute(array($_GET['choice_marque'][0], $_GET['choice_etat'][0]));
	    $data_pseudo = $requete->fetch();	  
        
        while ($data = $requete->fetch())
        {
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else
            {
                array_push($_SESSION['navigation_facettes'][0], $data['etat']);
            }
        }
        $requete->closeCursor();
    var_dump($_SESSION['navigation_facettes'][0]);
    }*/
?>