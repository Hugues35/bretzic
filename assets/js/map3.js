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



	// fonction qui récupère l'interieur du JSON
	var json;
	function getmyjson(callback){
		$.getJSON('./assets/images/fichier.json',callback);
	}
	

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
	  
		//Marker Pour le point du centre 

		var greenIcon = new LeafIcon({iconUrl: './assets/images/green_marker.png'}),
		redIcon = new LeafIcon({iconUrl: 'leaf-red.png'}),
		orangeIcon = new LeafIcon({iconUrl: 'leaf-orange.png'});

	L.marker([coordjson(point.lat), coordjson(point.lon), {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(mymap);
	 

	//Fonction pour afficher les points grace aux coordonnées dans le fichier JSON
	  getmyjson(function(data){
		alert("toto");	
		var points = data.points; 			
		var point ; 
		var latLng;
		
		for (i in points){
				point=points[i]; // point prend chaques element du JSON
				coordjson = new google.maps.LatLng(point.lat,point.lon);
					 var marker= new google.maps.Marker({ // on crée un nouveau marker pour chaques résultats
				 position: coordjson , // on lui donne les coordonées de son élements
				 map: map, // on l'applique a la map
				 title: point.name // on lui donne le nom du commerce inclus dans le JSON
			 });
	 	 
		 }

	 })
	}


window.onload = function(){
	// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
	initMap();

};