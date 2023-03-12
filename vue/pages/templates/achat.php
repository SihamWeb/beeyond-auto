<?php
	session_start();
	//global $query;
	//global $start;
	//global $limit;
	require_once '../structure/inc.header.php';
	require_once '../../../modele/modele.php';
	require_once '../../../controleur/controleur.php';
?>

<body>
	<!--Header-->
	<header class="header-height">
		<div class="header-top">
			<a href="../index.php" title="Accueil"><img src="/groupe2/vue/assets/images/logos/logo.png" alt="Logo"></a>
			<div class="menu">
				<nav>
					<ul>
						<li><a href="../index.php">Accueil</a></li>
						<li><a href="achat.php" class="active">Acheter</a></li>
						<li><a href="vente.php">Vendre</a></li>
						<li><a href="location.php">Louer</a></li>
					</ul>
				</nav>
				<div id="header-top-right">
					<a href="mon-compte.php" title="Mon panier" class="btn"><i class="cp cp-shopping-cart-o"></i></a>
					<!-- Si l'utilisateur n'est pas connecté -->
					<a href="connexion.php" title="Se connecter" class="btn btn-outline" data="Se connecter"><i class="fa-regular fa-user"></i></a>
					<!-- Si l'utilisateur est connecté 
					<a href="mon-compte.php" title="Mon compte" class="btn btn-outline" data="Mon compte"><i class="fa-regular fa-user"></i></a>-->
				</div>
			</div>
			<div id="hamburger-menu">
				<span id="line-1"></span>
				<span id="line-2"></span>
				<span id="line-3"></span>
			</div>
		</div>
		<div id="header-img-container">
			<img class="header-img-sm" src="/groupe2/vue/assets/images/header-img3.jpg" alt="Intérieur de voiture">
			<div>
				<h1 class="to-right">Acheter un véhicule</h1>
				<p class="desc section-desc">Neuf ou d'occasion</p>
			</div>
		</div>
	</header>
	<div class="content">
		<!--Sidebar-->
		<!--<form method="GET" action="">-->
			<div class="sidebar">
			<input type="text" name="search_text" id="search_text" placeholder="Rechercher un véhicule" class="form-control form-black" />
				<fieldset class="category">
					<legend><i class="cp cp-new"></i>État</legend>
					<ul>
						<?php $i = 1; foreach($_SESSION['achat_etat'] as $requete){ ?>
						<input type="checkbox" name="choice_etat[]" id="choice_etat-<?php echo $i; ?>" value="<?php echo $requete; ?>"><label for="choice_etat-<?php echo $i; ?>"><?php echo $requete; ?></label>
						<?php $i++; } ?>
					</ul>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-tags"></i>Marque</legend>
					<ul>
						<?php $i = 1; foreach($_SESSION['achat_marque'] as $requete){ ?>
						<input type="checkbox" name="choice_marque[]" id="choice_marque-<?php echo $i; ?>" value="<?php echo $requete; ?>"><label for="choice_marque-<?php echo $i; ?>"><?php echo $requete. '<br />'; ?></label>
						<?php $i++; } ?>
					</ul>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-car"></i>Type</legend>
					<ul>
						<?php $i = 1; foreach($_SESSION['achat_type'] as $requete){ ?>
						<input type="checkbox" name="choice_type[]" id="choice_type-<?php echo $i; ?>" value="<?php echo $requete; ?>"><label for="choice_type-<?php echo $i; ?>"><?php echo $requete. '<br />'; ?></label>
						<?php $i++; } ?>
					</ul>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-car"></i>Moteur</legend>
					<ul>
						<?php $i = 1; foreach($_SESSION['achat_moteur'] as $requete){ ?>
						<input type="checkbox" name="choice_moteur[]" id="choice_moteur-<?php echo $i; ?>" value="<?php echo $requete; ?>"><label for="choice_type-<?php echo $i; ?>"><?php echo $requete. '<br />'; ?></label>
						<?php $i++; } ?>
					</ul>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-car"></i>Boîte de vitesse</legend>
					<ul>
						<?php $i = 1; foreach($_SESSION['achat_boitedevitesse'] as $requete){ ?>
						<input type="checkbox" name="choice_boitedevitesse[]" id="choice_boitedevitesse-<?php echo $i; ?>" value="<?php echo $requete; ?>"><label for="choice_type-<?php echo $i; ?>"><?php echo $requete. '<br />'; ?></label>
						<?php $i++; } ?>
					</ul>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-user"></i>Capacité</legend>
					<ul>
						<?php $i = 1; foreach($_SESSION['achat_place'] as $requete){ ?>
						<input type="checkbox" name="choice_place[]" id="choice_place-<?php echo $i; ?>" value="<?php echo $requete; ?>"><label for="choice_place-<?php echo $i; ?>"><?php echo $requete. '<br />'; ?></label>
						<?php $i++; } ?>
					</ul>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-enter"></i>Portes</legend>
					<ul>
						<?php $i = 1; foreach($_SESSION['achat_porte'] as $requete){ ?>
						<input type="checkbox" name="choice_porte[]" id="choice_porte-<?php echo $i; ?>" value="<?php echo $requete; ?>"><label for="choice_porte-<?php echo $i; ?>"><?php echo $requete. '<br />'; ?></label>
						<?php $i++; } ?>
					</ul>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-enter"></i>Année</legend>
					<input type="number" name="annee_min_achat" placeholder="Minimum" minlength="4" maxlength="4">
					<input type="number" name="annee_max_achat" placeholder="Maximum" minlength="4" maxlength="4">
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-enter"></i>Prix</legend>
					<input type="number" name="prix_min_achat" placeholder="Minimum">
					<input type="number" name="prix_max_achat" placeholder="Maximum">
				</fieldset>
			</div>
			<!--<button name="filtrer" type="submit">Filtrer</button>
			<small id="resultat"></small>
		</form>-->
		<!--Results-->
		<div class="main">
			<div id="results-top">
				<?php //echo $nb_vehicules_achat; ?> résultat(s)
				<form method="GET" action="">
					<fieldset class="category">
						<label for="tri_achat">Tri</label>
						<select name="tri_achat" id="tri_achat" onchange="showCarsAchat(this.value)">
							<option value="" >-- Trier par --</option>
							<option value="achat_annee_croissant" >Années croissantes</option>
							<option value="achat_annee_decroissant">Années décroissantes</option>
							<option value="achat_prix_croissant">Prix croissants</option>
							<option value="achat_prix_decroissant">Prix décroissants</option>
						</select>
					</fieldset>
					<input id="btn_tri_achat" name="submit_tri_achat" type="submit" value="Trier maintenant"/>
				</form>
			</div>
			<div class="results">
			<?php foreach($_SESSION['achat'] as $requete){ ?>
				<a href="car-page.php?idCarAchat=<?php echo $requete['id']; ?>" title="" class="result">
					<div class="result-top">
						<p><?php echo $requete['marque']. '  '; ?><?php echo $requete['modelFamily']. '  '; ?><?php echo $requete['anneedesortie']; ?><p>
						<p><?php echo $requete['prix_vente']; ?> €</p>
					</div>
					<img src="https://cdn.imagin.studio/getImage?&customer=frbeeyond-auto&make=<?php echo $requete['marque'];?>&modelFamily=<?php echo $requete['modelFamily'];?>&modelRange=<?php echo $requete['modelRange'];?>&modelVariant=<?php echo $requete['modelVariant'];?>&angle=23" title="Photo d'une <?php echo $requete['marque']." ".$requete['modelFamily'];?>" alt="Photo d'une <?php echo $requete['marque']; echo $requete['modelFamily'];?>">
					<div class="result-bottom">
						<div>
							<img src="/groupe2/vue/assets/images/car/gas.png" alt="">
							<?php echo $requete['moteur']; ?>
						</div>
						<div>
							<img src="/groupe2/vue/assets/images/car/gauge.png" alt="">
							<?php echo $requete['puissance_ch']. ' ch'; ?>
						</div>
						<div>
							<img src="/groupe2/vue/assets/images/car/car.png" alt="">
							<?php echo $requete['type']; ?>
						</div>
					</div>
				</a>
			<?php } ?>
			</div>
			<div class="page-nav">
				<?php if ($activ_page_achat != 1) : ?>
					<a href="achat.php?page=<?php echo ($activ_page_achat - 1);?>&tri_achat=<?php if (isset($tri_achat)){echo $tri_achat;}; ?>&submit_tri_achat="><i class="fa-solid fa-arrow-left-long"></i></a>
				<?php endif; ?>
				<?php if ($activ_page_achat < $nb_pages_total_achat) : ?>
					<a href="achat.php?page=<?php echo ($activ_page_achat + 1);?>&tri_achat=<?php if (isset($tri_achat)){echo $tri_achat;};?>&submit_tri_achat="><i class="fa-solid fa-arrow-right-long"></i></a>
				<?php endif; ?>
			</div>
			<div class="page-nbr">Page <?php echo $activ_page_achat ?> sur <?php echo $nb_pages_total_achat ?></div>
		</div>
	</div>
	
<?php
	include '../structure/inc.footer.php';
	
?>