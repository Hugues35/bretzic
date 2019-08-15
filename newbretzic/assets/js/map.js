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
            iconAnchor: [8, 30],
            popupAnchor: [8, -26]
        }
    });

    var greenIcon = new LeafIcon({iconUrl: './assets/images/green_marker.png'});
    var yellowIcon = new LeafIcon({iconUrl: './assets/images/yellow_marker.png'});

    $.get('./fichierjson.json', function (data) {
        for (datas in data) {
            L.marker([data[datas].lat, data[datas].lon], {icon: greenIcon}).bindPopup('<p style="color: purple; text-align: center; font-weight: bold">Festival "' + data[datas].name + ' "</p><p style="text-align: center">Du ' + data[datas].datebegin + ' au ' + data[datas].dateend + '</p><p style="color: black; text-align: center; font-weight: bold">' + data[datas].town + '</p>').addTo(mymap);
        }
    });

    $.get('./concertsjson.json', function (data) {
        for (datas in data) {
            L.marker([data[datas].lat, data[datas].lon], {icon: yellowIcon}).bindPopup('<p style="color: purple; text-align: center; font-weight: bold">Concert de "' + data[datas].groupname + ' "</p><p style="text-align: center">Le ' + data[datas].date + '</p><p style="color: black; text-align: center; font-weight: bold">' + data[datas].town + '</p><p style="text-align: center; font-style:italic"><i class="fab fa-itunes-note"></i>&nbsp;' + data[datas].style + '</p>').addTo(mymap);
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