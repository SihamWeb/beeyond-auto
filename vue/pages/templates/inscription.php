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
				<a href="mon-compte.php" title="Mon panier" class="btn"><i class="cp cp-shopping-cart-o"></i></a>
				<!-- Si l'utilisateur n'est pas connecté -->
				<a href="connexion.php" title="Se connecter" class="btn btn-outline" data="Se connecter"><i class="fa-regular fa-user"></i></a>
				<!-- Si l'utilisateur est connecté 
				<a href="mon-compte.php" title="Mon compte" class="btn btn-outline" data="Mon compte"><i class="fa-regular fa-user"></i></a>-->
			</div>
		</div>
	</header>
	
	<div class="content acc-content sign-up-content">
		<form method="post" action="">
			<div class="form-inline">
				<fieldset class="category">
					<legend><i class="fa-solid fa-address-card"></i>Prénom</legend>
					<label for="name">Prénom</label>
					<input type="text" id="name" name="prenom" minlength="1" maxlength="20" placeholder="Prénom" required>
				</fieldset>
				<fieldset class="category">
					<legend><i class="fa-solid fa-people-group"></i>Nom</legend>
					<label for="surname">Nom</label>
					<input type="text" id="surname" name="nom" minlength="1" maxlength="20" placeholder="Nom" required>
				</fieldset>
			</div>
			<fieldset class="category">
				<legend><i class="fa-solid fa-at"></i>E-mail</legend>
					<label for="mail">E-mail</label>
					<input type="email" id="mail" name="mail" placeholder="addresse@mail.com" required>
				</fieldset>
			<fieldset class="category">
				<legend><i class="fa-solid fa-circle-user"></i>Pseudo</legend>
				<label for="username">Pseudo</label>
				<input type="text" id="username" name="username" minlength="1" maxlength="20" placeholder="Pseudo" required>
			</fieldset>
			<fieldset class="category">
				<legend><i class="fa-solid fa-lock"></i>Mot de passe</legend>
				<label for="password">Mot de passe</label>
				<input type="password" id="password" name="motdepasse" placeholder="Mot de passe" required>
			</fieldset>
			<fieldset class="category">
				<legend><i class="fa-solid fa-key"></i>Confirmation mot de passe</legend>
				<label for="conf-mdp">Confirmation mot de passe</label>
				<input type="password" id="conf-mdp" name="conf-mdp" placeholder="Confirmez votre mot de passe" required>
			</fieldset>
			<div class="btn btn-outline btn-dark" data="S'inscrire">
				<input type="submit" value="">
				<i class="fa-solid fa-arrow-right-long"></i>
			</div>
		</form>
		<p>Vous êtes déjà inscrit ? <a href="connexion.php">Connectez-vous !</a></p>
	</div>

<?php
	include '../structure/inc.footer.php';
?>