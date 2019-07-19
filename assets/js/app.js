window.onload  = function() {

// Création de la map + récupération de l'objet de la map
    displayModifFestiv()
    displayDeleteFestiv()

    // Evénement au click sur bouton Annonces
    displayValidForm();

    var myMap = setMap();

    $.ajax({
        url: getApiUrl()
    }).done(function (response) {

	setMarkers(response, myMap)
    setListenerOnInput()   
	
	 })
}