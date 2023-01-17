jQuery(document).ready(function ($) {

    function createGrowBookCarousel() {
        $('.grow_book_slider').slick({
            slidesToShow: 1,
            infinte: true,
            dots: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 4000,
        });
    }

    const { href } = window.location;
    if (href.includes("health-plans") || href.includes('health-systems') || href.includes('solution-vendors')) {
        createGrowBookCarousel();
    }

});