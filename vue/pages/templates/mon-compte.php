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
				<a href="" title="Se connecter" class="btn btn-outline" data="Se connecter"><i class="fa-regular fa-user"></i></a>
			</div>
		</div>
	</header>
	
	<div class="content">
		<!--Sidebar-->
		<div class="sidebar account-sidebar">
			<div class="sidebar-top">
				<div>
					<img src="/groupe2/vue/assets/images/dp.png" alt="avatar">
					<p>Bienvenue,<br><span>pseudo</span></p>
				</div>
				<ul>
					<li id="favs" class="acc-active"><i class="cp cp-heart-o"></i>Mes favoris</li>
					<li id="settings"><i class="cp cp-cog-o"></i>Paramètres</li>
				</ul>
			</div>
			<div class="sidebar-bottom">
				<a href=""><i class="fa-solid fa-arrow-right-from-bracket"></i>Déconnexion</a>
			</div>
		</div>
		<!--Favoris-->
		<div class="main favs-content">
			<!--Si favoris vide-->
			Vous n'avez aucun véhicule dans vos favoris.
			<!--Si favoris non vide-->
			<div class="results">
				<a href="car-page.php" title="" class="result">
					<div class="result-top">
						<p>Marque Modèle Année<p>
						<p>Prix €</p>
					</div>
					<img src="https://cdn.imagin.studio/getImage?&customer=frbeeyond-auto&make=volkswagen&modelFamily=atlas&paintId=pspc0041&angle=23" alt="">
					<div class="result-bottom">
						<div>
							<img src="/groupe2/vue/assets/images/car/gas.png" alt="">
							Essence
						</div>
						<div>
							<img src="/groupe2/vue/assets/images/car/gauge.png" alt="">
							560 ch
						</div>
						<div>
							<img src="/groupe2/vue/assets/images/car/car.png" alt="">
							6 vitesses
						</div>
					</div>
				</a>
				<a href="car-page.php" title="" class="result">
					<div class="result-top">
						<p>Marque Modèle Année<p>
						<p>Prix €</p>
					</div>
					<img src="https://cdn.imagin.studio/getImage?&customer=frbeeyond-auto&make=volkswagen&modelFamily=atlas&paintId=pspc0041&angle=23" alt="">
					<div class="result-bottom">
						<div>
							<img src="/groupe2/vue/assets/images/car/gas.png" alt="">
							Essence
						</div>
						<div>
							<img src="/groupe2/vue/assets/images/car/gauge.png" alt="">
							560 ch
						</div>
						<div>
							<img src="/groupe2/vue/assets/images/car/car.png" alt="">
							6 vitesses
						</div>
					</div>
				</a>
            </div>
		</div>
		<!--Paramètres-->
		<div class="main settings-content">
			<form method="POST" action="" id="form" autocomplete="off">
				<div>
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
				<div>
					<fieldset class="category">
						<legend><i class="fa-solid fa-circle-user"></i>Pseudo</legend>
						<label for="username">Pseudo</label>
						<input type="text" id="username" name="username" minlength="1" maxlength="20" placeholder="Pseudo" required>
					</fieldset>
				</div>
				<div>
					<fieldset class="category">
						<legend><i class="fa-solid fa-at"></i>E-mail</legend>
						<label for="mail">E-mail</label>
						<input type="email" id="mail" name="mail" placeholder="addresse@mail.com" required>
					</fieldset>
				</div>
				<div>
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
				</div>

				<div class="btn btn-outline" data="Modifier mes informations">
					<input type="submit" value="">
					<i class="fa-solid fa-arrow-right-long"></i>
				</div>
			</form>
		</div>
	</div>
<?php
	include '../structure/inc.footer.php';
?>