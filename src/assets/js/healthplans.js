jQuery(document).ready(function($) {

    function createGrowBookCarousel() {
        $('.grow_book_slider').slick({
            slidesToShow: 1,
            infinte: true,
            dots: true,
            arrows: false,
        });
    }


    if (window.location.href.includes("health-plans")) {
        createGrowBookCarousel();
    }

});