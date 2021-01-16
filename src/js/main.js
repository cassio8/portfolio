
/***
 * GERAL
 ***/
$(function() {
    App.SetToggle();
    App.SetGaleria();
    App.SetBanner();
    App.SetCarouselMobile();
    App.SetHeaderFixed(80);
    App.SetValidate();
    App.SetMaskInput();
    App.SetInputError();
    App.SetFormSuccess();
    App.SetAnimatescroll(150);
    App.SetWow(200);

    // Cookies
    if (localStorage.hasOwnProperty('verify_cookies')) {
        $('.Cookies').addClass('_hide');
    }

    $('.Cookies .Button').click(function(event) {
        event.preventDefault();
        localStorage.setItem('verify_cookies', true);
        $('.Cookies').addClass('_hide');
    });

    // Ester
    var countClicks = 0;

    $('._ester').click(function(event) {
        countClicks++;

        if (countClicks >= 15) {
            window.location.replace('egg.php');
        }
    });

});