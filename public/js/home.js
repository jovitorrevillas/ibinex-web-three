$(document).ready(function(){
    if ($(window).width() < 768) {
        $('.home-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
        });
    }
});
