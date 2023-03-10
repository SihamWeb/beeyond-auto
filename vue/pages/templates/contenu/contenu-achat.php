<?php
	session_start();
	require_once '../../structure/inc.header.php';
	require_once '../../../../modele/modele.php';
	require_once '../../../../controleur/controleur.php';
?>
<body>
	<!--Header-->
		<!--Results-->
		<div class="main">
			<div class="results">
			<?php foreach($_SESSION['achat'] as $requete){ ?>
				<a href="car-page.php" title="" class="result">
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
		</div>
	</div>