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
	<div class="content car-content">
        <p class="fil-dariane"><a href="achat.php" title="">/ Acheter</a> / <a href="" title="">Nom de la voiture</a></p>
        <div class="car">
            <div class="car-left">
                <h2>125000 <span>€</span></h2>
                <img src="https://cdn.imagin.studio/getImage?&customer=frbeeyond-auto&make=volkswagen&modelFamily=atlas&paintId=pspc0041&angle=01&zoomType=fullscreen" class="car-img" alt="">
                <div>
                    <h1 class="to-left">Marque modèle</h1>
                    <p>2018</p>
                </div>
                <img src="/groupe2/vue/assets/images/background/blurry-circle2.png" alt="" class="blurry-circle blurry-circle-2">
                <img src="/groupe2/vue/assets/images/background/lines3.png" alt="" class="line">
            </div>
            <div class="car-right">
                <div class="car-infos">
                    <div class="car-column">
                        <div class="car-info ci-bg ci-accent">
                            <img src="/groupe2/vue/assets/images/car/car.png" alt="">
                            Berline
                        </div>
                        <div class="car-info ci-sm ci-white">
                            <img src="/groupe2/vue/assets/images/car/gauge.png" alt="">
                            Automatique
                        </div>
                    </div>
                    <div class="car-column">
                        <div class="car-info ci-sm ci-black">
                            <img src="/groupe2/vue/assets/images/car/electric.png" alt="">
                            Électrique
                        </div>
                        <div class="car-info ci-bg ci-yellow">
                            <img src="/groupe2/vue/assets/images/car/engine.png" alt="">
                            560 ch
                        </div>
                    </div>
                    <div class="car-column">
                        <div class="car-info ci-bg ci-white">
                            <img src="/groupe2/vue/assets/images/car/door.png" alt="">
                            5 portes
                        </div>
                        <div class="car-info ci-sm ci-black">
                            <img src="/groupe2/vue/assets/images/car/seat.png" alt="">
                            5 places
                        </div>
                    </div>
                </div>
                <div class="car-btns">
                    <a href="" title="" class="btn btn-outline" data="Ajouter au panier"><i class="cp cp-shopping-cart"></i></a>
                    <a href="" title="" class="btn"><i class="cp cp-heart"></i>Ajouter aux favoris</a>
                </div>
            </div>
        </div>
	</div>
	
<?php
	include '../structure/inc.footer.php';
?>