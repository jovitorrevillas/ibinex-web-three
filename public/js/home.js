$(document).ready(function(){
    if ($(window).width() < 768) {
        $('.home-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            centerPadding: '60px',
            // prevArrow: $('.prev'),
            // nextArrow: $('.next'),
        });
    }
});
