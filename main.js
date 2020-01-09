$(document).ready(function() {

    $('.menu-toggler').on('click', function() {
        $(this).toggleClass('open');
        $('.top-nav').toggleClass('open');
    });


    //closes the menu toggler properly when anchor is clicked
    $('.top-nav .nav-link').on('click', function() {
        $('.menu-toggler').removeClass('open');
        $('.top-nav').removeClass('open');
    });


//uses the anchor tags to go to the proper div in the webpage also smooth scrolling
    $('nav a[href*="#"]').on('click', function() {
       $('html , body').animate({
           scrollTop: $($(this).attr('href')).offset().top - 100
       }, 2000);
 
    });

    //uses the chevron to scroll up
    $('#up').on('click', function() {
        $('html , body').animate({
            scrollTop: 0
        }, 2000);
        event.preventDefault();//prevents the flash before scrolling up
    });

    AOS.init({

easing: 'ease',
duration: 1800,
once:true
    });
});