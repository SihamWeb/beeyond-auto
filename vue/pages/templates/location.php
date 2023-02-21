<?php
	include '../structure/inc.header.php';
?>

<body>
	<!--Header-->
	<header class="header-height">
		<div class="header-top">
			<a href="../index.php" title="Accueil"><img src="/groupe2/vue/assets/images/logo.png" alt="Logo"></a>
			<nav>
				<ul>
					<li><a href="../index.php">Accueil</a></li>
					<li><a href="achat.php">Acheter</a></li>
					<li><a href="vente.php">Vendre</a></li>
					<li><a href="location.php" class="active">Louer</a></li>
				</ul>
			</nav>
			<a href="#" title="Nous contacter" class="btn">Contactez-nous</a>
		</div>
		<div id="header-img-container">
			<img class="header-img-sm" src="/groupe2/vue/assets/images/header-img3.jpg" alt="Intérieur de voiture">
			<div>
				<h1 class="to-right">Louer un véhicule</h1>
				<p class="desc section-desc">À la journée</p>
			</div>
		</div>
	</header>
		

<?php
	include '../structure/inc.footer.php';
?>