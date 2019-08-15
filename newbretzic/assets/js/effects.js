// HOME - Effet apparition introduction
function introAppear() {
    $('.bretagne').fadeTo(6000, 1);
    $('.home-titles1').fadeTo(6000, 1);
    $('.home-titles2').fadeTo(10000, 1);
    $('.home-titles3').fadeTo(14000, 1);
}

// FORMULAIRE REGISTRATION - affichage bouton si pseudo et mot de passe renseignés
function canDisplayButton() {
    if ($('#pseudo-inscrip').attr('data-complete') === "true" && $('#pass-inscrip').attr('data-complete') === "true") {
        $('#btn-inscrip').fadeIn("fast")
    } else {
        $('#btn-inscrip').fadeOut("fast")
    }
}

// FORMULAIRES - Evénement saisie
function setTextContent(textToChange, nameLength, msgColor){
    textToChange.html(" saisie " + nameLength) // Texte de l'aide
    textToChange.css("color", msgColor) // Couleur du texte de l'aide
}

// FORMULAIRE - Vérification de la saisie du pseudo et mot de passe
function setListenerOnInput() {

    // FORMULAIRE registration

    $('#pseudo-inscrip').keyup(function() {
        // Correspond à 2 lettres mini + caractères alphabétiques uniquement
        var contentFilled = $(this).val()
        var nameLength = "2 \"lettres ou chiffres\" mini";
        var msgColor = "red";

        var regexName = /^[a-zA-Z1-9 ]+$/;

        if (contentFilled.length >= 2 && regexName.test(contentFilled)) {
            nameLength = "conforme";
            msgColor = "green";
            $('#pseudo-inscrip').attr("data-complete", "true")
        }
        else {
            $('#pseudo-inscrip').attr("data-complete", "false")
        }

        setTextContent($('#pseudoHelp'), nameLength, msgColor);
        canDisplayButton()
    })

    $('#pass-inscrip').keyup(function() {
        // Correspond à 2 lettres mini + caractères alphabétiques uniquement
        var contentFilled = $(this).val()
        var nameLength = "2 \"lettres ou chiffres\" mini";
        var msgColor = "red";

        var regexName = /^[a-zA-Z1-9 ]+$/;

        if (contentFilled.length >= 2 && regexName.test(contentFilled)) {
            nameLength = "conforme";
            msgColor = "green";
            $('#pass-inscrip').attr("data-complete", "true")
        } else {
            $('#pass-inscrip').attr("data-complete", "false")
        }

        setTextContent($('#passwordHelp'), nameLength, msgColor);
        canDisplayButton()
    })

    $('#birth-inscrip').keyup(function() {
        // Correspond à 4 chiffres
        var contentFilled = $(this).val()
        var nameLength = "4 \"chiffres\" mini";
        var msgColor = "red";

        var regexName = /[1-9]/;

        if (contentFilled.length == 4 && regexName.test(contentFilled)) {
            nameLength = "conforme";
            msgColor = "green";
            $('#birth-inscrip').attr("data-complete", "true")
        } else {
            $('#birth-inscrip').attr("data-complete", "false")
        }

        setTextContent($('#birthHelp'), nameLength, msgColor);
        canDisplayButton()
    })

    $('#exper-inscrip').keyup(function() {
        // Correspond à 2 chiffres maxi
        var contentFilled = $(this).val()
        var nameLength = "2 \"chiffres\" maxi";
        var msgColor = "red";

        var regexName = /[0-9]/;

        if (contentFilled.length <= 2 && regexName.test(contentFilled)) {
            nameLength = "conforme";
            msgColor = "green";
            $('#exper-inscrip').attr("data-complete", "true")
        } else {
            $('#exper-inscrip').attr("data-complete", "false")
        }

        setTextContent($('#experHelp'), nameLength, msgColor);
        canDisplayButton()
    })

    $('#group-inscrip').keyup(function() {
        // Correspond à 2 lettres mini + caractères alphabétiques uniquement
        var contentFilled = $(this).val()
        var nameLength = "2 \"lettres ou chiffres\" mini";
        var msgColor = "red";

        var regexName = /^[a-zA-Z1-9 ]+$/;

        if (contentFilled.length >= 2 && regexName.test(contentFilled)) {
            nameLength = "conforme";
            msgColor = "green";
            $('#group-inscrip').attr("data-complete", "true")
        }
        else {
            $('#group-inscrip').attr("data-complete", "false")
        }

        setTextContent($('#groupHelp'), nameLength, msgColor);
        canDisplayButton()
    })

    // FORMULAIRE connection

    $('#pseudo-connect').keyup(function() {
        // Correspond à 2 lettres mini + caractères alphabétiques uniquement
        var contentFilled = $(this).val()
        var nameLength = "2 \"lettres ou chiffres\" mini";
        var msgColor = "red";

        var regexName = /^[a-zA-Z1-9 ]+$/;

        if (contentFilled.length >= 2 && regexName.test(contentFilled)) {
            nameLength = "conforme";
            msgColor = "green";
            $('#pseudo-connect').attr("data-complete", "true")
        }
        else {
            $('#pseudo-connect').attr("data-complete", "false")
        }

        setTextContent($('#pseudoHelp'), nameLength, msgColor);
        canDisplayButton()
    })

    $('#pass-connect').keyup(function() {
        // Correspond à 2 lettres mini + caractères alphabétiques uniquement
        var contentFilled = $(this).val()
        var nameLength = "2 \"lettres ou chiffres\" mini";
        var msgColor = "red";

        var regexName = /^[a-zA-Z1-9 ]+$/;

        if (contentFilled.length >= 2 && regexName.test(contentFilled)) {
            nameLength = "conforme";
            msgColor = "green";
            $('#pass-connect').attr("data-complete", "true")
        } else {
            $('#pass-connect').attr("data-complete", "false")
        }

        setTextContent($('#passwordHelp'), nameLength, msgColor);
        canDisplayButton()
    })

    // FORMULAIRE connectionadmin

    $('#admin-ident').keyup(function() {
        // Correspond à 2 lettres mini + caractères alphabétiques uniquement
        var contentFilled = $(this).val()
        var nameLength = "2 \"lettres ou chiffres\" mini";
        var msgColor = "red";

        var regexName = /^[a-zA-Z1-9 ]+$/;

        if (contentFilled.length >= 2 && regexName.test(contentFilled)) {
            nameLength = "conforme";
            msgColor = "green";
            $('#admin-ident').attr("data-complete", "true")
        }
        else {
            $('#admin-ident').attr("data-complete", "false")
        }

        setTextContent($('#pseudoHelp'), nameLength, msgColor);
        canDisplayButton()
    })

    $('#admin-pass').keyup(function() {
        // Correspond à 2 lettres mini + caractères alphabétiques uniquement
        var contentFilled = $(this).val()
        var nameLength = "2 \"lettres ou chiffres\" mini";
        var msgColor = "red";

        var regexName = /^[a-zA-Z1-9 ]+$/;

        if (contentFilled.length >= 2 && regexName.test(contentFilled)) {
            nameLength = "conforme";
            msgColor = "green";
            $('#admin-pass').attr("data-complete", "true")
        } else {
            $('#admin-pass').attr("data-complete", "false")
        }

        setTextContent($('#passwordHelp'), nameLength, msgColor);
        canDisplayButton()
    })

}