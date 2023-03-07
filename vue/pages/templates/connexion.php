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
					<li><a href="vente.php">Vendre</a></li>
					<li><a href="location.php">Louer</a></li>
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
	</header>
	
	<div class="content acc-content">
		<form method="post" action="">
			<fieldset class="category">
				<legend><i class="fa-solid fa-circle-user"></i>Pseudo</legend>
				<label for="username">Pseudo</label>
				<input type="text" id="username" name="username" minlength="1" maxlength="20" placeholder="Pseudo" required>
			</fieldset>
			<fieldset class="category">
				<legend><i class="fa-solid fa-address-lock"></i>Mot de passe</legend>
				<label for="password">Mot de passe</label>
				<input type="password" id="password" name="motdepasse" placeholder="Mot de passe" required>
			</fieldset>
			<div class="btn btn-outline btn-dark" data="Se connecter">
				<input type="submit" value="">
				<i class="fa-solid fa-arrow-right-long"></i>
			</div>
		</form>
		<p>Vous n'êtes pas inscrit ? <a href="inscription.php">Créez votre compte !</a></p>
	</div>

<?php
	include '../structure/inc.footer.php';
?>