// MAP
function setMap() {

    // Coordonnées Bretagne (l'origine de la carte)
    var origin_of_map = [48.179109, -2.750727];

    // Création de la map avec Leaflet
    var mymap = L.map('mapid').setView(origin_of_map, 8);

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 8,
        id: 'mapbox.streets',
        accessToken: 'pk.eyJ1IjoiaHVndWVzMzUxMzMiLCJhIjoiY2p0cGU2NTFkMDNndDN5cGMzaHdlcTMwdiJ9.7N9UW0XFAhQjurVvyi-axg'
    }).addTo(mymap);
    return mymap;
}

// MAP - Markers positions
function getMarkerPosition(response, fichier) {
    //return [response[fichier].lat, response[fichier].lon]

    return [response[48.179109], response[-2.750727]]
}

// MAP - Marker
function setMarkerOnMap(map, marker_positions){
    var LeafIcon = L.Icon.extend({
        options: {
            iconSize: [35, 35]
        }
    })

    var iconMarker = new LeafIcon({iconUrl: '../assets/images/green_marker.png'})

    return L.marker(marker_positions, iconMarker).addTo(mymap)
}

// Datas table festivals
function getMarkerInformations(response, fichier){
    return {    
        "name": response[fichier].name,
        "town": response[fichier].town,
    }
}

// MAP / MARKERS - Popup
function getPopupText(marker_informations){

    var available = setAvailableInformations(marker_informations);

    // Définition de la popup
    return '<h6>' + marker_informations.name + '</h6><p>Adresse : ' + marker_informations.town + '</p>';
    
}

// MAP / MARKERS - Popup
function setPopupOnMap(marker, popup){
    marker.bindPopup(popup);
}

// MAP / MARKERS - Ajout de l'évènement lorsqu'on clique sur un marker
function setInfoMenuOnRight(marker, marker_informations){
    $(marker).on('click', function () {
        var available = setAvailableInformations(marker_informations)
        setAvailableInformations(marker_informations)
        //setMenuInformations(available, marker_informations)
    })
}

function setMarkers(response, myMap) {

    for (var fichier in response) {

        // On crée une variable qui contient les positions du marker actuel
        var marker_positions = getMarkerPosition(response, fichier)

        // On crée un objet qui contient les informations du festival
        var new_marker_informations = getMarkerInformations(response, fichier)

        // On crée le marker dans la carte
        var marker_on_map = setMarkerOnMap(myMap, marker_positions, new_marker_informations)

        // On récupère le contenu du popup
        var popup = getPopupText(new_marker_informations)

        // On définit le popup sur la carte
        setPopupOnMap(marker_on_map, popup)

        // On crée un écouteur d'évènement sur le marker précédement créé
        setInfoMenuOnRight(marker_on_map, new_marker_informations)

    }
}


// MAP
function getApiUrl() {
    return "../fichier.json";
}