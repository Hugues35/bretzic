var btnFestivalmodify=('#btn-festivalmodify');
var btnFestivaldelete=('#btn-festivaldelete');
var festivDeletetext=('#festiv-delete-text');

// function displayValidForm(){
//     $(btnAnnounce).on('click', function () {
//         //$('#announceform').fadeIn('slow');
//         $('#town-inscrip').fadeOut('slow');
//         $(document).scrollTop(btnAnnounce);       
//     })
// }

function displayModifFestiv(){
    $(btnFestivalmodify).on('click', function () {
        $(festivDeletetext).hide();
        $('#festiv-modif-text').fadeIn('fast');       
    })
}

function displayDeleteFestiv(){
    $(btnFestivaldelete).on('click', function () {
       $('#festiv-modif-text').fadeOut('fast');
        $('#festiv-delete-text').fadeIn('fast');       
    })
}