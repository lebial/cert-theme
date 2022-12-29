jQuery(document).ready(function ($) {

    function createGrowBookCarousel() {
        $('.grow_book_slider').slick({
            slidesToShow: 1,
            infinte: true,
            dots: true,
            arrows: false,
        });
    }

    const { href } = window.location;
    if (href.includes("health-plans") || href.includes('providers') || href.includes('vendors')) {
        createGrowBookCarousel();
    }

});