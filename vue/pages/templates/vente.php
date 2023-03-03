<?php
	include '../structure/inc.header.php';
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
					<li><a href="vente.php" class="active">Vendre</a></li>
					<li><a href="location.php">Louer</a></li>
				</ul>
			</nav>
			<a href="#" title="Nous contacter" class="btn">Contactez-nous</a>
		</div>
		<div id="header-img-container">
			<img class="header-img-sm" src="/groupe2/vue/assets/images/header-img3.jpg" alt="Intérieur de voiture">
			<div>
				<h1 class="to-right">Vendre son véhicule</h1>
				<p class="desc section-desc">Des démarches simplifiées et des temps d'attente réduits</p>
			</div>
		</div>
	</header>
	<!--Form-->
	<div class="content">
		<div class="left-content">
			<p class="desc section-desc">/ Commencez par remplir notre formulaire</p>
			<h2 class="to-left">Quel véhicule souhaitez-vous vendre ?</h2>
		</div>
		<form action="vente-form.php" method="post" autocomplete="off">
			<div class="form-inline">
				<fieldset class="category">
					<legend><i class="cp cp-tags"></i>Marque</legend>
					<label for="brand">Marque</label>
					<input type="text" id="brand" name="marque" minlength="2" maxlength="20" placeholder="exemple : Audi" required>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-car"></i>Modèle</legend>
					<label for="model">Modèle</label>
					<input type="text" id="model" name="modele" minlength="2" maxlength="20" placeholder="exemple : A1" required>
				</fieldset>
			</div>
			<div class="form-inline">
				<fieldset class="category">
					<legend><i class="cp cp-calendar"></i>Année</legend>
					<label for="year">Année</label>
					<input type="number" id="year" min="1900" max="2023" step="1" value="2016" required>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-info-alt"></i>Type</legend>
					<label for="type">Type</label>
					<select name="type" id="type" required>
						<option value="BERLINE">Berline</option>
						<option value="BREAK">Break</option>
						<option value="CABRIOLET">Cabriolet</option>
						<option value="CITADINE">Citadine</option>
						<option value="COUPE">Coupé</option>
						<option value="JUMPER">Jumper</option>
						<option value="LUXE">Luxe</option>	
						<option value="MONOSPACE">Monospace</option>
						<option value="RANGER">Ranger</option>
						<option value="SOCIETE">Société</option>
						<option value="SUV">SUV</option>
						<option value="UTILITAIRES">Utilitaire</option>
					</select>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-wrench"></i>Moteur</legend>
					<label for="powertrain">Moteur</label>
					<select name="moteur" id="powertrain" required>
						<option value="DIESEL">Diesel</option>
						<option value="ELECTRIQUE">Électrique</option>
						<option value="ESSENCE">Essence</option>
						<option value="HYBRIDE">Hybride</option>
					</select>
				</fieldset>
			</div>
			<div class="form-inline">
				<fieldset class="category">
					<legend><i class="cp cp-watch"></i>Vitesses</legend>
					<label for="gearbox">Vitesses</label>
					<input type="number" id="gearbox" name="boitedevitesse" min="5" max="8" value="5" required>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-enter"></i>Portes</legend>
					<label for="doors">Portes</label>
					<input type="number" id="doors" name="nombredeportes" min="2" max="5" value="5" required>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-group"></i>Places</legend>
					<label for="seats">Places</label>
					<input type="number" id="seats" name="nombredeplaces" min="1" max="9" value="5" required>
				</fieldset>
				<fieldset class="category">
					<legend><i class="cp cp-sale"></i>Prix</legend>
					<label for="price">Prix proposé</label>
					<input type="number" id="price" name="prix_vente" min="1" max="10000000" placeholder="€" required>
				</fieldset>
			</div>
			<div class="btn btn-outline" data="Envoyer ma demande">
				<input type="submit" value="">
				<i class="fa-solid fa-arrow-right-long"></i>
			</div>
			<!--Form feedback messages-->
			<div class="feedback-msg validate">
				<i class="cp cp-check-mark"></i>
				Votre demande sera traitée dans les plus brefs délais. Nous vous contacterons pour plus d'informations.
			</div>
			<div class="feedback-msg error">
				<i class="cp cp-cross"></i>
				Message d'erreur ici
			</div>
		</form>
		<!--Signed out message
		<div class="signed-out">
			<p class="desc section-desc">/ Connectez-vous pour commencer à vendre</p>
			<h2 class="to-left">Toujours pas inscrit ?<br>Créez-vous un compte en 2 minutes !</h2>
			<div>
				<a href="#services" title="En savoir plus" class="btn btn-outline" data="S'inscrire"></a>
				<a href="#" title="Nous contacter" class="btn">Connexion</a>
			</div>
		</div>-->
	</div>

<?php
	include '../structure/inc.footer.php';
?>