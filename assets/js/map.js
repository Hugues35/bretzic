function initMap() {
    // Coordonnées Bretagne
    var bretagne = [48.179109, -2.750727];

    // Création de la map
    var mymap = L.map('mapid').setView(bretagne, 8);


    // Création du calque images
    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {

        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 20,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiaHVndWVzMzUxMzMiLCJhIjoiY2p0cGU2NTFkMDNndDN5cGMzaHdlcTMwdiJ9.7N9UW0XFAhQjurVvyi-axg'
    }).addTo(mymap);

    var LeafIcon = L.Icon.extend({
        options: {  
            shadowSize: [50, 64],
            iconAnchor: [35, 75],
            popupAnchor: [-3, -76]
        }
    });

    var greenIcon = new LeafIcon({iconUrl: './assets/images/green_marker.png'});

    $.get('./fichierjson.json', function (data) {
        for (datas in data) {
            L.marker([data[datas].lat, data[datas].lon], {icon: greenIcon}).bindPopup(data[datas].name).addTo(mymap);
        }
    });

    // Appel de la fonction ajax de jQuery
    $.ajax({
    
     });

}

window.onload = function () {
    // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
    initMap();

};