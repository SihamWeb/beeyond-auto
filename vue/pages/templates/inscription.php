<?php
	session_start();
	include '../structure/inc.header.php';
	include_once '../../../controleur/controleur.php';
	include_once '../../../modele/modele.php';
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
						<li><a href="achat.php">Acheter</a></li>
						<li><a href="vente.php">Vendre</a></li>
						<li><a href="location.php">Louer</a></li>
					</ul>
				</nav>
				<div id="header-top-right">
				<?php if($_SESSION && count($_SESSION) && array_key_exists('utilisateurs', $_SESSION) && !empty($_SESSION['utilisateurs'])) :  ?>
					<!-- Si l'utilisateur est connecté -->
					<a href="/groupe2/vue/pages/templates/mon-compte.php" title="Mon panier" class="btn"><i class="cp cp-shopping-cart-o"></i></a>
					<a href="mon-compte.php" title="Mon compte" class="btn btn-outline" data="Mon compte"><i class="fa-regular fa-user"></i></a>
				<?php else : ?>
					<!-- Si l'utilisateur n'est pas connecté -->
					<a href="connexion.php" title="Se connecter" class="btn btn-outline" data="Se connecter"><i class="fa-regular fa-user"></i></a>
				<?php endif; ?>
				</div>
			</div>
			<div id="hamburger-menu">
				<span id="line-1"></span>
				<span id="line-2"></span>
				<span id="line-3"></span>
			</div>
		</div>
	</header>
	
	<div class="content acc-content sign-up-content">
		<?php if(isset($info_ok)) : ?>
			<p><?php { echo $info_ok; addNewUser(); } ?><a href="connexion.php"> Connectez-vous !</a></p>
			<div id="res" ></div>
		<?php else : ?>
			<form method="post" action="">
				<div class="form-inline">
					<fieldset class="category">
						<legend><i class="fa-solid fa-address-card"></i>Prénom</legend>
						<label for="name">Prénom</label>
						<input type="text" id="name" name="prenom" minlength="1" maxlength="30" placeholder="Prénom">
					</fieldset>
					<fieldset class="category">
						<legend><i class="fa-solid fa-people-group"></i>Nom</legend>
						<label for="surname">Nom</label>
						<input type="text" id="surname" name="nom" minlength="1" maxlength="30" placeholder="Nom">
					</fieldset>
				</div>
				<span><?php if(isset($prenom_incorrect)){ echo $prenom_incorrect; } elseif (isset($nom_incorrect)){ echo $nom_incorrect; } ?></span>
				<fieldset class="category">
					<legend><i class="fa-solid fa-at"></i>E-mail</legend>
						<label for="mail">E-mail</label>
						<input type="email" id="mail" name="mail" placeholder="addresse@mail.com">
				</fieldset>
				<span><?php if(isset($mail_incorrect)){ echo $mail_incorrect; } ?></span>
				<fieldset class="category">
					<legend><i class="fa-solid fa-circle-user"></i>Pseudo</legend>
					<label for="username">Pseudo</label>
					<input type="text" id="username" name="username" minlength="3" maxlength="25" placeholder="Pseudo">
				</fieldset>
				<span><?php if(isset($username_incorrect)){ echo $username_incorrect; } elseif (isset($username_exist)){ echo $username_exist; } ?></span>
				<fieldset class="category">
					<legend><i class="fa-solid fa-lock"></i>Mot de passe</legend>
					<label for="password">Mot de passe</label>
					<input type="password" id="password" name="motdepasse" placeholder="Mot de passe">
				</fieldset>
				<span><?php if(isset($motdepasse_incorrect)){ echo $motdepasse_incorrect; } ?></span>
				<fieldset class="category">
					<legend><i class="fa-solid fa-key"></i>Confirmation mot de passe</legend>
					<label for="conf-mdp">Confirmation mot de passe</label>
					<input type="password" id="conf-mdp" name="conf-mdp" placeholder="Confirmez votre mot de passe">
				</fieldset>
				<span><?php if(isset($confmdp_incorrect)){ echo $confmdp_incorrect; } ?></span>
				<div class="btn btn-outline btn-dark" data="S'inscrire">
					<input type="submit" value="" name="submit_inscription" id="submit_inscription">
					<i class="fa-solid fa-arrow-right-long"></i>
				</div>
			</form>
			<p>Vous êtes déjà inscrit ? <a href="connexion.php">Connectez-vous !</a></p>
		<?php endif; ?>
	</div>

<?php
	include '../structure/inc.footer.php';
?>