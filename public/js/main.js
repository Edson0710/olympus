(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $('.testimonial-carousel').owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        loop: true,
        nav: false,
        dots: true,
        items: 1,
        dotsData: true,
    });
 
})(jQuery);

    /*Validar que los domingos no estén disponibles*/
    var elDate = document.getElementById('fechaUsuarioCita');
    var elForm = document.getElementById('contacto');
    var elSubmit = document.getElementById('contactoSubmit');

    function sinDomingos(){
        var day = new Date(elDate.value ).getUTCDay();
        // Días 0-6, 0 es Domingo 6 es Sábado
        elDate.setCustomValidity(''); // limpiarlo para evitar pisar el fecha inválida
        if( day == 0 ){
        elDate.setCustomValidity('Domingos no disponibles, por favor seleccione otro día');
        } else {
        elDate.setCustomValidity('');
        }
        if(!elForm.checkValidity()) {elSubmit.click()};
    }

    function obtenerfechafinf1(){
        sinDomingos();
    }
       