function initMap() {
	//Coordonnées Bretagne
	var bretagne = [48.179109, -2.750727];

	//Création de la map
	var mymap = L.map('mapid').setView(bretagne, 8);
	

	//Création du calque images
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
		
	    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	    maxZoom: 8,
	    id: 'mapbox.streets',
	    accessToken: 'pk.eyJ1IjoiaHVndWVzMzUxMzMiLCJhIjoiY2p0cGU2NTFkMDNndDN5cGMzaHdlcTMwdiJ9.7N9UW0XFAhQjurVvyi-axg'
	}).addTo(mymap);

	var LeafIcon = L.Icon.extend({
		options: {
			/*shadowUrl: 'leaf-shadow.png',*/
			/*iconSize:     [38, 95],
			/*shadowSize:   [50, 64],*/
			iconAnchor:   [22, 94],
			/*shadowAnchor: [4, 62],*/
			/*popupAnchor:  [-3, -76]*/
		}
	});

	var greenIcon = new LeafIcon({iconUrl: './assets/images/green_marker.png'}),
		redIcon = new LeafIcon({iconUrl: 'leaf-red.png'}),
		orangeIcon = new LeafIcon({iconUrl: 'leaf-orange.png'});

	L.marker([48.179109, -2.750727], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(mymap);
	// L.marker([51.495, -0.083], {icon: redIcon}).bindPopup("I am a red leaf.").addTo(map);
	// L.marker([51.49, -0.1], {icon: orangeIcon}).bindPopup("I am an orange leaf.").addTo(map);

	$url = './assets/images/fichier.json'; // path to your JSON file
	$data = file_get_contents($url); // put the contents of the file into a variable
	$characters = json_decode($data); // decode the JSON feed

	//echo $characters[0]->name;

	// foreach ($characters as $character) {
	// 	echo $character->lat . '<br>';
	// }

	// console.log($character);


	// Nous appelons la fonction ajax de jQuery
		$.ajax({
		// 	// On pointe vers le fichier selectData.php
		// 	url : "./assets/images/fichier.json",
		// }).done(function(json){ // Si on obtient une réponse, elle est stockée dans la variable json
		// 	// On construit l'objet villes à partir de la variable json 
		// 	var villes = JSON.parse(json);
		// 	// On parcourt l'objet villes
		// 	for(ville in villes){
		// 		var marker = new google.maps.Marker({
		// 			// parseFloat nous permet de transformer la latitude et la longitude en nombre décimal
		// 			position: {lat: parseFloat(villes[ville].lat), lng: parseFloat(villes[ville].lon)},
		// 			title: villes[ville].nomVille,
		// 			map: map
		// 		});	
		// 	}
		// });




}


window.onload = function(){
	// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
	initMap();

};


