<?php
	include '../structure/inc.header.php';
	include '../../../modele/modele.php';
?>

<body>
	<!--Header-->
	<header class="header-height">
		<div class="header-top">
			<a href="../index.php" title="Accueil"><img src="/groupe2/vue/assets/images/logos/logo.png" alt="Logo"></a>
			<nav>
				<ul>
					<li><a href="../index.php">Accueil</a></li>
					<li><a href="achat.php">Acheter</a></li>
					<li><a href="vente.php">Vendre</a></li>
					<li><a href="location.php" class="active">Louer</a></li>
				</ul>
			</nav>
			<div id="header-top-right">
				<a href="" title="Mon panier" class="btn"><i class="cp cp-shopping-cart-o"></i></a>
				<!-- Si l'utilisateur n'est pas connecté -->
				<a href="connexion.php" title="Se connecter" class="btn btn-outline" data="Se connecter"><i class="fa-regular fa-user"></i></a>
				<!-- Si l'utilisateur est connecté 
				<a href="mon-compte.php" title="Mon compte" class="btn btn-outline" data="Mon compte"><i class="fa-regular fa-user"></i></a>-->
			</div>
		</div>
		<div id="header-img-container">
			<img class="header-img-sm" src="/groupe2/vue/assets/images/header-img3.jpg" alt="Intérieur de voiture">
			<div>
				<h1 class="to-right">Louer un véhicule</h1>
				<p class="desc section-desc">À la journée</p>
			</div>
		</div>
	</header>
	<div class="content">
		<!--Sidebar-->
		<div class="sidebar">
			<fieldset class="category">
				<legend><i class="cp cp-tags"></i>Marque</legend>
				<?php foreach($_SESSION['louer_marque'] as $requete){ ?>
				<ul>
					<li><?php echo $requete; ?></li>
				</ul>
				<?php } ?>
			</fieldset>
			<fieldset class="category">
				<legend><i class="cp cp-car"></i>Type</legend>
				<?php foreach($_SESSION['louer_type'] as $requete){ ?>
				<ul>
					<li><?php echo $requete; ?></li>
				</ul>
				<?php } ?>
			</fieldset>
			<fieldset class="category">
				<legend><i class="cp cp-user"></i>Capacité</legend>
				<?php foreach($_SESSION['louer_place'] as $requete){ ?>
				<ul>
					<li><?php echo $requete; ?></li>
				</ul>
				<?php } ?>
			</fieldset>
			<fieldset class="category">
				<legend><i class="cp cp-enter"></i>Portes</legend>
				<?php foreach($_SESSION['louer_porte'] as $requete){ ?>
				<ul>
					<li><?php echo $requete; ?></li>
				</ul>
				<?php } ?>
			</fieldset>
		</div>
		<!--Results-->
		<div class="main">
		<?php echo $nb_vehicules_louer; ?> résultat(s)
			<form method="GET" action="#">
				<fieldset class="category">
					<label for="tri_location">Tri</label>
					<select name="tri_location" id="tri_location">
						<option value="trier par" >-- Trier par --</option>
						<option value="location_annee_croissant" >Années croissantes</option>
						<option value="location_annee_decroissant">Années décroissantes</option>
						<option value="location_prix_croissant">Prix croissants</option>
						<option value="location_prix_decroissant">Prix décroissants</option>
					</select>
				</fieldset>
				<input id="btn_tri_location" name="submit_tri_achat" type="submit" value="Trier maintenant"/>
			</form>
			<div class="results">
			<?php foreach($_SESSION['louer'] as $requete){ ?>	
				<a href="car-page.php" title="" class="result">
					<div class="result-top">
						<p><?php echo $requete['marque']. '  '; ?><?php echo $requete['modelFamily']. '  '; ?><?php echo $requete['anneedesortie']; ?><p>
						<p><?php echo $requete['prix_journalier']; ?> €</p>
					</div>
					<img src="https://cdn.imagin.studio/getImage?&customer=frbeeyond-auto&make=<?php echo $requete['marque'];?>&modelFamily=<?php echo $requete['modelFamily'];?>&modelRange=<?php echo $requete['modelRange'];?>&modelVariant=<?php echo $requete['modelVariant'];?>&angle=23" title="Photo d'une <?php echo $requete['marque']; echo $requete['modelFamily'];?> alt="Photo d'une <?php echo $requete['marque']; echo $requete['modelFamily'];?>">
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
			<?php if ($activ_page_louer != 1) : ?>
				<a href="location.php?page=<?php echo ($activ_page_louer - 1);?>&tri_location=<?php if (isset($tri_location)){echo $tri_location;}; ?>&submit_tri_location="><i class="fa-solid fa-arrow-left-long"></i></a>
			<?php endif; ?>
			<?php if ($activ_page_louer < $nb_pages_total_louer) : ?>
				<a href="location.php?page=<?php echo ($activ_page_louer + 1);?>&tri_location=<?php if (isset($tri_location)){echo $tri_location;}; ?>&submit_tri_location="><i class="fa-solid fa-arrow-right-long"></i></a>
			<?php endif; ?>
			</div>
			<div class="page-nbr">Page <?php echo $activ_page_louer ?> sur <?php echo $nb_pages_total_louer ?></div>
		</div>
	</div>
	
<?php
	include '../structure/inc.footer.php';
?>