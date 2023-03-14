
/**-------- PAGE ACHAT -----------**/

    // TRI
    /*var retourTriAchat = document.getElementsByClassName("results")[0];
    function showCarsAchat(str) {
        if (str == "") {
            retourTriAchat.innerHTML = "";
            return;
        } else {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status === 0)) {
                retourTriAchat.innerHTML = xhr.responseText;
            }
            };
            xhr.open("GET","contenu/contenu-achat.php?tri_achat="+str,true);
            xhr.send();
        }
    }*/

    // PAGINATION
    

/**-------- PAGE LOCATION -----------**/

    // TRI
    /*var retourTriLocation = document.getElementsByClassName("results")[0];
    function showCarsLocation(str) {
        if (str == "") {
            retourTriLocation.innerHTML = "";
            return;
        } else {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status === 0)) {
                retourTriLocation.innerHTML = xhr.responseText;
            }
            };
            xhr.open("GET","contenu/contenu-location.php?tri_location="+str,true);
            xhr.send();
        }
    }*/

    // PAGINATION
    
    // DEUX TENTATIVES AJAX PAGINATION
	/*$(document).ready(function() {
		$(".page-link").click(function(){
			var id = $(this).attr("data-id");
			var select_id = $(this).parent().attr("id");
			$.ajax({
				url: "contenu/contenu-achat.php",
				type: "GET",
				data: {
					page : id
				},
				cache: false,
				success: function(dataResult){
					$("#page-nav").html(dataResult);
					$(".pageitem").removeClass("active");
					$("#"+select_id).addClass("active");
				}
			});
		});
    });*/

	/*$(".page-linkNext").click(function(){
		var id = $(".page-linkNext").attr("data-id");
	var select_id = $(".page-linkNext").parent().attr("id");

		$.ajax({
			url: "contenu/contenu-achat.php",
			type: "GET",
			data: {
				page : id
			},
			cache: false,
			success: function(dataResult){
				$(".results").html(dataResult);
				$(".pageitem").removeClass("active");
				$("#"+select_id).addClass("active");
			}
		});
	});*/

/**-------- PAGE CAR-PAGE (PRODUIT) -----------**/

    // LOCATION
    var resultatDateDebut = document.getElementById("resultat_date_debut");
    var resultatDateFin = document.getElementById("resultat_date_fin");

    var inputDateDebut = document.getElementById("input-date-debut");
    var inputDateFin = document.getElementById("resultat_date_fin");

    var attributIdCarLocation = inputDateDebut.getAttribute('car-id');

    function debutlocation (date) {
        if (date.length == 0) {
            resultatDateDebut.innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    resultatDateDebut.innerHTML = 'Date de début souhaitée : ' + this.responseText;
                }
            };
            xmlhttp.open("GET", "../../../controleur/page_produit/page_produit_locationControleur.php?idPageLocation="+attributIdCarLocation+"&choixdatedebut="+date, true);
            xmlhttp.send();
        }
    }

    function finlocation (date) {
        if (date.length == 0) {
            resultatDateFin.innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    resultatDateFin.innerHTML = 'Date de fin souhaitée : ' + this.responseText;
                }
            };
            xmlhttp.open("GET", "../../../controleur/page_produit/page_produit_locationControleur.php?idPageLocation="+attributIdCarLocation+"&choixdatefin="+date, true);
            xmlhttp.send();
        }
    }

    